<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\KathavachkRating;
use App\Models\Kathavachak;
use App\Models\Jajmaan;
use App\Models\AppReview;
use App\Models\ServiceLanguage;
use App\Models\Banner;
use App\Models\VendorServiceProvides;
use App\Models\Notifications;
use App\Models\ExtraPayment;
use App\Models\PaymentTable;
use DB;
use Carbon\Carbon;

class PujarijiAPIController extends Controller
{
    // state list
    public function get_state_list(Request $request){

        $list = DB::table('pujari_state')->where('status','0')->orderBy('state','asc')->get();

        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $list
        ];

    }

    // state list
    public function get_city_list(Request $request){
        $rules = [
            'state_id' => 'required|string'
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $list = DB::table('pujari_city')->where('state_id',$request->state_id)->where('status','0')->orderBy('city','asc')->get();

        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $list
        ];

    }





    // App Revview
    public function app_review(Request $request){
        $rules = [
            'review_by' => 'required',
            'title' => 'required',
            'description' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $check = AppReview::where('review_by',$request->review_by)->whereNull('deleted_at')->first();
                if($check){
                    $review_id = $check->review_id;
                }else{
                    $review_id = 'PARV' . rand(11, 99) . date('dmy') . last_id('app_reviews');
                }

                $save = AppReview::UpdateorCreate([
                    'review_id' => $review_id,
                ],[
                    'review_by' => $request->review_by,
                    'date' => date('Y-m-d'),
                    'title' => $request->title,
                    'description' => $request->description
                ]);

                return response()->json([
                    'status_code' => 200,
                    'message' => 'Review Saved Successfully',
                    'response' => $save
                ]);
        }
    }



    // state list
    public function get_language_list(Request $request){

        $new_list = [];
        $list = ServiceLanguage::where('status','0')->orderBy('language','asc')->whereNull('deleted_at')->get();
        foreach ($list as $key => $value) {
            $new_list[] = [
                'id' => $value->id,
                'language_id' => $value->language_id,
                'language' => $value->language,
                'language_hindi' => $value->language_hindi,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $new_list
        ];

    }



    // state list
    public function get_banner(Request $request){
        $rules = [
            'screen' => 'required'  // 0->User, 1->Astrology, 2->Kathavachak, 3->Pujari
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $new_list = [];
        $list = Banner::where('status','0')->where('screen',$request->screen)->latest()->get();
        foreach ($list as $key => $value) {
            $new_list[] = [
                'image' => $value->image
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $new_list
        ];

    }



    public function get_support(Request $request){
        $new_list = [];
        $list = DB::table('pujari_ji_support')->first();
        $data = [
            'email' => $list->email,
            'phone' => $list->phone,
        ];
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Support Found',
            'response' => $data
        ];
    }


    public function get_vendor_support(Request $request){
        $new_list = [];
        $list = DB::table('pujari_ji_vendor_support')->first();
        $data = [
            'email' => $list->email,
            'phone' => $list->phone,
        ];
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Support Found',
            'response' => $data
        ];
    }


    public function get_global_states(Request $request){
        $new_list = [];
        $list = DB::table('states')->where('status','Active')->orderBy('state_title','asc')->get();
        foreach ($list as $key => $value) {
            $new_list[] = [
                'state_id' => $value->id,
                'state' => $value->state_title,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $new_list
        ];
    }


    public function get_global_cities(Request $request){
        $rules = [
            'state_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $new_list = [];
        $list = DB::table('cities')->where('state_id',$request->state_id)->orderBy('name','asc')->get();
        foreach ($list as $key => $value) {
            $new_list[] = [
                'state_id' => $value->state_id,
                'city_id' => $value->id,
                'city' => $value->name,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $new_list
        ];
    }


    public function get_company_details(Request $request){
        $list = DB::table('pujariji_company_details')->first();

        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $list
        ];
    }


    // state list
    public function get_vendor_services_list(Request $request){
        $rules = [
            'vendor_type' => 'required'  // 0->Astrologer, 1->Kathavachak, 2->Pujari
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $new_list = [];
        $list = VendorServiceProvides::where('status','0')->where('service_provider',$request->vendor_type)->latest()->whereNull('deleted_at')->get();
        foreach ($list as $key => $value) {
            $new_list[] = [
                'service_id' => $value->service_id,
                'name' => $value->service_name,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $new_list
        ];

    }

    // state list
    public function get_notification_by_id(Request $request){
        $rules = [
            'list_id' => 'required',
            'type' => 'required|in:0,1',  // 0->User, 1->Vendor
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $new_list = [];
        $list = Notifications::where('status','0')->where('send_to',$request->list_id)->where('notfication_to',$request->type)->latest('id')->get();
        foreach ($list as $key => $value) {
            $new_list[] = [
                'notfication_to' => $value->notfication_to,
                'notification_by' => $value->notification_by,
                'date' => Carbon::parse($value->created_at)->diffForHumans(),
                'image' => $value->image,
                'message' => $value->msg,
                'title' => $value->title,
                'body' => $value->body,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $new_list
        ];
    }



    public function extra_payment(Request $request){
        $rules = [
            'user_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'amount' => 'required|numeric',
            'transaction_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $pay_id = 'PEP' . rand(11, 99) . date('dmy') . last_id('extra_payments');

        $save = ExtraPayment::UpdateorCreate([
            'pay_id' => $pay_id,
        ],[
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'amount' => $request->amount,
            'transaction_id' => $request->transaction_id
        ]);
        if($save) {
            $save = PaymentTable::create([
                'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                'payment_for_id' => $request->user_id,
                'payment_for_what' => 'Extra Payment',
                'transection_id' => $request->transaction_id,
                'amount' => $request->amount,
                'entity' => $request->amount,
                'type' => 'Credit',
                'mobile' => '',
                'fee' => '0',
            ]);
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Payment Received Successfully',
            'response' => $pay_id
        ];
    }

}
