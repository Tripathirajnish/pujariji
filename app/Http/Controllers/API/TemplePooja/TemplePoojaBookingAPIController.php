<?php

namespace App\Http\Controllers\API\TemplePooja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use \Illuminate\Notifications\Notifiable;
use App\Services\FCMService;
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

    Temple,
    TemplePooja,
    TemplePoojaRating,
    TemplePoojaPackage,
    TemplePoojaInclusion,
    TemplePoojaBooking,
    PaymentTable
};
use Str;

class TemplePoojaBookingAPIController extends Controller
{

    public function get_temple(){
        $temples = Temple::where('status','0')->whereNull('deleted_at')->orderBy('temple_name','asc')->latest()->get();
        $list = [];
        foreach ($temples as $key => $value) {
            $list[] = [
                "temple_id" => $value->temple_id,
                "temple_name" => $value->temple_name,
                "temple_name_hindi" => $value->temple_name_hindi,
                "temple_image" => $value->temple_image,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' =>"Temple’s List Fetched Successfully",
            'response' => $list
        ];
    }

    public function pooja_list(Request $request){
        $validator = Validator::make($request->all(), [
            'temple_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $list = [];

        $pooja_list = TemplePooja::where('temple_id',$request->temple_id)->where('status','0')->whereNull('deleted_at')->latest()->get();

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
            'message' => category_name($request->temple_id).' Pooja’s Fetched Successfully',
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

        $pooja = TemplePooja::where('pooja_id',$request->pooja_id)->where('status','0')->whereNull('deleted_at')->first();
        if(is_null($pooja)){
            return $responseArray = [
                'status_code' => 400,
                'message' =>"No Pooja Found",
                'response' => ''
            ];
        }
            $ratings = TemplePoojaRating::where('pooja_id',$pooja->pooja_id)->where('status','0')->whereNull('deleted_at')->get();
            foreach ($ratings as $key => $value) {
                $ratings_list[] = [
                    "rating_id" => $value->rating_id,
                    "name" => jajmaan_name($value->rated_by),
                    "image" => jajmaan_image($value->rated_by),
                    "title" => $value->title,
                    "jajman_ratings" => $value->pooja_rating,
                    "rating_description" => $value->description,
                    "date" => $value->date
                ];
            }

            $package = TemplePoojaPackage::where('pooja_id',$pooja->pooja_id)->where('status','0')->whereNull('deleted_at')->get();
            foreach ($package as $key => $value) {
                $inclusions = TemplePoojaInclusion::where('package_id',$value->package_id)->where('status','0')->whereNull('deleted_at')->get();
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




            $one_star = TemplePoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',1)->count();
            $two_star = TemplePoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',2)->count();
            $three_star = TemplePoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',3)->count();
            $four_star = TemplePoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',4)->count();
            $five_star = TemplePoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->where('pooja_rating',5)->count();

            $sum_rating = TemplePoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->sum('pooja_rating');
            $count_rating = TemplePoojaRating::where('pooja_id',$request->pooja_id)->where('status','0')->where('deleted_at',NULL)->count();

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
            'message' =>'Pooja Detail Fetched Successfully',
            'response' => $list
        ];
    }



    public function temple_pooja_booking(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required',
            'pooja_id' => 'required',
            'package_id' => 'required',
            'package_inclusion' => 'required', // List of inclusion Id’s bhejunga tumhe
            'pooja_type' => 'required|in:0,1', // 0 for online and 1 for offline
            'pooja_date' => 'required|date',
            'pooja_time' => 'required',
            'notes' => 'required',
            'address' => 'required',
            'total_price' => 'required|numeric|gt:0',
            'transaction_id' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('deleted_at',NULL)->first();
        if (is_null($check_jajmaan)) {
            return response()->json(['message' => 'No Jajmaan Found'], 400);
        }

        $check_package = TemplePoojaPackage::where('package_id',$request->package_id)->where('deleted_at',NULL)->first();
        if (is_null($check_package)) {
            return response()->json(['message' => 'No Package Found'], 400);
        }

        $check_pooja = TemplePooja::where('pooja_id',$request->pooja_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pooja)) {
            return response()->json(['message' => 'No Pooja Found'], 400);
        }

        $booking_id = 'PTB' . date('dmy') . last_id('tample_pooja_bookings');
        $package_inclusion = stringToArray($request->package_inclusion);
        // Create a new record
        $pujari = new TemplePoojaBooking([
            'booking_id' => $booking_id,
            'booking_type' => $request->pooja_type,
            'booking_date' => date('Y-m-d'),
            'booking_time' => date('H:i:s'),
            'pooja_date' => $request->input('pooja_date'),
            'pooja_time' => $request->input('pooja_time'),
            'jajmaan_id' => $request->input('jajmaan_id'),
            'pooja_id' => $request->input('pooja_id'),
            'package_id' => $request->input('package_id'),
            'inclusions' => serialize($package_inclusion),
            'payment_type' => '0',
            'pooja_price' => $request->input('total_price'),
            'total_price' => $request->input('total_price'),
            'advance' => $request->input('total_price'),
            'notes' => $request->input('notes'),
            'transaction_id' => $request->input('transaction_id'),
            'location' => $request->input('address'),
            'balance' => 0,
            'payment_done_date' => date('Y-m-d')
        ]);

        $pujari->save();

        if($pujari){
            $save = PaymentTable::create([
                'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                'payment_for_id' => $booking_id,
                'payment_for_what' => "Temple Booking",
                'transection_id' => $request->transaction_id,
                'amount' => $request->total_price,
                'entity' => $request->total_price,
                'type' => 'Credit',
                'mobile' => '',
                'fee' => '0',
            ]);
        }

        // Send Notification
        $fcm_token = jajmaan_fcm($request->jajmaan_id);
        $title ='Temple Pooja Booked';
        $body = 'Congratulations! Temple pooja has been booked, Kindly check in your application.';
        $sender_id = $request->jajmaan_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Temple Pooja Booked Successfully',
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
        $temple_history = [];
        $inclusions = [];

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('deleted_at',NULL)->first();
        if (is_null($check_jajmaan)) {
            return response()->json(['message' => 'No Jajmaan Found'], 400);
        }
        $bookings = TemplePoojaBooking::where('status','0')->where('jajmaan_id',$request->jajmaan_id)->latest()->get();
        foreach ($bookings as $book){
            $pooja_name = temple_pooja_name($book->pooja_id);
            $package_name = temple_package_name($book->package_id);
            $temple_name = temple_name($book->pooja_id);

            // if($book->booking_type=='1'){
                $temple_history[] = [
                    "booking_id" => $book->booking_id,
                    "pooja_id" => $book->pooja_id,
                    "pooja_name" => $pooja_name['eng_name'],
                    "pooja_name_hindi" => $pooja_name['hindi_name'],
                    "temple_name" => $temple_name['eng_name'],
                    "temple_name_hindi" => $temple_name['hindi_name'],
                    "address" => $book->location,
                    "pooja_type" => $book->booking_type,
                    "package_eng" => $package_name['eng_name'],
                    "package_hin" => $package_name['hindi_name'],
                    "pooja_date" => $book->pooja_date,
                    "pooja_time" => $book->pooja_time,
                    "notes" => $book->notes,
                    "pooja_price" => $book->pooja_price,
                    "total_pooja_price" => $book->total_price,
                    "inclusions" => unserialize($book->inclusions),
                    "booking_status" => $book->booking_status,
                    "cancel_status" => $book->booking_status=='2'?'0':'1',
                    "jajman_name" => jajmaan_name($book->jajmaan_id),
                    "jajman_number" => jajmaan_number($book->jajmaan_id),
                    "booked_date" => $book->booking_date,
                    "accept_date_time" => $book->accept_date,
                    "pooja_status" => $book->booking_status,
                    "admin_info" => $book->online_admin_info
                ];
            // }

            // if($book->booking_type=='0'){
            //     $online_pooja[] = [
            //         "booking_id" => $book->booking_id,
            //         "pooja_id" => $book->pooja_id,
            //         "pooja_name" => $pooja_name['eng_name'],
            //         "pooja_name_hindi" => $pooja_name['hindi_name'],
            //         "temple_name" => $temple_name['eng_name'],
            //         "temple_name_hindi" => $temple_name['hindi_name'],
            //         "address" => $book->location,
            //         "pooja_type" => $book->booking_type,
            //         "package_eng" => $package_name['eng_name'],
            //         "package_hin" => $package_name['hindi_name'],
            //         "pooja_date" => $book->pooja_date,
            //         "pooja_time" => $book->pooja_time,
            //         "notes" => $book->notes,
            //         "total_pooja_price" => $book->total_price,
            //         "inclusions" => unserialize($book->inclusions),
            //         "cancel_status" => $book->booking_status,
            //         "jajman_name" => jajmaan_name($book->jajmaan_id),
            //         "jajman_number" => jajmaan_number($book->jajmaan_id),
            //         "booked_date" => $book->booking_date,
            //         "accept_date_time" => $book->accept_date,
            //         "pooja_status" => $book->booking_status
            //     ];
            // }

            $inclusions = [];
        }

        return $responseArray = [
            'status_code' => 200,
            'message' =>'List Fetched Successfully',
            'response' =>[
                "temple_Pooja_list" => $temple_history
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

            $booking = TemplePoojaBooking::where('booking_id',$request->booking_id)->where('booking_status','0')->where('deleted_at',NULL)->first();
            $fine = 0;
            if($booking){
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

                $cancel_booking = TemplePoojaBooking::where('booking_id',$request->booking_id)->update([
                    'cancel_date_time'=>date('d-m-Y H:i:s'),
                    'can_acholder'=>$request->acholder,
                    'can_acnumber'=>$request->acnumber,
                    'can_ifsc'=>$request->ifsc,
                    'can_type'=>$request->type,
                    'can_reason'=>$request->reason,
                    'can_amount'=>$request->amount,
                    'cancel_by'=>$request->jajman_id,
                    'jajmaan_fine'=>$fine,
                    'booking_status'=>'2',
                ]);

                // Send Notification
                $fcm_token = jajmaan_fcm($request->jajman_id);
                $title ='Temple Pooja Cancelled';
                $body = 'The temple pooja has been canceled. Refund initiation will occur shortly.';
                $sender_id = $request->jajman_id;
                send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

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

    public function store_pooja_review(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required',
            'pooja_id' => 'required',
            'pooja_review_rating' => 'required',
            'pooja_review_title' => 'required',
            'pooja_review_description' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $rating_id = 'PTR' . date('dmy') . last_id('temple_pooja_ratings');

        // Create a new record
        $pujari = new TemplePoojaRating([
            'rating_id' => $rating_id,
            'pooja_id' => $request->input('pooja_id'),
            'rated_by' => $request->input('jajmaan_id'),
            'pooja_rating' => $request->input('pooja_review_rating'),
            'title' => $request->input('pooja_review_title'),
            'description' => $request->input('pooja_review_description'),
            'date' => date('Y-m-d'),
        ]);

        $pujari->save();

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Review Posted Successfully',
            'response' => $rating_id
        ];
    }


}
