<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use \Illuminate\Notifications\Notifiable;
use App\Services\FCMService;
use Illuminate\Support\Facades\Validator;
use App\Models\KathavachakBooking;
use App\Models\KathavachkLeave;
use App\Models\Kathavachak;
use App\Models\Jajmaan;
use App\Models\PaymentTable;

class KathavachakBookingAPIController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'jajman_id' => 'required|string',
            'kathavachak_id' => 'required|string',
            'booking_date_from' => 'required|date|after_or_equal:today',
            'booking_date_to' => 'required|date|after_or_equal:booking_date_from',
            'location' => 'required|string',
            'katha_type' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'time' => 'required|string',
            'total_price' => 'required|numeric',
            'advance' => 'required|numeric|lte:total_price',
            'balance' => 'required|numeric|lte:total_price',
            'transaction_id' => '',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $v_jajman = Jajmaan::where('jajmaan_id', $request->jajman_id)->where('status','0')->where('deleted_at',NULL)->first();
        if(is_null($v_jajman)){
            return response()->json([
                'status_code' => 200,
                'message' => 'Success',
                'response' => 'Jajmaan not Found',
            ]);
        }

        $verify = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('status','0')->where('verification','0')->where('deleted_at',NULL)->first();
        if(is_null($verify)){
            return response()->json([
                'status_code' => 200,
                'message' => 'Success',
                'response' => 'Kathavachak not available',
            ]);
        }
        // Check Kathavachak on leave
        $check_prevoius = KathavachkLeave::where('kthavchk_id',$request->kathavachak_id)->whereBetween('leave_date',[$request->booking_date_from,$request->booking_date_to])->where('leave_status','!=','2')->first();
        if(!is_null($check_prevoius)){
            return response()->json([
                'status_code' => 200,
                'message' => 'Success',
                'response' => 'Kathavachak is on leave',
            ]);
        }
        // Generate a unique booking ID
        $booking_id = 'KTBK' . rand(11, 99) . date('dmy') . last_id('kathavachak_bookings');
        $advance_date = date('Y-m-d');

        // Create a new Kathavachak booking
        $booking = KathavachakBooking::create(array_merge($request->all(), ['booking_id' => $booking_id, 'jajmaan_id' => $request->jajman_id, 'advance_date'=>$advance_date,'booking_otp' => rand(1000, 9999)]));
        if($booking){
            $save = PaymentTable::create([
                'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                'payment_for_id' => $booking_id,
                'payment_for_what' => "Katha Booking",
                'transection_id' => $request->transaction_id,
                'amount' => $request->advance,
                'entity' => $request->advance,
                'type' => 'Credit',
                'mobile' => '',
                'fee' => '0',
            ]);
        }

        // Send Notification
        $fcm_token = jajmaan_fcm($request->jajman_id);
        $title ='Thank You for Booking';
        $body = 'Congratulations! Your Katha has been successfully booked. Thank you for choosing our services!';
        $sender_id = $request->jajman_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

        // Send Notification
        $fcm_token2 = get_fcm_key($request->kathavachak_id);
        $title2 ='New Katha Booking';
        $body2 = 'Congratulations! New Katha has booked. Kindly check in the application!';
        $sender_id2 = $request->kathavachak_id;
        send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification


        return response()->json([
            'status_code' => 200,
            'message' => 'Booking Successful',
            'response' => $booking,
        ]);
    }


