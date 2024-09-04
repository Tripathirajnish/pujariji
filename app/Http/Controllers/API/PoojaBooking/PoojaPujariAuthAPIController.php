<?php

namespace App\Http\Controllers\API\PoojaBooking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use DB;
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
    PujariBankDetails,
    PoojaPujariWithdraw
};
use Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class PoojaPujariAuthAPIController extends Controller
{

    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'surname' => 'required',
            'father_name' => 'required',
            'phone_number' => 'required|numeric|digits:10|unique:pooja_pujari,phone_number',
            'phone_number' => [
                'required',
                'numeric',
                'digits:10',
                Rule::unique('pooja_pujari', 'phone_number')->whereNull('deleted_at'),
            ],
            'whatsapp_number' => 'required|numeric|digits:10',
            'date_of_birth' => 'required|date',
            'education' => 'required',
            'gender' => 'required|in:0,1,2',
            'address' => 'required',
            'village_or_flat_no' => 'required',
            'post' => '',
            'police_station' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required|numeric|digits:6',
            'other_job' => 'required',
            'gst_name' => 'nullable',
            'gst_number' => 'nullable',
            'list_languages' => 'required',
            'list_perform_pooja' => 'required',
            'online_or_offline' => 'required|in:0,1,2',
            'temple_name' => 'nullable',
            'adhar_front_image' => 'nullable',
            'adhar_back_image' => 'nullable',
            'about' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $pujari_id = 'PUJ' . date('dmy') . last_id('pooja_pujari');

        // Handle image uploads for 'astro_image' and 'adhar_front_image'
        $aadharPic = $request->file('adhar_front_image');

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            $path = public_path('pooja/pujari/profile');
            $profile_image = $pujari_id.'_profile.'.$request->file('profile_image')->getClientOriginalExtension();
            $imagePath = $request->file('profile_image')->move($path, $profile_image);
        }

        // Handle profile image upload
        if ($request->hasFile('adhar_front_image')) {
            $path = public_path('pooja/pujari/aadhar');
            $aadhar_image = $pujari_id.'_aadhar.'.$request->file('adhar_front_image')->getClientOriginalExtension();
            $aadharimagePath = $request->file('adhar_front_image')->move($path, $aadhar_image);
        }

        // Handle profile image upload
        if ($request->hasFile('adhar_back_image')) {
            $path = public_path('pooja/pujari/aadhar');
            $aadhar_back_image = $pujari_id.'_aadhar_back.'.$request->file('adhar_back_image')->getClientOriginalExtension();
            $aadharimagePath = $request->file('adhar_back_image')->move($path, $aadhar_back_image);
        }

        $list_languages = stringToArray($request->list_languages);
        $list_perform_pooja = stringToArray($request->list_perform_pooja);

        // Create a new record
        $pujari = new PoojaPujari([
            'pujari_id' => $pujari_id,
            'date' => date('Y-m-d'),
            'pujari_image' => $profile_image,
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'father_name' => $request->input('father_name'),
            'phone_number' => $request->input('phone_number'),
            'whatsapp_number' => $request->input('whatsapp_number'),
            'date_of_birth' => $request->input('date_of_birth'),
            'education' => $request->input('education'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'village_or_flat_no' => $request->input('village_or_flat_no'),
            'post' => $request->input('post'),
            'police_station' => $request->input('police_station'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'pincode' => $request->input('pincode'),
            'other_job' => $request->input('other_job'),
            'gst_name' => $request->input('gst_name'),
            'gst_number' => $request->input('gst_number'),
            'list_languages' => serialize($list_languages),
            'list_perform_pooja' => serialize($list_perform_pooja),
            'online_or_offline' => $request->input('online_or_offline'),
            'temple_name' => $request->input('temple_name'),
            'adhar_front_image' => $aadhar_image??'',
            'adhar_back_image' => $aadhar_back_image??'',
            'about' => $request->input('about'),
        ]);

        $pujari->save();

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Registration Successfull',
            'response' => $pujari_id
        ];
    }


    public function send_otp(Request $request){
        $rules = array(
            'mobile' => 'required|numeric|digits:10',
        );

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()], 401);
        }else{
            $verify = PoojaPujari::where('phone_number',$request->mobile)->where('deleted_at',NULL)->first();
            if(!is_null($verify)){
                if($verify->status=='0'){
                    if($verify->verification=='0'){
                        if($verify->verification=='2'){
                            return $responseArray = [
                                'status_code' => 200,
                                'message' => 'Profile Verification Rejected',
                                'response' => ''
                            ];
                        }
                        $mobile = $verify->mobile;
                        // $otp = rand(1111,9999);
                        $otp = generate_otp(4);
                        // Send SMS API Here
                        $message = "Dear Customer, the OTP for registration to PUJARI JI is ".$otp.". Do not share with anyone VALID 5 MINT . -PUJARI JI";
                        sms($request->mobile, $message);

                        $update = PoojaPujari::where('phone_number',$request->mobile)->update(['login_otp'=>$otp]);
                            return $responseArray = [
                                'status_code' => 200,
                                'message' => 'OTP Send Successfully',
                                'response' => $request->mobile
                            ];
                    }else{
                        return $responseArray = [
                            'status_code' => 401,
                            'message' =>'Under Verification',
                            'response' => ''
                        ];
                    }
                }else{
                    return $responseArray = [
                        'status_code' => 403,
                        'message' => 'No Access to Login',
                        'response' => ''
                    ];
                }
            }else{
                return $responseArray = [
                    'status_code' => 401,
                    'message' => 'Number Not Registered',
                    'response' => ''
                ];
            }
        }
    }



    // Verify OTP
    public function verify_otp(Request $request){
        $rules = array(
            'mobile' => 'required|numeric|digits:10',
            'otp' => 'required|numeric|digits:4',
            'fcm_token' => 'string',
        );

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()], 401);
        }else{
            $verify = PoojaPujari::where('phone_number',$request->mobile)->where('deleted_at',NULL)->first();
            if(!is_null($verify)){
                $verify_otp = PoojaPujari::where('phone_number',$request->mobile)->where('login_otp',$request->otp)->where('deleted_at',NULL)->first();

                if(!is_null($verify_otp)){
                    $otp = Str::random(6);
                    $update = PoojaPujari::where('phone_number',$request->mobile)->update(['login_otp'=>$otp,'fcm_token'=>$request->fcm_token]);

                    return $responseArray = [
                        'status_code' => 200,
                        'message' => 'OTP Verified Successfully',
                        'response' => $verify_otp->pujari_id
                    ];

                }else{
                    return $responseArray = [
                        'status_code' => 401,
                        'message' => 'Invalid OTP',
                        'response' => ''
                    ];
                }
            }else{
                return $responseArray = [
                    'status_code' => 401,
                    'message' => 'Number Not Registered',
                    'response' => ''
                ];
            }
        }
    }



    public function pujari_profile(Request $request){
        $rules = [
            'pujari_id' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
        } else{
            $check = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->first();
            if($check){
                $sum_rating = $one_star = PoojaRating::where('pujari_id',$check->pujari_id)->where('deleted_at',NULL)->sum('pujari_rating');
                $count_rating = $one_star = PoojaRating::where('pujari_id',$check->pujari_id)->where('deleted_at',NULL)->count();
                $pujari_rating = $count_rating>0?round($sum_rating/$count_rating,1):0;

            $data = [
                'pujari_id' => $check->pujari_id,
                'status' => $check->status,
                'date' => $check->date,
                'verification' => $check->verification,
                'pujari_image' => $check->pujari_image,
                'name' => $check->name,
                'surname' => $check->surname,
                'father_name' => $check->father_name,
                'phone_number' => $check->phone_number,
                'whatsapp_number' => $check->whatsapp_number,
                'date_of_birth' => $check->date_of_birth,
                'education' => $check->education,
                'gender' => $check->gender,
                'address' => $check->address,
                'village_or_flat_no' => $check->village_or_flat_no,
                'post' => $check->post,
                'police_station' => $check->police_station,
                'city' => $check->city,
                'state' => $check->state,
                'pincode' => $check->pincode,
                'other_job' => $check->other_job,
                'gst_name' => $check->gst_name,
                'gst_number' => $check->gst_number,
                'list_languages' => unserialize($check->list_languages),
                'list_perform_pooja' => unserialize($check->list_perform_pooja),
                'online_or_offline' => $check->online_or_offline,
                'temple_name' => $check->temple_name,
                'adhar_front_image' => $check->adhar_front_image,
                'adhar_back_image' => $check->adhar_back_image,
                'about' => $check->about,
                'wallet_amt' => $check->wallet_amt,
                'fine_amt' => $check->fine_amt,
                'fcm_token' => $check->fcm_token,
                'average_rating' =>number_format($pujari_rating, 1, '.', ''),
            ];

                return response()->json([
                    'status_code' =>200,
                    'message' => 'Pujari Found',
                    'response' => $data
                ]);
            }else{
                return response()->json([
                    'status_code' =>400,
                    'message' => 'No Pujari Found',
                    'response' => ''
                ]);
            }
        }
    }





    // Verification Status
    public function verification_status(Request $request){
        $rules = [
            'pujari_id' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
        } else{
            $verify = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->first();
            if($verify){
                $messages = $verify->verification=='0'?'Verified':($verify->verification=='1'?'Pending':'Rejected');
                return response()->json([
                    'status_code' => 200,
                    'message' => 'Pujari is '.$messages,
                    'response' => [
                        'status' => $verify->status,
                        'verification' => $verify->verification
                    ]
                ]);
            }else{
                return response()->json([
                    'status_code' => 400,
                    'message' => 'Pujari Not Found',
                    'response' => ''
                ]);
            }
        }
    }



    public function processAstroName($name)
    {
        $nameParts = explode('_', $name);
        $nameParts = array_map(function ($part) {
           return str_replace('', 'Pujari', $part);
        }, $nameParts);
        $nameParts = array_map('ucwords', $nameParts);
        $processedName = implode(' ', $nameParts);
        return $processedName;
    }


    // Update Profile
    public function update_profile(Request $request){
        $rules = [
            'pujari_id' => 'required|string',
            'pujari_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'name' => '',
            'surname' => '',
            'father_name' => '',
            'phone_number' => 'numeric|digits:10',
            'whatsapp_number' => 'numeric|digits:10',
            'date_of_birth' => 'date',
            'education' => '',
            'gender' => 'in:0,1,2',
            'address' => '',
            'village_or_flat_no' => '',
            'post' => '',
            'police_station' => '',
            'city' => '',
            'state' => '',
            'pincode' => 'numeric|digits:6',
            'other_job' => '',
            'gst_name' => 'nullable',
            'gst_number' => 'nullable',
            'list_languages' => '',
            'list_perform_pooja' => '',
            'online_or_offline' => 'in:0,1',
            'temple_name' => 'nullable',
            'adhar_front_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'adhar_back_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'about' => '',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }


        $check = PoojaPujari::where('pujari_id',$request->pujari_id)->where('verification','0')->where('deleted_at',NULL)->first();
        if($check){
            if($request->phone_number){
                $check_p = PoojaPujari::where('pujari_id','!=',$request->pujari_id)->where('phone_number',$request->phone_number)->where('deleted_at',NULL)->first();
                if(!is_null($check_p)){
                    return response()->json([
                        'status_code' => 400,
                        'message' => 'Number is already taken',
                        'response' => ''
                    ]);
                }
            }
            $update = PoojaPujari::find($check->id);

            if ($request->hasFile('pujari_image')) {
                if (file_exists(url('public/pooja/pujari/profile',$check->origional_pujari_image))){
                    File::deleteDirectory(url('public/pooja/pujari/profile',$check->origional_pujari_image));
                }
                $path = public_path('pooja/pujari/profile');
                $profile_image = $check->pujari_id.'_profile.'.$request->file('pujari_image')->getClientOriginalExtension();
                $request->file('pujari_image')->move($path, $profile_image);
                $update->pujari_image = $profile_image;
                $update->save();
                $message = 'Profile Image Updated Successfully';
            }

            if ($request->hasFile('adhar_front_image')) {
                if (file_exists(url('public/pooja/pujari/aadhar',$check->origional_adhar_front_image))){
                    $delete  = File::deleteDirectory(url('public/pooja/pujari/aadhar',$check->origional_adhar_front_image));
                }
                $path = public_path('pooja/pujari/aadhar');
                $aadhar_image = $check->pujari_id.'_aadhar.'.$request->file('adhar_front_image')->getClientOriginalExtension();
                $request->file('adhar_front_image')->move($path, $aadhar_image);
                $update->adhar_front_image = $aadhar_image;
                $update->save();
                $message = 'Aadhar Image Updated Successfully';
            }

            if ($request->hasFile('adhar_back_image')) {
                if (file_exists(url('public/pooja/pujari/aadhar',$check->origional_adhar_back_image))){
                    $delete  = File::deleteDirectory(url('public/pooja/pujari/aadhar',$check->origional_adhar_back_image));
                }
                $path = public_path('pooja/pujari/aadhar');
                $aadhar_back_image = $check->pujari_id.'_aadhar_back.'.$request->file('adhar_back_image')->getClientOriginalExtension();
                $request->file('adhar_back_image')->move($path, $aadhar_back_image);
                $update->adhar_back_image = $aadhar_back_image;
                $update->save();
                $message = 'Aadhar Image Updated Successfully';
            }

            foreach ($rules as $field => $rule) {
                if ($request->has($field)) {
                    if ($field !== 'pujari_image' && $field !== 'adhar_front_image' && $field !== 'adhar_back_image' && $field !== 'pujari_id') {
                        if($field == 'list_perform_pooja' || $field == 'list_languages'){
                            $update->$field = serialize(stringToArray($request->input($field)));
                            $update->save();
                        }else{
                            $update->$field = $request->input($field);
                            $update->save();
                        }
                        $message = $this->processAstroName($field).' Updated Successfully.';
                    }
                }
            }
            return response()->json([
                'status_code' =>200,
                'message' => $message,
                'response' => $check->pujari_id
            ]);
        }
        return false;
    }



    public function pujari_list(Request $request){
        $rules = [
            'city' => 'required',
            'state' => 'required',
            'language' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
        } else{
            $list = [];
            $verify = PoojaPujari::where('status','0')->where('city',$request->city)->where('verification','0')->where('state',$request->state)->where('deleted_at',NULL)->latest()->get();
            foreach($verify as $item){
                $un_lang = Arr::pluck(unserialize($item->list_languages),'language');
                // return $un_lang;
                if(in_array($request->language,$un_lang)){

                    $sum_rating = $one_star = PoojaRating::where('pujari_id',$item->pujari_id)->where('deleted_at',NULL)->sum('pujari_rating');
                    $count_rating = $one_star = PoojaRating::where('pujari_id',$item->pujari_id)->where('deleted_at',NULL)->count();
                    $pujari_rating = $count_rating>0?round($sum_rating/$count_rating,1):0;

                    $list[] = [
                        "pujari_id" => $item->pujari_id,
                        "pujari_name" => $item->name.' '.$item->surname,
                        "pujari_image" => $item->pujari_image,
                        "pujari_description" => $item->about,
                        "pujari_rating" => number_format($pujari_rating, 2),
                    ];
                }
            }
            usort($list, function ($a, $b) {
                return $b['pujari_rating'] <=> $a['pujari_rating'];
            });
                return response()->json([
                    'status_code' => 200,
                    'message' => 'Pujari List Fetched Successfully',
                    'response' => $list
                ]);
        }
    }



    public function store_pooja_and_pujari_review(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required',
            'pooja_id' => 'required',
            'pujari_id' => 'required',
            'pooja_review_rating' => 'required',
            'pooja_review_title' => 'required',
            'pooja_review_description' => 'required',
            'poojari_review_rating' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $rating_id = 'PUR' . date('dmy') . last_id('pooja_ratings');

        // Create a new record
        $pujari = new PoojaRating([
            'rating_id' => $rating_id,
            'pooja_id' => $request->input('pooja_id'),
            'rated_by' => $request->input('jajmaan_id'),
            'pujari_id' => $request->input('pujari_id'),
            'pooja_rating' => $request->input('pooja_review_rating'),
            'title' => $request->input('pooja_review_title'),
            'description' => $request->input('pooja_review_description'),
            'pujari_rating' => $request->input('poojari_review_rating'),
            'date' => date('Y-m-d'),
        ]);

        $pujari->save();

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Review Posted Successfully',
            'response' => $rating_id
        ];
    }



    public function pujari_dashboard(Request $request){
        $validator = Validator::make($request->all(), [
            'pujari_id' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_pujari = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pujari)) {
            return response()->json(['message' => 'No Pujari Found'], 400);
        }

        $total_booking = PoojaBooking::where('pujari_id',$request->pujari_id)->where('request_status','0')->where('booking_status','!=','0')->whereNULL('deleted_at')->count();
        $total_money = PoojaBooking::where('pujari_id',$request->pujari_id)->where('request_status','0')->where('booking_status','1')->whereNULL('deleted_at')->sum('total_price');
        $total_confirm = PoojaBooking::where('pujari_id',$request->pujari_id)->where('request_status','0')->where('booking_status','0')->whereNULL('deleted_at')->count();
        $total_pending = PoojaBooking::where('pujari_id',$request->pujari_id)->where('request_status','1')->where('booking_status','0')->whereNULL('deleted_at')->count();

        return response()->json([
            'status_code' => 200,
            'message' => 'Data Found',
            'response' => [
                'pujari' => $check_pujari->name.' '.$check_pujari->surname,
                'total_pooja' => $total_booking,
                'total_money' => round($total_money*0.7,2),
                'total_completed' => $total_confirm,
                'total_pending' => $total_pending,
                'status' => $check_pujari->status,
                'verification' => $check_pujari->verification,
            ]
        ]);
    }



    public function save_bank_details(Request $request){
        $rules = [
            'pujari_id' => 'required',
            'ac_holder' => 'required',
            'ac_number' => 'required|numeric|unique:pooja_pujari_bank_details,pujari_ac_num',
            'ifsc' => 'required',
            'type' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $verify = PoojaPujari::where('pujari_id',$request->pujari_id)->where('deleted_at',NULL)->first();

            if(!is_null($verify)){
                $check = PujariBankDetails::where('pujari_id',$request->pujari_id)->whereNull('deleted_at')->first();
                if($check){
                    $bank_id = $check->astro_bank_id;
                }else{
                    $bank_id = 'PPB' . rand(11, 99) . date('dmy') . last_id('pooja_pujari_bank_details');
                }

                $save = PujariBankDetails::UpdateorCreate([
                    'pujari_id' => $request->pujari_id,
                ],[
                    'pujari_bank_id' => $bank_id,
                    'pujari_type' => $request->type,
                    'pujari_ac_holder' => $request->ac_holder,
                    'pujari_ac_num' => $request->ac_number,
                    'pujari_ifsc' => $request->ifsc,
                ]);

                return response()->json([
                    'status_code' => 200,
                    'message' => 'Bank Details Saved Successfully',
                    'response' => $save,
                ]);
            }
            return response()->json([
                'status_code' => 401,
                'message' => 'Invalid Pujari ID',
                'response' => '',
            ]);
        }
    }



    public function duty_on_off(Request $request) {
        $rules = [
            'pujari_id' => 'required',
            'status' => 'required|in:0,1' //0-> On,  1->Off
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
        } else{
            $verify = PoojaPujari::where('pujari_id', $request->pujari_id)->where('verification', '0')->whereNull('deleted_at')->first();

            if($verify){
                $update = PoojaPujari::where('pujari_id',$request->pujari_id)->where('verification','0')->where('deleted_at',NULL)->update(['status'=>$request->status]);
                return response()->json([
                    'status_code' => 200,
                    'message' => 'Pujari Toggle Switch to ' . ($request->status == 0 ? 'on' : 'off'),
                    'response' => $request->status,
                ]);
            }
            return response()->json([
                'status_code' => 401,
                'message' => 'Pujari Not Found',
                'response' => ''
            ]);
        }
    }

    public function pujari_withdraw_money(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'pujari_id' => 'required',
            'ac_holder' => 'required',
            'ac_number' => 'required',
            'ifsc' => 'required',
            'ac_type' => 'required',
            'withdraw_amount' => 'required|gt:500',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $check = PoojaPujari::where('pujari_id', $request->pujari_id)->where('verification','0')->where('deleted_at',NULL)->first();
        if(is_null($check)){
            return response()->json([
                'status_code' => 400,
                'message' => 'No Pujari Ji Found',
                'response' => '',
            ]);
        }

        if($check->wallet_amt<$request->withdraw_amount){
            return response()->json([
                'status_code' => 400,
                'message' => 'Insufficient Wallet Balance',
                'response' => '',
            ]);
        }
        $withdraw_amount =  $request->withdraw_amount;
        $withdraw_id = 'PWD' . date('dmy') . last_id('pooja_pujari_withdraw');
        $wallet = $check->wallet_amt - $withdraw_amount;

        // Create a new record
        $pujari = new PoojaPujariWithdraw([
            'withdra_id' => $withdraw_id,
            'date' => date('Y-m-d'),
            'pujari_id' => $request->input('pujari_id'),
            'withdraw_amount' => $withdraw_amount,
            'wallet_amount' => $wallet,
            'ac_holder' => $request->input('ac_holder'),
            'ac_number' => $request->input('ac_number'),
            'ifsc' => $request->input('ifsc'),
            'ac_type' =>$request->input('ac_type')
        ]);

        $pujari->save();

            // Send Notification
            $fcm_token2 = get_fcm_key($request->pujari_id);
            $title2 = 'Withdraw Request Placed';
            $body2 = 'Congratulations! Your request for withdrawal has been placed. We will process it shortly. Please check the application for updates.';
            $sender_id2 = $request->pujari_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

        $check = PoojaPujari::where('pujari_id', $request->pujari_id)->where('verification','0')->where('deleted_at',NULL)->update(['wallet_amt' => $wallet]);

        return $responseArray = [
            'status_code' => 200,
            'message' =>'₹'.$withdraw_amount. ' Withdraw Request Submitted Successfully!',
            'response' => $withdraw_id
        ];
    }

}
