<?php

namespace App\Http\Controllers\API\Muhurt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\AppReview;
use App\Models\Katha;
use App\Models\KathaLanguage;
use App\Models\MuhurtBooking;
use App\Models\KundaliPackage;
use App\Models\Jajmaan;
use App\Models\Muhurt;
use App\Models\PaymentTable;
use DB;

class MuhurtAPIController extends Controller
{
    // Store
    public function muhurt_booking(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required',
            'name' => 'required',
            'dob_date' => 'required|date',
            'dob_time' => 'required',
            'dob_place' => 'required',
            'language' => 'required',
            'chart_type' => 'required',
            'gender' => 'required|in:0,1,2',
            'email' => 'required|email',
            'whats_number' => 'required|numeric',
            'amount' => 'required|numeric',
            'transaction_id' => 'required',
            'payment_date' => '',
            'muhurt_id' => 'required',
            'notes' => ''
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('status','0')->whereNull('deleted_at')->first();
        if(is_null($check_jajmaan)){
            return $responseArray = [
                'status_code' => 400,
                'message' =>'No Jajmaan Found',
                'response' => ''
            ];
        }

        $booking_id = 'PMHRT' . rand(11, 99) . date('dmy') . last_id('muhurt_booking');

        $booking = new MuhurtBooking;
        $booking->booking_id = $booking_id;
        $booking->jajmaan_id = $request->jajmaan_id;
        $booking->muhurt_id = $request->muhurt_id;
        $booking->name = $request->name;
        $booking->dob_date = $request->dob_date;
        $booking->dob_time = $request->dob_time;
        $booking->dob_place = $request->dob_place;
        $booking->language = $request->language;
        $booking->chart_type = $request->chart_type;
        $booking->gender = $request->gender;
        $booking->email = $request->email;
        $booking->requested_date = date('Y-m-d');
        $booking->whatapp_number = $request->whats_number;
        $booking->total = $request->amount;
        $booking->transection_id = $request->transaction_id;
        $booking->payment_date = $request->payment_date;
        $booking->notes = $request->notes;

        $booking->save();

        if($booking){
            $save = PaymentTable::create([
                'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                'payment_for_id' => $booking_id,
                'payment_for_what' => "Muhurt Booking",
                'transection_id' => $request->transaction_id,
                'amount' => $request->amount,
                'entity' => $request->amount,
                'type' => 'Credit',
                'mobile' => '',
                'fee' => '0',
            ]);


        // Send Notification
        $fcm_token = get_fcm_key($request->jajmaan_id);
        $title = 'Muhurt Booking';
        $body = "Congratulations! Your Muhurt request has been booked. We'll notify you once it's ready for delivery via email or WhatsApp.";
        $sender_id = $request->jajmaan_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

        }

        return $responseArray = [
            'status_code' => 200,
            'message' => 'Muhurt Requested Successfully',
            'response' => $booking_id
        ];
    }



    public function muhurt_history(Request $request){
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('status','0')->whereNull('deleted_at')->first();
        if(is_null($check_jajmaan)){
            return $responseArray = [
                'status_code' => 400,
                'message' =>'No Jajmaan Found',
                'response' => ''
            ];
        }
        $list = [];
        $history = MuhurtBooking::where('jajmaan_id',$request->jajmaan_id)->whereNull('deleted_at')->latest()->get();
        foreach ($history as $key => $value) {
            $list[] = [
                "booking_id" => $value->booking_id,
                "jajman_name" => $value->name,
                "Date_Of_Birth" => date('l, d-F-Y', strtotime($value->dob_date)),
                "Time_Of_Birth" =>  $value->dob_time,
                "place_of_Birth" =>  $value->dob_place,
                "chart_type" =>  $value->chart_type,
                "Language" =>  $value->language,
                "Gender" => $value->gender,
                "Email" =>  $value->email,
                "Requested_Date" => date('l, d-F-Y', strtotime($value->requested_date)),
                "whatsApp_Number" =>  $value->whatapp_number,
                "total_Amount" =>  $value->total,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' =>'Muhurt History List Fetched Successfully',
            'response' => $list
        ];
    }


    // public function muhurt_package_list(){
    //     $validator = Validator::make($request->all(), [
    //         'muhurt_id' => 'required'
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['errors' => $validator->errors()], 422);
    //     }

    //     $get_package = Muhurt::where('status','0')->where('muhurt_id',$request->muhurt_id)->whereNull('deleted_at')->orderBy('price','asc')->get();
    //     return $responseArray = [
    //         'status_code' => 200,
    //         'message' =>'Fetched muhurt Package Successfully',
    //         'response' => $get_package
    //     ];
    // }


    public function get_muhurt(){
        $get_price = Muhurt::where('status','0')->orderBy('name','asc')->get();
        return $responseArray = [
            'status_code' => 200,
            'message' =>'Fetched Muhurt Successfully',
            'response' => $get_price
        ];
    }


}
