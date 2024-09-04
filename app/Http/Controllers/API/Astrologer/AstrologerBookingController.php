<?php

namespace App\Http\Controllers\API\Astrologer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Astrologer;
use App\Models\AstrologerBooking;
use App\Models\Kathavachak;
use App\Models\Jajmaan;
use App\Models\AstroPlan;
use App\Models\PaymentTable;
use Str;

class AstrologerBookingController extends Controller
{
    // AstroBooking
    public function store(Request $request){
         // Validate the request data
         $validator = Validator::make($request->all(), [
            'astro_date' => 'required|string',
            'jajmaan_id' => 'required|string',
            'horoscope' => 'required|string',
            'astro_id' => 'required|string',
            'plan_id' => 'required|string',
            'plan_amt' => 'required|string',
            'plan_price' => 'required|string',
            'talk_time' => 'required|string',
            'astro_slot' => 'required|string',
            'astro_notes' => 'required|string',
            'jajman_dob' => 'required|date',
            'dob_time' => 'required',
            'transaction_id' => '',
            'gender' => 'required|in:0,1,2'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $check = Astrologer::where('astro_id',$request->astro_id)->where('deleted_at',NULL)->first();
        if (is_null($check)) {
            return response()->json(['message' => 'No Astrologer Found'], 400);
        }

        $booking_id = 'AST' . date('dmy') . last_id('astro_booking');
        $vendor_income = $check->astro_final_price;
        // Create a new Astrologer record
        $astrologer = new AstrologerBooking([
            'booking_id' => $booking_id,
            'astro_date' => $request->input('astro_date'),
            'jajmaan_id' => $request->input('jajmaan_id'),
            'horoscope' => $request->input('horoscope'),
            'astro_id' => $request->input('astro_id'),
            'plan_id' => $request->input('plan_id'),
            'plan_amt' => $request->input('plan_amt'),
            'plan_price' => $request->input('plan_price'),
            'vendor_income' => $vendor_income,
            'talk_time' => $request->input('talk_time'),
            'astro_slot' => $request->input('astro_slot'),
            'astro_notes' => $request->input('astro_notes'),
            'jajman_dob' => $request->input('jajman_dob'),
            'dob_time' => $request->input('dob_time'),
            'gender' => $request->input('gender'),
            'transaction_id' => $request->input('transaction_id'),
            'booking_date' => date('d-m-Y'),
            'booking_otp' => rand(1111,9999)
        ]);

        $astrologer->save();

        if($astrologer){
            $save = PaymentTable::create([
                'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                'payment_for_id' => $booking_id,
                'payment_for_what' => "Astrology Booking",
                'transection_id' => $request->transaction_id,
                'amount' => $request->plan_price,
                'entity' => $request->plan_price,
                'type' => 'Credit',
                'mobile' => '',
                'fee' => '0',
            ]);

            // Send Notification
            $fcm_token = jajmaan_fcm($request->jajmaan_id);
            $title ='Thank You for Booking';
            $body = 'Congratulations! Your Astrology has been successfully booked. Thank you for choosing our services!';
            $sender_id = $request->jajmaan_id;
            send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

            // Send Notification
            $fcm_token2 = get_fcm_key($request->astro_id);
            $title2 ='New Astrlogy Booking';
            $body2 = 'Congratulations! New Astrology has booked. Kindly check in the application!';
            $sender_id2 = $request->astro_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

        }

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Astrologer Booked Successfully',
            'response' => $booking_id
        ];
    }


    // Cancel Booking
    public function cancel_astrologer_booking(Request $request){
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

            $booking = AstrologerBooking::where('booking_id',$request->booking_id)->where('booking_status','0')->where('deleted_at',NULL)->first();

            if($booking){
                $cancel_booking = AstrologerBooking::where('booking_id',$request->booking_id)->update([
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
                $fcm_token = jajmaan_fcm($request->jajman_id);
                $title ='Booking Cancelled';
                $body = 'Your Astrology has been cancelled. Your refund will be initate shortly';
                $sender_id = $request->jajman_id;
                send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

                // Send Notification
                $fcm_token2 = get_fcm_key($booking->astro_id);
                $title2 ='Booking Cancelled';
                $body2 = 'Cancelled! Astrology has been cancelled by yajman!';
                $sender_id2 = $booking->astro_id;
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



    // Verify Booking
    public function verify_astrologer_booking_by_otp(Request $request){
        $rules = [
            'astro_id' => 'required|string',
            'booking_id' => 'required|string',
            'booking_otp' => 'required|numeric',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $check_astro = Astrologer::where('astro_id',$request->astro_id)->first();

        $booking = AstrologerBooking::where('booking_id',$request->booking_id)->where('astro_id',$request->astro_id)->where('booking_status','0')->where('booking_otp',$request->booking_otp)->first();

        if($booking){
            $verify_booking = AstrologerBooking::where('booking_id',$request->booking_id)->update([
                'booking_status'=>'1',
            ]);

            // Send Money to Wallet
            $new_money = (int)$check_astro->astro_final_price + (int)$check_astro->astro_wallet;
            $update_astro = Astrologer::where('astro_id',$request->astro_id)->update(['astro_wallet' => $new_money]);

            // Send Notification
            $fcm_token = jajmaan_fcm($booking->jajmaan_id);
            $title ='Booking Complete';
            $body = 'Congratulations! Your Astrology has been successfully completed. Please share your valuable feedback in the review section.';
            $sender_id = $booking->jajmaan_id;
            send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

            // Send Notification
            $fcm_token2 = get_fcm_key($request->astro_id);
            $title2 ='Booking Complete';
            $body2 = 'Congratulations! Astrology has been successfully completed.';
            $sender_id2 = $request->astro_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

            return response()->json([
                'status_code' => 200,
                'message' => 'Booking Completed',
                'response' => $verify_booking,
            ]);
        }
        return response()->json([
            'status_code' => 400,
            'message' => 'Invalid OTP',
            'response' => ''
        ]);
    }


    // Total Astrologer Booking
    public function totalAstrologerBookings(Request $request){
        $rules = [
            'astro_id' => 'required|string',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $booking = AstrologerBooking::where('astro_id',$request->astro_id)->where('booking_status','0')->latest()->get();

        foreach ($booking as $key => $value) {
            $astro = Astrologer::where('astro_id',$value->astro_id)->first();
            $plan = AstroPlan::where('plan_id',$value->plan_id)->first();
            $jajmaan = Jajmaan::where('jajmaan_id',$value->jajmaan_id)->first();
            if($astro){
                $value->astro_name = $astro->astro_name.' '.$astro->astro_surname;
                $value->astro_number = $astro->astro_phone;
                $value->jajmaan_name = $jajmaan->name.' '.$jajmaan->surname;
                $value->jajmaan_number = $jajmaan->phone;
                $value->jajmaan_image = $jajmaan->image;
            }
            $value->selected_plan = $plan;
        }

        return response()->json([
            'status_code' => 200,
            'message' => 'Booking List Found',
            'response' => $booking
        ]);
    }



    // Total Astrologer Booking
    public function totalCompleteAstrologerBookings(Request $request){
        $rules = [
            'astro_id' => 'required|string',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $booking = AstrologerBooking::where('astro_id',$request->astro_id)->where('booking_status','1')->latest()->get();

        foreach ($booking as $key => $value) {
            $astro = Astrologer::where('astro_id',$value->astro_id)->first();
            $plan = AstroPlan::where('plan_id',$value->plan_id)->first();
            $jajmaan = Jajmaan::where('jajmaan_id',$value->jajmaan_id)->first();
            if($astro){
                $value->astro_name = $astro->astro_name.' '.$astro->astro_surname;
                $value->astro_number = $astro->astro_phone;
                $value->jajmaan_name = $jajmaan->name.' '.$jajmaan->surname;
                $value->jajmaan_number = $jajmaan->phone;
                $value->jajmaan_image = $jajmaan->image;
            }
            $value->selected_plan = $plan;
        }

        return response()->json([
            'status_code' => 200,
            'message' => 'Booking List Found',
            'response' => $booking
        ]);
    }


    // Total Astrologer Booking
    public function totalAstrologerBookingsByJajamaan(Request $request){
        $rules = [
            'jajmaan_id' => 'required|string',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $booking = AstrologerBooking::where('jajmaan_id',$request->jajmaan_id)->latest()->get();

        foreach ($booking as $key => $value) {
            $astro = Astrologer::where('astro_id',$value->astro_id)->first();
            $plan = AstroPlan::where('plan_id',$value->plan_id)->first();
            $jajmaan = Jajmaan::where('jajmaan_id',$value->jajmaan_id)->first();
            if($astro){
                $value->astro_name = $astro->astro_name.' '.$astro->astro_surname;
                $value->astro_number = $astro->astro_phone;
                $value->astro_profile = $astro->astro_image;
                $value->jajmaan_name = $jajmaan->name.' '.$jajmaan->surname;
                $value->jajmaan_number = $jajmaan->phone;
            }
            $value->selected_plan = $plan;
        }

        return response()->json([
            'status_code' => 200,
            'message' => 'Booking List Found',
            'response' => $booking
        ]);
    }



    // Earning History
    public function earningsHistory(Request $request){
        $validator = Validator::make($request->all(), [
            'astro_id' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_astro = Astrologer::where('astro_id',$request->astro_id)->where('deleted_at',NULL)->first();
        if (is_null($check_astro)) {
            return response()->json(['message' => 'No Astrologer Found'], 400);
        }
        $list = array();

        $total_collection = AstrologerBooking::where('astro_id',$request->astro_id)->where('deleted_at',NULL)->where('booking_status','1')->sum('plan_price');
        $total_booking = AstrologerBooking::where('astro_id',$request->astro_id)->whereNULL('deleted_at')->where('booking_status','1')->latest()->get();
        foreach ($total_booking as $booking){
            $list[] = [
                'booking_id' => $booking->booking_id,
                'astro_date' => $booking->astro_date,
                'plan_price' => $booking->plan_price,
                'vendor_income' => $booking->vendor_income,
                'time' => date('h:iA',strtotime($booking->created_at))
            ];
        }

        return response()->json([
            'status_code' => 200,
            'message' => 'Data Found',
            // 'response' => [
            //     'total_collection' => $total_collection,
            //     'history' => $list
            // ]
            'response' => $list
        ]);
    }



}
