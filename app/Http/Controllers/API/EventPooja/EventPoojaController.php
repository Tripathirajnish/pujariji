<?php

namespace App\Http\Controllers\API\EventPooja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Astrologer;
use App\Models\AstroRating;
use App\Models\AstrologerBooking;
use App\Models\Jajmaan;
use App\Models\AstroBankDetail;
use App\Models\EventPooja;
use App\Models\EventBooking;
use App\Models\PaymentTable;
use Str;

class EventPoojaController extends Controller
{
    public function book_event(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required',
            'event_id' => 'required',
            'user_name' => 'required',
            'user_horoscope' => 'required',
            'dakshina_price' => 'nullable|numeric',
            'gau_seva_price' => 'nullable|numeric',
            'rudraks_price' => 'nullable|numeric',
            'prasad_delivery' => 'required|in:0,1',   // 0-> Yes Delivery, 1 -> No Delivery
            'delivery_address' => 'required_if:prasad_delivery,0',
            'delivery_price' => 'nullable|numeric',
            'whatsapp_number' => 'nullable|numeric',
            'transaction_id' => 'required',
            'payment_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $check_existence = EventBooking::where('event_id',$request->event_id)->where('jajmaan_id',$request->jajmaan_id)->where('booking_status','!=','2')->where('booking_date',date('Y-m-d'))->whereNull('deleted_at')->first();
        // if(!is_null($check_existence)){
        //     return $responseArray = [
        //         'status_code' => 400,
        //         'message' =>'Event Already Booked',
        //         'response' => ''
        //     ];
        // }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('status','0')->whereNull('deleted_at')->first();
        if(is_null($check_jajmaan)){
            return $responseArray = [
                'status_code' => 400,
                'message' =>'No Jajmaan Found',
                'response' => ''
            ];
        }
        $check_event = EventPooja::where('event_id',$request->event_id)->where('status','0')->whereNull('deleted_at')->first();
        if(is_null($check_event)){
            return $responseArray = [
                'status_code' => 400,
                'message' =>'No Event Found',
                'response' => ''
            ];
        }
        $pooja_id = 'PEVB' . date('dmy') . last_id('event_booking');

        $total_payment = $request->input('dakshina_price') + $request->input('gau_seva_price') + $request->input('rudraks_price') + $request->input('delivery_price') + (int)$check_event->price;
        // Create a Event Pooja
        $booking = new EventBooking([
            'booking_id' => $pooja_id,
            'booking_date' => date('Y-m-d'),
            'event_date' => $check_event->event_date,
            'event_id' => $request->input('event_id'),
            'user_name' => $request->input('user_name'),
            'user_horoscope' => $request->input('user_horoscope'),
            'jajmaan_id' => $request->input('jajmaan_id'),
            'event_price' => $check_event->price,
            'dakshina_price' => $request->input('dakshina_price'),
            'guru_seva_price' => $request->input('gau_seva_price'),
            'rudraks_price' => $request->input('rudraks_price'),
            'prasad_delivery' => $request->input('prasad_delivery'),
            'delivery_address' => $request->input('delivery_address'),
            'delivery_price' => $request->input('delivery_price'),
            'whats_app_number' => $request->input('whatsapp_number'),
            'transection_id' => $request->input('transaction_id'),
            'payment_date' => $request->input('payment_date'),
            'total_payment' => $total_payment
        ]);

        $booking->save();
        if($booking){
            $save = PaymentTable::create([
                'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                'payment_for_id' => $pooja_id,
                'payment_for_what' => "Event Booking",
                'transection_id' => $request->transaction_id,
                'amount' => $total_payment,
                'entity' => $total_payment,
                'type' => 'Credit',
                'mobile' => '',
                'fee' => '0',
            ]);


        // Send Notification
        $fcm_token = jajmaan_fcm($request->jajmaan_id);
        $title ='Event Booked';
        $body = 'Congratulations! Event has been booked successfully, please check your application for live link!';
        $sender_id = $request->jajmaan_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

        }

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Event Pooja Booked Successfully',
            'response' => [
                'booking_id' => $pooja_id
            ]
        ];
    }



    // Event List
    public function event_list(Request $request) {
        $event = EventPooja::where('status','0')->whereNull('deleted_at')->where('event_date','>=',date('Y-m-d'))->latest()->get();
        $list = [];
        foreach ($event as $key => $value) {
            $list[] = [
                "event_id" => $value->event_id,
                "event_img" => $value->event_img,
                "title" => $value->title_eng,
                "title_hin" => $value->title_hin,
                "description" => $value->desc_eng,
                "description_hin" => $value->desc_hin,
                "date" => date('l, d-F-Y', strtotime($value->event_date)),
                "event_price" => $value->price,
                "dakshina_price" => $value->dakshina_price,
                "gauseva_price" => $value->guruseva_price,
                "rudraksh_price" => $value->rudrakshseva_price,
                "prasad_delivery" => $value->prasaddelivery_price,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' =>'Event Pooja List Fetched Successfully',
            'response' => $list
        ];
    }

    // Event List
    public function booked_event_history(Request $request) {
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $list = [];
        $event = EventBooking::where('jajmaan_id',$request->jajmaan_id)->whereNull('deleted_at')->latest()->get();
        foreach ($event as $key => $value) {
            $pooja = EventPooja::where('event_id',$value->event_id)->first();
            $list[] = [
                "event_id" => $value->event_id,
                "event_name" => $pooja->title_eng,
                "event_name_hin" => $pooja->title_hin,
                "event_price" => $value->event_price,
                "user_name" => $value->user_name,
                "user_horoscope" => $value->user_horoscope,
                "date" => date('l, d-F-Y', strtotime($value->event_date)),
                "event_inclusions" => [
                    "dakshina" => $value->dakshina_price,
                    "guru_seva" => $value->guru_seva_price,
                    "rudraksh" => $value->rudraks_price,
                    "prasad_delivery" => $value->delivery_price,
                    "prasad_delivery_location" => $value->delivery_address,
                ],
                "event_inclusions_hin" => [
                    "दक्षिणा" => $value->dakshina_price,
                    "गौ_सेवा" => $value->guru_seva_price,
                    "रुद्राक्ष" => $value->rudraks_price,
                    "प्रसाद_डिलीवरी" => $value->delivery_price,
                    "प्रसाद_डिलीवरी_का_स्थान" => $value->delivery_address,
                ],
                "whatsApp_Number" => $value->whats_app_number,
                "total_Amount" => $value->total_payment,
                "facebook_live_link" => $pooja->fb_link,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' =>'Booked Event Pooja List Fetched Successfully',
            'response' => $list
        ];
    }




}
