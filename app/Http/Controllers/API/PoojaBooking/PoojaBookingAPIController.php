<?php

namespace App\Http\Controllers\API\PoojaBooking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use DateTime;
use App\Models\{
    AppReview,
    Jajmaan,
    PoojaPujari,
    PoojaCategories,
    Pooja,
    PoojaRating,
    PoojaPackage,
    PoojaInclusion,
    PoojaBooking,
    PoojaMaterial,
    PoojaCancelByPujari,
    PoojaPujariWithdraw,
    PaymentTable
};
use Str;

class PoojaBookingAPIController extends Controller
{

    public function get_pooja_category(){
        $pooa_category = PoojaCategories::where('status','0')->whereNull('deleted_at')->orderBy('cat_name','asc')->latest()->get();
        $list = [];
        foreach ($pooa_category as $key => $value) {
            $list[] = [
                "pooja_cat_id" => $value->cat_id,
                "pooja_cat_name" => $value->cat_name,
                "pooja_cat_name_hin" => $value->cat_name_hindi,
                "pooja_image" => $value->cat_image,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' =>'Pooja Category Fetched Successfully',
            'response' => $list
        ];
    }

    public function pooja_list(Request $request){
        $validator = Validator::make($request->all(), [
            'pooja_cat_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $list = [];

        $pooja_list = Pooja::where('category_id',$request->pooja_cat_id)->where('status','0')->whereNull('deleted_at')->latest()->get();

        foreach ($pooja_list as $pooja){
            $list[] = [
                "pooja_id" => $pooja->pooja_id,
                "pooja_name" => $pooja->name,
                "pooja_name_hin" => $pooja->name_hindi,
                "pooja_image" => $pooja->image
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => category_name($request->pooja_cat_id).' Pooja’s Fetched Successfully',
            'response' => $list
        ];
    }


    public function pooja_details(Request $request){
        $validator = Validator::make($request->all(), [
            'pooja_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $list = [];
        $ratings_list = [];
        $package_list = [];
        $inclusion_list = [];
        $package = [];
        $average_rating = 0;

        $pooja = Pooja::where('pooja_id',$request->pooja_id)->where('status','0')->whereNull('deleted_at')->first();
        if(is_null($pooja)){
            return $responseArray = [
                'status_code' => 400,
                'message' =>"No Pooja Found",
                'response' => ''
            ];
        }
            $ratings = PoojaRating::where('pooja_id',$pooja->pooja_id)->where('status','0')->whereNull('deleted_at')->latest()->get();
            foreach ($ratings as $key => $value) {
                $ratings_list[] = [
                    "rating_id" => $value->rating_id,
                    "name" => jajmaan_name($value->rated_by),
                    "image" => jajmaan_image($value->rated_by),
                    "title" => $value->title,
                    "jajman_ratings" => $value->pooja_rating,
                    "rating_description" => $value->description,
                    "pujari_name" => $value->pujari_id,
                    "date" => $value->date
                ];
            }

            $package = PoojaPackage::where('pooja_id',$pooja->pooja_id)->where('status','0')->whereNull('deleted_at')->latest()->get();
            foreach ($package as $key => $value) {
                $inclusions = PoojaInclusion::where('package_id',$value->package_id)->where('status','0')->whereNull('deleted_at')->latest()->get();
                foreach ($inclusions as $key => $inclusion) {
                   $inclusion_list[] = [
                        "inclusion_id" => $inclusion->inclusion_id,
                        "inclusion_name" => $inclusion->name,
                        "inclusion_name_hin" => $inclusion->name_hindi,
                        "inclusion_price" => $inclusion->price
                    ];
                }
                $package_list[] = [
                    "package_id" => $value->package_id,
                    "package_name" => $value->name,
                    "package_name_hin" => $value->name_hindi,
                    "package_price" => $value->price,
                    "Procedure_involved" => $value->procudre,
                    "Procedure_involved_hin" => $value->procedure_hindi,
                    "package_description" => $value->description,
                    "package_description_hindi" => $value->description_hindi,
                    "inclusions" => $inclusion_list
                ];
                $inclusion_list = [];
            }



            $pooja_id = $request->pooja_id;

            $ratings = PoojaRating::where('pooja_id', $pooja_id)
                ->where('status', '0')
                ->whereNull('deleted_at')
                ->selectRaw('COUNT(*) as count, SUM(pooja_rating) as sum_rating')
                ->groupBy('pooja_rating')
                ->get();

$one_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',1)->count();
$two_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',2)->count();
$three_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',3)->count();
$four_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',4)->count();
$five_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',5)->count();

$sum_rating = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->sum('pooja_rating');
$count_rating = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->count();
$average_rating = $count_rating>0?$sum_rating/$count_rating:0;


            $list = [
                "pooja_id" => $pooja->pooja_id,
                "pooja_name" => $pooja->name,
                "pooja_name_hin" => $pooja->name_hindi,
                "pooja_image" => $pooja->image,
                "pooja_min_price" => $pooja->min_price,
                "pooja_max_price" => $pooja->max_price,
                "pooja_description" => $pooja->description,
                "pooja_description_hin" => $pooja->description_hindi,
                "average_rating" => $average_rating,
                "global_ratings_number" => count($ratings),
                "one_star_ratings" => $one_star,
                "two_star_ratings" => $two_star,
                "three_star_ratings" => $three_star,
                "four_star_ratings" => $four_star,
                "five_star_ratings" => $five_star,
                'ratings_list' => $ratings_list,
                'package_list' => $package_list,
            ];

        return $responseArray = [
            'status_code' => 200,
            'message' => category_name($request->pooja_cat_id).' Pooja’s Fetched Successfully',
            'response' => $list
        ];
    }



    public function pooja_online_booking(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required',
            'address' => 'required',
            'horoscope' => 'required',
            'pooja_id' => 'required',
            'package_id' => 'required',
            'package_inclusion' => 'required',
            'total_price' => 'required',
            'transaction_id' => 'required',
            'notes' => '',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('deleted_at',NULL)->first();
        if (is_null($check_jajmaan)) {
            return response()->json(['message' => 'No Jajmaan Found'], 400);
        }

        $check_package = PoojaPackage::where('package_id',$request->package_id)->where('deleted_at',NULL)->first();
        if (is_null($check_package)) {
            return response()->json(['message' => 'No Package Found'], 400);
        }

        $check_pooja = Pooja::where('pooja_id',$request->pooja_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pooja)) {
            return response()->json(['message' => 'No Pooja Found'], 400);
        }

        $booking_id = 'PON' . date('dmy') . last_id('pooja_bookings');
        $package_inclusion = stringToArray($request->package_inclusion);
        // Create a new record
        $pujari = new PoojaBooking([
            'booking_id' => $booking_id,
            'booking_type' => '0',
            'booking_date' => date('Y-m-d'),
            'booking_time' => date('H:i:s'),
            'jajmaan_id' => $request->input('jajmaan_id'),
            'pooja_id' => $request->input('pooja_id'),
            'package_id' => $request->input('package_id'),
            'inclusions' => serialize($package_inclusion),
            'horoscope' => $request->input('horoscope'),
            'notes' => $request->input('notes'),
            'location' => $request->input('address'),
            'payment_type' => '0',
            'pooja_price' => $request->input('total_price'),
            'total_price' => $request->input('total_price'),
            'advance' => $request->input('total_price'),
            'transection_id' => $request->input('transaction_id'),
            'balance' => 0,
            'payment_done_date' => date('Y-m-d')
        ]);

        $pujari->save();
        if($pujari){

            // Send Notification
            $fcm_token = jajmaan_fcm($request->jajmaan_id);
            $title ='Online Pooja Booked';
            $body = 'Congratulations! Your online pooja has been successfully booked. Thank you for choosing our services!';
            $sender_id = $request->jajmaan_id;
            send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

            $save = PaymentTable::create([
                'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                'payment_for_id' => $booking_id,
                'payment_for_what' => "Pooja Booking",
                'transection_id' => $request->transaction_id,
                'amount' => $request->total_price,
                'entity' => $request->total_price,
                'type' => 'Credit',
                'mobile' => '',
                'fee' => '0',
            ]);
        }
        return $responseArray = [
            'status_code' => 200,
            'message' =>'Online Pooja Booked Successfully',
            'response' => $booking_id
        ];
    }





    public function pooja_offline_booking(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required',
            'state' => 'required',
            'city' => 'required',
            'priest_language' => 'required',
            'location' => 'required',
            'pooja_date' => 'required|date',
            'pooja_id' => 'required',
            'pooja_time' => 'required',
            'package_id' => 'required',
            'horoscope' => 'required',
            'package_inclusion' => 'required',
            'pujari_id' => 'required',
            'payment_type' => 'required|in:0,1',
            'total_price' => 'required',
            'total_amount' => 'required',
            'advance_amount' => 'required|lte:total_amount',
            'remaining_amount' => 'required|lte:total_amount',
            'transaction_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('deleted_at',NULL)->first();
        if (is_null($check_jajmaan)) {
            return response()->json(['message' => 'No Jajmaan Found'], 400);
        }

        $check_package = PoojaPackage::where('package_id',$request->package_id)->where('deleted_at',NULL)->first();
        if (is_null($check_package)) {
            return response()->json(['message' => 'No Package Found'], 400);
        }

        $check_pooja = Pooja::where('pooja_id',$request->pooja_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pooja)) {
            return response()->json(['message' => 'No Pooja Found'], 400);
        }

        $booking_id = 'POF' . date('dmy') . last_id('pooja_bookings');
        $package_inclusion = stringToArray($request->package_inclusion);
        // Create a new record
        $pujari = new PoojaBooking([
            'booking_id' => $booking_id,
            'booking_type' => '1',
            'booking_date' => date('Y-m-d'),
            'booking_time' => date('H:i:s'),
            'jajmaan_id' => $request->input('jajmaan_id'),
            'pooja_id' => $request->input('pooja_id'),
            'package_id' => $request->input('package_id'),
            'pujari_id' => $request->input('pujari_id'),
            'pooja_date' => $request->input('pooja_date'),
            'pooja_time' => $request->input('pooja_time'),
            'inclusions' => serialize($package_inclusion),
            'request_status' => '1',
            'location' => $request->input('location'),
            'language' => $request->input('priest_language'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'horoscope' => $request->input('horoscope'),
            'booking_otp' => generate_otp(4),
            'payment_type' => $request->input('payment_type'),
            'pooja_price' => $request->input('total_price'),
            'advance' => $request->input('advance_amount'),
            'balance' => $request->input('remaining_amount'),
            'total_price' => $request->input('total_amount'),
            'transection_id' => $request->input('transaction_id'),
        ]);

        $pujari->save();
        if($pujari){

            // Send Notification
            $fcm_token = jajmaan_fcm($request->jajmaan_id);
            $title ='Offline Pooja Booked';
            $body = 'Congratulations! Your Offline Pooja has been successfully booked. Thank you for choosing our services!';
            $sender_id = $request->jajmaan_id;
            send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

            // Send Notification
            $fcm_token2 = get_fcm_key($request->pujari_id);
            $title2 ='New Pooja Booking';
            $body2 = 'Congratulations! New Pooja has booked. Kindly check in the application!';
            $sender_id2 = $request->pujari_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

            $save = PaymentTable::create([
                'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                'payment_for_id' => $booking_id,
                'payment_for_what' => "Pooja Booking",
                'transection_id' => $request->transaction_id,
                'amount' => $request->total_price,
                'entity' => $request->total_price,
                'type' => 'Credit',
                'mobile' => '',
                'fee' => '0',
            ]);
        }

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Offline Pooja Booked Successfully',
            'response' => $booking_id
        ];
    }


    public function jajmaan_pooja_booking_history(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $online_pooja = [];
        $offline_pooja = [];
        $inclusions = [];

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('deleted_at',NULL)->first();
        if (is_null($check_jajmaan)) {
            return response()->json(['message' => 'No Jajmaan Found'], 400);
        }
        $bookings = PoojaBooking::where('status','0')->where('jajmaan_id',$request->jajmaan_id)->latest()->get();
        foreach ($bookings as $book){
            $pooja_name = pooja_name($book->pooja_id);
            $package_name = package_name($book->package_id);
            $pujari = PoojaPujari::where('pujari_id',$book->pujari_id)->first();

            if($book->booking_type=='1'){
                $offline_pooja[] = [
                    "booking_id" => $book->booking_id,
                    "pooja_id" => $book->pooja_id,
                    "pooja_name" => $pooja_name['eng_name'],
                    "pooja_name_hindi" => $pooja_name['hindi_name'],
                    "pooja_image" => pooja_image($book->pooja_id),
                    "state" => $book->state,
                    "city" => $book->city,
                    "langauge" => $book->language,
                    "address" => $book->location,
                    "pooja_type" => $book->booking_type,
                    "pooja_date" => $book->pooja_date,
                    "pooja_time" => $book->pooja_time,
                    "package_eng" => $package_name['eng_name'],
                    "package_hin" => $package_name['hindi_name'],
                    "horoscope" => $book->horoscope,
                    "notes" => $book->notes,
                    "pujari_id" => $book->pujari_id,
                    "pujari_name" => !is_null($pujari)?$pujari->name??''.' '.$pujari->surname??'':'',
                    "pujari_phone_number" => !is_null($pujari)?$pujari->phone_number??'':'',
                    "pujari_image" => !is_null($pujari)?$pujari->pujari_image??'':'',
                    "pujari_request" => $book->request_status,
                    "inclusions" => unserialize($book->inclusions),
                    "pooja_price" => $book->pooja_price,
                    "total_pooja_price" => $book->total_price,
                    "payment_type" => $book->payment_type,
                    "booking_status" => $book->booking_status,
                    "cancel_status" => $book->booking_status>='2'?'0':'1',
                    "advance_payment" => $book->advance,
                    "pending_payment" => $book->balance,
                    "jajman_name" => jajmaan_name($book->jajmaan_id),
                    "jajman_number" => jajmaan_number($book->jajmaan_id),
                    "jajman_image" => jajmaan_image($book->jajmaan_id),
                    "booked_date" => $book->booking_date,
                    "accept_date_time" => $book->accept_date,
                    "pooja_status" => $book->booking_status,
                    "pooja_otp" => $book->booking_otp,
                ];
            }

            if($book->booking_type=='0'){
                $online_pooja[] = [
                    "booking_id" => $book->booking_id,
                    "booking_id" => $book->booking_id,
                    "pooja_name" => $pooja_name['eng_name'],
                    "pooja_name_hindi" => $pooja_name['hindi_name'],
                    "pooja_image" => pooja_image($book->pooja_id),
                    "horoscope" => $book->horoscope,
                    "notes" => $book->notes,
                    "address" => $book->location,
                    "pooja_type" => $book->booking_type,
                    "package_eng" => $package_name['eng_name'],
                    "package_hin" => $package_name['hindi_name'],
                    "inclusions" => unserialize($book->inclusions),
                    "pooja_price" => $book->pooja_price,
                    "total_pooja_price" => $book->total_price,
                    "cancel_status" => $book->booking_status>='2'?'0':'1',
                    "jajman_name" => jajmaan_name($book->jajmaan_id),
                    "jajman_number" => jajmaan_number($book->jajmaan_id),
                    "jajman_image" => jajmaan_image($book->jajmaan_id),
                    "admin_info" => $book->online_admin_info,
                    "booked_date" => $book->booking_date,
                    "accept_date_time" => $book->accept_date,
                ];
            }

            $inclusions = [];
        }

        return $responseArray = [
            'status_code' => 200,
            'message' =>'List Fetched Successfully',
            'response' =>[
                "Offline_Pooja_list" => $offline_pooja,
                "Online_Pooja_list" =>$online_pooja
            ]
        ];
    }


    // Cancel Booking
    public function cancel_pooja_booking(Request $request){
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

            $booking = PoojaBooking::where('booking_id',$request->booking_id)->where('booking_status','0')->where('deleted_at',NULL)->first();
            $fine = 0;
            if($booking){
                if($booking->booking_type=='1'){
                    $pooja_date = $booking->pooja_date;
                    $pooja_time = $booking->pooja_time;
                    $pooja_datetime = $pooja_date . ' ' . $pooja_time;
                    $future_datetime = new DateTime($pooja_datetime);
                    $current_datetime = new DateTime();
                    if ($current_datetime <= $future_datetime) {
                        $interval = $current_datetime->diff($future_datetime);
                        $total_hours_left = $interval->days * 24 + $interval->h;

                        if ($total_hours_left <= 48) {
                            $fine = $booking->total_price*0.1;
                        } else {
                            $fine = 0;
                        }
                    } else {
                        return response()->json([
                            'status_code' => 400,
                            'message' => 'Booking is not allowed as the time has passed.',
                            'response' => ''
                        ]);
                    }

                    $update_fine = PoojaPujari::where('pujari_id',$booking->pujari_id)->first();
                    $last_fine = $update_fine->fine_amt;
                    $fine_total = (int)$fine + (int)$last_fine;

                    PoojaPujari::where('pujari_id',$booking->pujari_id)->update([
                        'fine_amt' =>$fine_total
                    ]);

                }

                $cancel_booking = PoojaBooking::where('booking_id',$request->booking_id)->update([
                    'cancel_date_time'=>date('d-m-Y H:i:s'),
                    'can_acholder'=>$request->acholder,
                    'can_acnumber'=>$request->acnumber,
                    'can_ifsc'=>$request->ifsc,
                    'can_type'=>$request->type,
                    'can_reason'=>$request->reason,
                    'can_amount'=>$request->amount,
                    'cancel_by'=>$request->jajmaan_id,
                    'jajmaan_fine'=>$fine,
                    'booking_status'=>'2',
                ]);

                // Send Notification
                $fcm_token = jajmaan_fcm($booking->jajmaan_id);
                $title ='Pooja Cancelled';
                $body = 'Your Pooja has been cancelled. Your refund will be initate shortly!';
                $sender_id = $booking->jajmaan_id;
                send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

                if($booking->booking_type=='1'){
                    // Send Notification
                    $fcm_token2 = get_fcm_key($booking->pujari_id);
                    $title2 ='Pooja Cancelled';
                    $body2 = 'Cancelled! Pooja has cancelled by Yajman!';
                    $sender_id2 = $booking->pujari_id;
                    send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification
                }

                return response()->json([
                    'status_code' => 200,
                    'message' => 'Booking Cancelled',
                    'response' => $booking->booking_id,
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


    public function change_pujari(Request $request){
        $rules = [
            'jajmaan_id' => 'required',
            'booking_id' => 'required',
            'pujari_id' => 'required',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $v_pujari = PoojaPujari::where('pujari_id', $request->pujari_id)->where('status','0')->where('verification','0')->where('deleted_at',NULL)->first();
        if(is_null($v_pujari)){
            return response()->json([
                'status_code' => 200,
                'message' => 'No Pujari Ji Found',
                'response' => '',
            ]);
        }

        $v_jajman = Jajmaan::where('jajmaan_id', $request->jajmaan_id)->where('status','0')->where('deleted_at',NULL)->first();
        if(!is_null($v_jajman)){

            $booking = PoojaBooking::where('booking_id',$request->booking_id)->where('booking_status','0')->where('deleted_at',NULL)->first();
            if($booking){

                $change = PoojaBooking::where('booking_id',$request->booking_id)->update([
                    'pujari_id'=>$request->pujari_id
                ]);

                // Send Notification
                $fcm_token = jajmaan_fcm($request->jajmaan_id);
                $title ='Pujari Ji Changed Request';
                $body = 'Pooja reqquest has been sent to pujari ji. Please wait while pujari ji will accept your request.!';
                $sender_id = $request->jajmaan_id;
                send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

                // Send Notification
                $fcm_token2 = get_fcm_key($request->pujari_id);
                $title2 ='New Pooja Request';
                $body2 = 'Pooja Request! Accept new pooja request arrived. Kindly check in the application!';
                $sender_id2 = $request->pujari_id;
                send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

                return response()->json([
                    'status_code' => 200,
                    'message' => 'Pujari Ji Changed Successfully',
                    'response' => $booking->booking_id,
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




    public function pooja_material(){
        $pooja = Pooja::where('status','0')->whereNull('deleted_at')->latest()->get();
        $list = [];
        $material_list = [];
        foreach ($pooja as $key => $value) {
            $pooja_material = PoojaMaterial::where('pooja_id',$value->pooja_id)->where('status','0')->whereNull('deleted_at')->get();
            foreach ($pooja_material as $item){
                $material_list[] = [
                    "naterial_id" => $item->material_id,
                    "naterial_name" => $item->material_name,
                    "naterial_name_hin" => $item->material_name_hindi,
                    "naterial_image" => $item->image,
                ];
            }
            $list[] = [
                "pooja_id" => $value->pooja_id,
                "pooja_name" => $value->name,
                "pooja_name_hin" => $value->name_hindi,
                "pooja_image" => $value->image,
                "pooja_materials" => $material_list,
            ];
            $material_list = [];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' =>"Pooja’s Item List Fetched Successfully!",
            'response' => $list
        ];
    }



    public function upcoming_pooja(Request $request){
        $list = [];
        $ratings_list = [];
        $package_list = [];
        $inclusion_list = [];
        $package = [];
        $average_rating = 0;

        $pooja_list = Pooja::where('upcoming_pooja','0')->where('status','0')->whereNull('deleted_at')->latest()->get();

        foreach ($pooja_list as $pooja){
            $ratings = PoojaRating::where('pooja_id',$pooja->pooja_id)->where('status','0')->whereNull('deleted_at')->get();
            foreach ($ratings as $key => $value) {
                $ratings_list[] = [
                    "rating_id" => $value->rating_id,
                    "name" => jajmaan_name($value->rating_id),
                    "image" => jajmaan_image($value->rating_id),
                    "title" => $value->title,
                    "jajman_ratings" => $value->pooja_rating,
                    "rating_description" => $value->description,
                    "pujari_name" => $value->pujari_id,
                    "date" => $value->date
                ];
            }

            $package = PoojaPackage::where('pooja_id',$pooja->pooja_id)->where('status','0')->whereNull('deleted_at')->get();
            foreach ($package as $key => $value) {
                $inclusions = PoojaInclusion::where('package_id',$value->package_id)->where('status','0')->whereNull('deleted_at')->get();
                foreach ($inclusions as $key => $inclusion) {
                   $inclusion_list[] = [
                        "inclusion_id" => $inclusion->inclusion_id,
                        "inclusion_name" => $inclusion->name,
                        "inclusion_name_hin" => $inclusion->name_hindi,
                        "inclusion_price" => $inclusion->price
                    ];
                }
                $package_list[] = [
                    "package_id" => $value->package_id,
                    "package_name" => $value->name,
                    "package_name_hin" => $value->name_hindi,
                    "package_price" => $value->price,
                    "Procedure_involved" => $value->procudre,
                    "Procedure_involved_hin" => $value->procedure_hindi,
                    "inclusions" => $inclusion_list
                ];
            }



            $one_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('pooja_rating',['0','1'])->count();
            $two_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('pooja_rating',['1','2'])->count();
            $three_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('pooja_rating',['2','3'])->count();
            $four_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('pooja_rating',['3','4'])->count();
            $five_star = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('pooja_rating',['4','5'])->count();
            $sum_rating = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->sum('pooja_rating');
            $count_rating = PoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->count();
            $average_rating = $count_rating>0?$sum_rating/$count_rating:0;

            $list[] = [
                "pooja_id" => $pooja->pooja_id,
                "pooja_name" => $pooja->name,
                "pooja_name_hin" => $pooja->name_hindi,
                "pooja_image" => $pooja->image,
                "pooja_min_price" => $pooja->min_price,
                "pooja_max_price" => $pooja->max_price,
                "pooja_description" => $pooja->description,
                "pooja_description_hin" => $pooja->description_hindi,
                "average_rating" => $average_rating,
                "global_ratings_number" => count($ratings),
                "one_star_ratings" => $one_star,
                "two_star_ratings" => $two_star,
                "three_star_ratings" => $three_star,
                "four_star_ratings" => $four_star,
                "five_star_ratings" => $five_star,
                'ratings_list' => $ratings_list,
                'package_list' => $package_list,
            ];

            $ratings_list = [];
            $inclusion_list = [];
            $package_list = [];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Upcoming Pooja’s List Fetched Successfully!',
            'response' => $list
        ];
    }


    // Total
    public function pujari_booking_list(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'pujari_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $offline_pooja = [];
        $inclusions = [];

        $check_pujari = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pujari)) {
            return response()->json(['message' => 'No Pujari Found'], 400);
        }
        $cancel_bookings = [];

        $pujari_cancel = PoojaCancelByPujari::where('pujari_id', $request->pujari_id)->where('cancle_type', '0')->get();

        foreach ($pujari_cancel as $key => $value) {
            $cancel_bookings[] = $value->booking_id;
        }

       $bookings = PoojaBooking::where('status', '0')
        ->where('pujari_id', $request->pujari_id)
        ->orwhere(function ($query) use ($cancel_bookings) {
            $query->whereIn('booking_id', $cancel_bookings);
        })
        ->orwhere(function ($query) use ($cancel_bookings) {
            $query->where('booking_status', '!=', '0')
                ->where('request_status', '0');
        })
        ->latest()
        ->get();

        foreach ($bookings as $book){
            $pooja_name = pooja_name($book->pooja_id);
            $package_name = package_name($book->package_id);
            $pujari = PoojaPujari::where('pujari_id',$request->pujari_id)->first();

            if($book->booking_type=='1'){
                if(in_array($book->booking_id,$cancel_bookings)){
                    $cancel_status = '2';
                    $request_status = '2';
                }else{
                    $cancel_status = $book->booking_status>='2'?'0':'1';
                    $request_status = $book->request_status;

                }
                $offline_pooja[] = [
                    "booking_id" => $book->booking_id,
                    "pooja_name" => $pooja_name['eng_name'],
                    "pooja_name_hindi" => $pooja_name['hindi_name'],
                    "pooja_image" => pooja_image($book->pooja_id),
                    "state" => $book->state,
                    "city" => $book->city,
                    "langauge" => $book->language,
                    "address" => $book->location,
                    "pooja_type" => $book->booking_type,
                    "pooja_date" => $book->pooja_date,
                    "pooja_time" => $book->pooja_time,
                    "package_eng" => $package_name['eng_name'],
                    "package_hin" => $package_name['hindi_name'],
                    "horoscope" => $book->horoscope,
                    "notes" => $book->notes,
                    "pujari_name" => !is_null($pujari)?$pujari->name??''.' '.$pujari->surname??'':'',
                    "pujari_phone_number" => $pujari->phone_number,
                    "pujari_image" => $pujari->pujari_image,
                    "pujari_request" => $request_status,
                    "inclusions" => unserialize($book->inclusions),
                    "total_pooja_price" => $book->total_price,
                    "payment_type" => $book->payment_type,
                    "cancel_status" => $cancel_status,
                    "advance_payment" => $book->advance,
                    "pending_payment" => $book->balance,
                    "jajman_name" => jajmaan_name($book->jajmaan_id),
                    "jajman_number" => jajmaan_number($book->jajmaan_id),
                    "jajman_image" => jajmaan_image($book->jajmaan_id),
                    "booked_date" => $book->booking_date,
                    "accept_date_time" => $book->accept_date,
                    "pooja_status" => $book->booking_status,
                    "pooja_otp" => $book->booking_otp,
                ];
            }

            $inclusions = [];
        }

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Total Pooja Fetched Successfully',
            'response' => $offline_pooja
        ];

    }

    public function pujari_pending_request(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'pujari_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $offline_pooja = [];
        $inclusions = [];

        $check_pujari = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pujari)) {
            return response()->json(['message' => 'No Pujari Found'], 400);
        }

        $bookings = PoojaBooking::where('status','0')->where('pujari_id',$request->pujari_id)->where('booking_status','0')->where('request_status','1')->latest()->get();
        foreach ($bookings as $book){
            $pooja_name = pooja_name($book->pooja_id);
            $package_name = package_name($book->package_id);
            $pujari = PoojaPujari::where('pujari_id',$book->pujari_id)->first();

            if($book->booking_type=='1'){
                $offline_pooja[] = [
                    "booking_id" => $book->booking_id,
                    "pooja_name" => $pooja_name['eng_name'],
                    "pooja_name_hindi" => $pooja_name['hindi_name'],
                    "pooja_image" => pooja_image($book->pooja_id),
                    "state" => $book->state,
                    "city" => $book->city,
                    "langauge" => $book->language,
                    "address" => $book->location,
                    "pooja_type" => $book->booking_type,
                    "pooja_date" => $book->pooja_date,
                    "pooja_time" => $book->pooja_time,
                    "package_eng" => $package_name['eng_name'],
                    "package_hin" => $package_name['hindi_name'],
                    "horoscope" => $book->horoscope,
                    "notes" => $book->notes,
                    "pujari_name" => $pujari->name??''.' '.$pujari->surname??'',
                    "pujari_phone_number" => $pujari->phone_number,
                    "pujari_image" => $pujari->pujari_image,
                    "pujari_request" => $book->request_status,
                    "inclusions" => unserialize($book->inclusions),
                    "total_pooja_price" => $book->total_price,
                    "payment_type" => $book->payment_type,
                    "cancel_status" => $book->booking_status>='2'?'0':'1',
                    "advance_payment" => $book->advance,
                    "pending_payment" => $book->balance,
                    "jajman_name" => jajmaan_name($book->jajmaan_id),
                    "jajman_number" => jajmaan_number($book->jajmaan_id),
                    "jajman_image" => jajmaan_image($book->jajmaan_id),
                    "booked_date" => $book->booking_date,
                    "accept_date_time" => $book->accept_date,
                    "pooja_status" => $book->booking_status,
                    "pooja_otp" => $book->booking_otp,
                ];
            }

            $inclusions = [];
        }

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Total Pending Pooja Request Fetched Successfully',
            'response' => $offline_pooja
        ];

    }



    public function pujari_total_confirm_request(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'pujari_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $offline_pooja = [];
        $inclusions = [];

        $check_pujari = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pujari)) {
            return response()->json(['message' => 'No Pujari Found'], 400);
        }

        $bookings = PoojaBooking::where('status','0')->where('pujari_id',$request->pujari_id)->where('booking_status','0')->where('request_status','0')->latest()->get();
        foreach ($bookings as $book){
            $pooja_name = pooja_name($book->pooja_id);
            $package_name = package_name($book->package_id);
            $pujari = PoojaPujari::where('pujari_id',$book->pujari_id)->first();

            if($book->booking_type=='1'){
                $offline_pooja[] = [
                    "booking_id" => $book->booking_id,
                    "pooja_name" => $pooja_name['eng_name'],
                    "pooja_name_hindi" => $pooja_name['hindi_name'],
                    "pooja_image" => pooja_image($book->pooja_id),
                    "state" => $book->state,
                    "city" => $book->city,
                    "langauge" => $book->language,
                    "address" => $book->location,
                    "pooja_type" => $book->booking_type,
                    "pooja_date" => $book->pooja_date,
                    "pooja_time" => $book->pooja_time,
                    "package_eng" => $package_name['eng_name'],
                    "package_hin" => $package_name['hindi_name'],
                    "horoscope" => $book->horoscope,
                    "notes" => $book->notes,
                    "pujari_name" => $pujari->name??''.' '.$pujari->surname??'',
                    "pujari_phone_number" => $pujari->phone_number,
                    "pujari_image" => $pujari->pujari_image,
                    "pujari_request" => $book->request_status,
                    "inclusions" => unserialize($book->inclusions),
                    "total_pooja_price" => $book->total_price,
                    "payment_type" => $book->payment_type,
                    "cancel_status" => $book->booking_status>='2'?'0':'1',
                    "advance_payment" => $book->advance,
                    "pending_payment" => $book->balance,
                    "jajman_name" => jajmaan_name($book->jajmaan_id),
                    "jajman_number" => jajmaan_number($book->jajmaan_id),
                    "jajman_image" => jajmaan_image($book->jajmaan_id),
                    "booked_date" => $book->booking_date,
                    "accept_date_time" => $book->accept_date,
                    "pooja_status" => $book->booking_status,
                    "pooja_otp" => $book->booking_otp,
                ];
            }

            $inclusions = [];
        }

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Total Confirm Pooja Fetched Successfully',
            'response' => $offline_pooja
        ];

    }



    public function accept_or_reject_pooja_booking(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'pujari_id' => 'required',
            'booking_id' => 'required',
            'request_status' => 'required|in:0,1,2',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $check_pujari = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pujari)) {
            return response()->json(['message' => 'No Pujari Found'], 400);
        }

        $check_booking = PoojaBooking::where('booking_id',$request->booking_id)->where('deleted_at',NULL)->first();
        if (is_null($check_booking)) {
            return response()->json(['message' => 'No Booking Found'], 400);
        }

        $bookings = PoojaBooking::where('status','0')->where('booking_status','0')->where('booking_id',$request->booking_id)->where('pujari_id',$request->pujari_id)->where('pooja_date','>=',date('Y-m-d'))->first();

        if($bookings){
            $update = PoojaBooking::where('status','0')->where('booking_status','0')->where('booking_id',$request->booking_id)->where('pujari_id',$request->pujari_id)->where('pooja_date','>=',date('Y-m-d'))->update(['request_status' => $request->request_status,'accept_date'=>date('Y-m-d H:i:s')]);
            if($request->request_status=='1'){
                // Save Data into table for record only
                    $store = new PoojaCancelByPujari([
                        'cancel_id' => 'PPC' . date('dmy') . last_id('pooja_cancel_by_pujari'),
                        'pujari_id' => $bookings->pujari_id,
                        'cancel_by'=>$bookings->pujari_id,
                        'booking_id' => $bookings->booking_id,
                        'fine' => 0,
                        'cancle_type' => '1',
                        'booking_date' => $bookings->booking_date,
                        'booking_time' => $bookings->booking_time,
                        'cancel_date' => date('Y-m-d'),
                        'cancel_time' => date('H:i:s')
                    ]);
            }

            if ($request->request_status == '0') {
                $title = 'Booking Accepted';
                $body = 'Congratulations! Pujari Ji has accepted your pooja booking.';
            } else {
                $title = 'Booking Rejected';
                $body = 'Apologies, Pujari Ji cannot accept your pooja request at the moment.';
            }

            // Send Notification
            $fcm_token = jajmaan_fcm($bookings->jajmaan_id);
            $sender_id = $bookings->jajmaan_id;
            send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification


            return $responseArray = [
                'status_code' => 200,
                'message' => $request->request_status=='0'?'Accepted Successfully':'Rejected Successfully',
                'response' => $update
            ];
        }else{
            return $responseArray = [
                'status_code' => 400,
                'message' => "Pooja's date expired; unable to accept Request.",
                'response' => ''
            ];
        }
    }



    public function pujari_cancel_pooja_booking(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'pujari_id' => 'required',
            'booking_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $check_pujari = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pujari)) {
            return response()->json(['message' => 'No Pujari Found'], 400);
        }

        $check_booking = PoojaBooking::where('booking_id',$request->booking_id)->where('deleted_at',NULL)->first();
        if (is_null($check_booking)) {
            return response()->json(['message' => 'No Booking Found'], 400);
        }

        $bookings = PoojaBooking::where('status','0')->where('booking_status','0')->where('booking_id',$request->booking_id)->where('pujari_id',$request->pujari_id)->where('pooja_date','>=',date('Y-m-d'))->first();

        if($bookings){

            $pooja_date = $bookings->pooja_date;
            $pooja_time = $bookings->pooja_time;
            $pooja_datetime = $pooja_date . ' ' . $pooja_time;
            $future_datetime = new DateTime($pooja_datetime);
            $current_datetime = new DateTime();
            if ($current_datetime <= $future_datetime) {
                $interval = $current_datetime->diff($future_datetime);
                $total_hours_left = $interval->days * 24 + $interval->h;

                if ($total_hours_left <= 48) {
                    $fine = $bookings->total_price*0.1;
                } else {
                    $fine = 0;
                }
            }

            $update = PoojaBooking::where('status','0')->where('booking_status','0')->where('booking_id',$request->booking_id)->where('pujari_id',$request->pujari_id)->where('pooja_date','>=',date('Y-m-d'))->update(['pujari_id' => '','request_status'=>'1']);

            $pujari_wallet = (int)$check_pujari->wallet_amt - (int)$fine;

            $update_wallet = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->update(['wallet_amt'=>$pujari_wallet]);

            // if($fine>0){
                $cancel_id =  'PPC' . date('dmy') . last_id('pooja_cancel_by_pujari');
                $store = new PoojaCancelByPujari([
                    'cancel_id' => $cancel_id,
                    'pujari_id' => $bookings->pujari_id,
                    'cancel_by'=>$request->pujari_id,
                    'booking_id' => $bookings->booking_id,
                    'fine' => $fine,
                    'booking_date' => $bookings->booking_date,
                    'booking_time' => $bookings->booking_time,
                    'cancel_date' => date('Y-m-d'),
                    'cancel_time' => date('H:i:s')
                ]);
                $store->save();
            // }
                // Send Notification
                $fcm_token = jajmaan_fcm($bookings->jajmaan_id);
                $title = 'Booking Canceled';
                $body = 'Unfortunately, Pujari Ji has canceled your pooja booking. Kindly Change Pujari ji';
                $sender_id = $bookings->jajmaan_id;
                send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification
            return $responseArray = [
                'status_code' => 200,
                'message' => 'Cancelled Successfully',
                'response' => $bookings->booking_id
            ];
        }else{
            return $responseArray = [
                'status_code' => 400,
                'message' => 'Could not perform operation',
                'response' => ''
            ];
        }
    }



    public function pujari_verify_booking_by_otp(Request $request){
        $rules = [
            'booking_id' => 'required',
            'pujari_id' => 'required',
            'otp' => 'required|digits:4',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $v_pujari = PoojaPujari::where('pujari_id', $request->pujari_id)->where('status','0')->where('verification','0')->where('deleted_at',NULL)->first();
        if(is_null($v_pujari)){
            return response()->json([
                'status_code' => 200,
                'message' => 'No Pujari Ji Found',
                'response' => '',
            ]);
        }

        $booking = PoojaBooking::where('booking_id',$request->booking_id)->where('booking_status','0')->where('booking_otp',$request->otp)->where('deleted_at',NULL)->first();
        if($booking){
            if($booking->payment_type=='0'){
                $wallet = $v_pujari->wallet_amt + $booking->total_price*0.7;
            }else{
                $wallet = $v_pujari->wallet_amt;
            }

            $update = PoojaPujari::where('pujari_id', $request->pujari_id)->where('status','0')->where('verification','0')->where('deleted_at',NULL)->update(['wallet_amt'=>$wallet]);

            $change = PoojaBooking::where('booking_id',$request->booking_id)->update([
                'booking_status'=>'1'
            ]);

            // Send Notification
            $fcm_token = jajmaan_fcm($booking->jajmaan_id);
            $title = 'Pooja Completed';
            $body = 'Congratulations! Your Offline Pooja has been successfully completed. Thank you for choosing our services!';
            $sender_id = $booking->jajmaan_id;
            send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

            // Send Notification
            $fcm_token2 = get_fcm_key($request->pujari_id);
            $title2 = 'Pooja Completed';
            $body2 = 'Congratulations! You have successfully completed the Offline Pooja. Thank you for your dedicated service!';
            $sender_id2 = $request->pujari_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

            return response()->json([
                'status_code' => 200,
                'message' => 'Verified Successfully',
                'response' => $booking->booking_id,
            ]);
        }
        return response()->json([
            'status_code' => 400,
            'message' => 'OTP is not correct!',
            'response' => ''
        ]);
    }



    public function pujari_total_wallet_history_data(Request $request){
        $rules = [
            'pujari_id' => 'required',
            'type' => 'required|in:0,1,2,3',  //0->All, 1->Withdraw, 2->Online, 3->Cash
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);
        $data = [];
        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if($request->type=='1'){
            $history = PoojaPujariWithdraw::where('pujari_id',$request->pujari_id)->latest()->get();
            foreach ($history as $key => $value) {
                $data[] = [
                    'id' => $value->withdra_id,
                    'withdraw_status' => $value->withdraw_status,
                    'transaction_date_time' => $value->created_at,
                    'money' => number_format($value->withdraw_amount,2),
                    'type' => '',
                ];
            }

        }else{
            $history = PoojaBooking::where('pujari_id',$request->pujari_id)->where('booking_status','1')->where('request_status','0');
            if($request->type=='2'){
                $history = $history->where('payment_type','0');
            }
            if($request->type=='3'){
                $history = $history->where('payment_type','1');
            }
            $history = $history->latest()->get();

            foreach ($history as $key => $value) {
                $data[] = [
                    'id' => $value->booking_id,
                    'transaction_date_time' => $value->created_at,
                    'money' => number_format($value->total_price*0.7,2),
                    'type' => $value->payment_type,
                ];
            }
        }
        return response()->json([
            'status_code' => 200,
            'message' => 'Data Found Successfully',
            'response' => $data,
        ]);
    }




    public function pujari_total_wallet_balance(Request $request){
        $rules = [
            'pujari_id' => 'required',
            'type' => 'required|in:0,1,2,3',  //0->All, 1->Withdraw, 2->Online, 3->Cash, 4->Wallet Balance
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);
        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $money= 0;

            $pujari = PoojaPujari::where('pujari_id',$request->pujari_id)->first();
            $wallet = $pujari->wallet_amt??0;

        if($request->type=='1'){
            $history = PoojaPujariWithdraw::where('pujari_id',$request->pujari_id)->latest()->sum('withdraw_amount');
            $money = $history;
        }else{
            $history = PoojaBooking::where('pujari_id',$request->pujari_id)->where('booking_status','1')->where('request_status','0');
            if($request->type=='2'){
                $history = $history->where('payment_type','0')->sum('total_price');
                $money = $history*0.7;
            }
            if($request->type=='3'){
                $history = $history->where('payment_type','1')->sum('total_price');
                $money = $history*0.7;
            }
            if($request->type=='0'){
                $history = $history->sum('total_price');
                $money = $history*0.7;
            }

        }

        $msg = $request->type=='0'?'Total':($request->type=='1'?'Total Withdaraw':($request->type=='2'?'Total Online':'Total Cash'));
        return response()->json([
            'status_code' => 200,
            'message' => $msg.' Amount',
            'response' => number_format($money,2),
            'wallet' => number_format($wallet,2),
        ]);
    }





}