// Users Kathavachak Booking List
    public function jajmaan_kathavachak_total_booking(Request $request){
        $rules = [
            'jajman_id' => 'required|string'
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $v_jajman = Jajmaan::where('jajmaan_id', $request->jajman_id)->where('status','0')->where('deleted_at',NULL)->first();
        if(!is_null($v_jajman)){

            $booking_history = KathavachakBooking::where('jajmaan_id',$request->jajman_id)->where('status','0')->where('deleted_at',NULL)->latest()->get();
            foreach ($booking_history as $key => $value) {
                $value->kathavachak_name = kathavachak_name($value->kathavachak_id);
                $value->kathavachak_number = kathavachak_number($value->kathavachak_id);
                $value->kathavachak_image = kathavachak_image($value->kathavachak_id);
                $value->jajmaan_name = jajmaan_name($value->jajmaan_id);
                $value->jajmaan_number = jajmaan_number($value->jajmaan_id);
                $value->jajmaan_image = jajmaan_image($value->jajmaan_id);
            }
            return response()->json([
                'status_code' => 200,
                'message' => 'Booking History Found',
                'response' => $booking_history,
            ]);
        }
        return response()->json([
            'status_code' => 400,
            'message' => 'Jajmaan Not Found',
            'response' => ''
        ]);

    }



    // Completed Booking
    public function jajmaan_kathavachak_booking_list_by_status(Request $request){
        $rules = [
            'jajman_id' => 'required|string',
            'booking_status' => 'required|in:0,1,2'   // 0->Booked/Pending,   1->Completed,    2->Cancelled
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $v_jajman = Jajmaan::where('jajmaan_id', $request->jajman_id)->where('status','0')->where('deleted_at',NULL)->first();
        if(!is_null($v_jajman)){

            $booking_list = KathavachakBooking::where('jajmaan_id',$request->jajman_id)->where('status','0')->where('booking_status',$request->booking_status)->where('deleted_at',NULL)->latest()->get();
            foreach ($booking_list as $key => $value) {
                $value->kathavachak_name = kathavachak_name($value->kathavachak_id);
                $value->kathavachak_number = kathavachak_number($value->kathavachak_id);
                $value->kathavachak_image = kathavachak_image($value->kathavachak_id);
                $value->jajmaan_name = jajmaan_name($value->jajmaan_id);
                $value->jajmaan_number = jajmaan_number($value->jajmaan_id);
                $value->jajmaan_image = jajmaan_image($value->jajmaan_id);
            }
            return response()->json([
                'status_code' => 200,
                'message' => 'Booking List Found',
                'response' => $booking_list,
            ]);
        }
        return response()->json([
            'status_code' => 400,
            'message' => 'Jajmaan Not Found',
            'response' => ''
        ]);
    }


    // Cancel Booking
    public function cancel_kathavachak_booking(Request $request){
        $rules = [
            'jajman_id' => 'required|string',
            'booking_id' => 'required|string',
            'acholder' => 'required|string',
            'acnumber' => 'required|numeric',
            'ifsc' => 'required|string',
            'type' => 'required|string',
            'reason' => 'required|string',
            'amount' => 'required|numeric',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $v_jajman = Jajmaan::where('jajmaan_id', $request->jajman_id)->where('status','0')->where('deleted_at',NULL)->first();
        if(!is_null($v_jajman)){

            $booking = KathavachakBooking::where('booking_id',$request->booking_id)->where('booking_status','0')->where('deleted_at',NULL)->first();

            if($booking){
                $cancel_booking = KathavachakBooking::where('booking_id',$request->booking_id)->update([
                    'cancel_date'=>date('d-m-Y'),
                    'can_acholder'=>$request->acholder,
                    'can_acnumber'=>$request->acnumber,
                    'can_ifsc'=>$request->ifsc,
                    'can_type'=>$request->type,
                    'can_reason'=>$request->reason,
                    'can_amount'=>$request->amount,
                    'booking_status'=>'2',
                ]);

                // Send Notification
                $fcm_token = get_fcm_key($request->jajman_id);
                $title ='Katha Cancelled';
                $body = 'Your Katha has been cancelled. Your refund will be initate shortly';
                $sender_id = $request->jajman_id;
                send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

                // Send Notification
                $fcm_token2 = get_fcm_key($booking->kathavachak_id);
                $title2 ='Katha Cancelled';
                $body2 = 'Cancelled! Katha has been cancelled by yajman!';
                $sender_id2 = $booking->kathavachak_id;
                send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

                return response()->json([
                    'status_code' => 200,
                    'message' => 'Booking Cancelled',
                    'response' => $cancel_booking,
                ]);
            }
            return response()->json([
                'status_code' => 400,
                'message' => 'Booking Not Found',
                'response' => ''
            ]);
        }
        return response()->json([
            'status_code' => 400,
            'message' => 'Jajmaan Not Found',
            'response' => ''
        ]);
    }


// Verify Booking OTP
    public function verify_booking_otp(Request $request){
        $rules = [
            'kathavachak_id' => 'required|string',
            'booking_id' => 'required|string',
            'booking_otp' => 'required|numeric'
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $verify = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('status','0')->where('verification','0')->where('deleted_at',NULL)->first();
        if($verify){
            $check = KathavachakBooking::where('booking_id',$request->booking_id)->where('booking_status','0')->where('deleted_at',NULL)->where('booking_otp',$request->booking_otp)->first();
            if($check){
                $update = KathavachakBooking::where('kathavachak_id',$request->kathavachak_id)->where('booking_id',$request->booking_id)->where('booking_status','0')->where('deleted_at',NULL)->where('booking_otp',$request->booking_otp)->update(['booking_status'=>'1','balance_done_date'=>date('Y-m-d')]);
                // Send Notification
                $fcm_token = jajmaan_fcm($check->jajmaan_id);
                $title ='Booking Completed';
                $body = 'Congratulations! Your Katha has been successfully completed. Please share your valuable feedback in the review section.';
                $sender_id = $check->jajmaan_id;
                send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

                // Send Notification
                $fcm_token2 = get_fcm_key($request->kathavachak_id);
                $title2 ='Booking Completed';
                $body2 = 'Congratulations! Katha has been successfully completed.';
                $sender_id2 = $request->kathavachak_id;
                send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification


                return response()->json([
                    'status_code' => 200,
                    'message' => 'OTP Verified',
                    'response' => $request->booking_otp
                ]);
            }else{
                return response()->json([
                'status_code' => 400,
                'message' => 'Invalid OTP',
                'response' => ''
            ]);
            }
        }else{
            return response()->json([
            'status_code' => 400,
            'message' => 'Kathavachak Not Found',
            'response' => ''
        ]);
        }
    }


    // Kathavachak Booking List
    public function kathavachak_total_bookings(Request $request){
        $rules = [
            'kathavachak_id' => 'required|string'
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $v_kathavachak = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('status','0')->where('verification','0')->where('deleted_at',NULL)->first();
        if(!is_null($v_kathavachak)){

            $booking_history = KathavachakBooking::where('kathavachak_id',$v_kathavachak->kthavchk_id)->where('booking_status','0')->where('status','0')->where('deleted_at',NULL)->latest()->get();
            foreach ($booking_history as $key => $value) {
                $value->kathavachak_name = kathavachak_name($value->kathavachak_id);
                $value->kathavachak_number = kathavachak_number($value->kathavachak_id);
                $value->kathavachak_image = kathavachak_image($value->kathavachak_id);
                $value->jajmaan_name = jajmaan_name($value->jajmaan_id);
                $value->jajmaan_number = jajmaan_number($value->jajmaan_id);
                $value->jajmaan_image = jajmaan_image($value->jajmaan_id);
            }
            return response()->json([
                'status_code' => 200,
                'message' => 'Booking History Found',
                'response' => $booking_history,
            ]);
        }
        return response()->json([
            'status_code' => 400,
            'message' => 'Kathavachak Not Found',
            'response' => ''
        ]);

    }



    // Completed Booking
    public function kathavachak_booking_list_by_status(Request $request){
        $rules = [
            'kathavachak_id' => 'required|string',
            'booking_status' => 'required|in:0,1,2'   // 0->Booked/Pending,   1->Completed,    2->Cancelled
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $v_jajman = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('status','0')->where('verification','0')->where('deleted_at',NULL)->first();
        if(!is_null($v_jajman)){

            $booking_list = KathavachakBooking::where('kathavachak_id',$v_jajman->kthavchk_id)->where('status','0')->where('booking_status',$request->booking_status)->where('deleted_at',NULL)->latest()->get();
            foreach ($booking_list as $key => $value) {
                $value->kathavachak_name = kathavachak_name($value->kathavachak_id);
                $value->kathavachak_number = kathavachak_number($value->kathavachak_id);
                $value->kathavachak_image = kathavachak_image($value->kathavachak_id);
                $value->jajmaan_name = jajmaan_name($value->jajmaan_id);
                $value->jajmaan_number = jajmaan_number($value->jajmaan_id);
                $value->jajmaan_image = jajmaan_image($value->jajmaan_id);
            }
            return response()->json([
                'status_code' => 200,
                'message' => 'Booking List Found',
                'response' => $booking_list,
            ]);
        }
        return response()->json([
            'status_code' => 400,
            'message' => 'Kathavachak Not Found',
            'response' => ''
        ]);
    }


        // Completed Booking
        public function kathavachak_unavailable_date(Request $request){
        $rules = [
            'kathavachak_id' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $booked_dates = [];
        $dates = [];
        $v_jajman = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('status','0')->where('verification','0')->where('deleted_at',NULL)->first();
        if(!is_null($v_jajman)){

            $booking_list = KathavachakBooking::where('kathavachak_id',$v_jajman->kthavchk_id)->where('booking_status','0')->where('booking_date_from','>=',date('Y-m-d'))->where('deleted_at',NULL)->latest()->get();
            foreach ($booking_list as $key => $value) {
                $booked_dates = array_merge($booked_dates, generateDateList($value->booking_date_from, $value->booking_date_to));
            }
            $leave_date = KathavachkLeave::where('kthavchk_id',$request->kathavachak_id)->where('leave_date','>=',date('Y-m-d'))->where('leave_status','!=','2')->get('leave_date');
            foreach ($leave_date as $key => $value) {
                $dates[] = $value->leave_date;
            }
            $merged = array_merge($booked_dates,$dates);
            $unique_dates = array_values(array_unique($merged));;
            return response()->json([
                'status_code' => 200,
                'message' => 'Booking Dated List',
                'response' => $unique_dates,
            ]);
        }
        return response()->json([
            'status_code' => 400,
            'message' => 'Kathavachak Not Found',
            'response' => ''
        ]);
    }


}
