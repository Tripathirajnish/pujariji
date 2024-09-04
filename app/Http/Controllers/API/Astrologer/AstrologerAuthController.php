<?php

namespace App\Http\Controllers\API\Astrologer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Astrologer;
use App\Models\AstroRating;
use App\Models\AstrologerBooking;
use App\Models\Jajmaan;
use Illuminate\Validation\Rule;
use App\Models\AstroBankDetail;
use Str;

class AstrologerAuthController extends Controller
{

    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'astro_name' => 'required|string',
            'astro_surname' => 'required|string',
            'astro_father' => 'required|string',
            'astro_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            // 'astro_phone' => 'required|numeric|digits:10|unique:pujari_astrologers,astro_phone',
            'astro_phone' => [
                'required',
                'numeric',
                'digits:10',
                Rule::unique('pujari_astrologers', 'astro_phone')->whereNull('deleted_at'),
            ],
            'astro_whatsapp' => 'required|numeric|digits:10',
            'astro_dob' => 'required|date',
            'astro_education' => 'required|string',
            'astro_gender' => 'required|in:0,1,2',
            'astro_address' => 'required|string',
            'astro_vill_flat' => 'required|string',
            'astro_post' => '',
            'astro_police_station' => 'required|string',
            'astro_city' => 'required|string',
            'astro_state' => 'required|string',
            'astro_pincode' => 'required|numeric|digits:6',
            'astro_other_job' => 'required|string',
            'astro_gst' => '',
            'astro_gst_name' => '',
            'astro_jyotish_language' => 'required',
            'astro_types' => 'required',
            'astro_slot' => 'required|string',
            'astro_price' => 'required|numeric',
            'astro_aadhar_pic' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'astro_aadhar_back_pic' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'astro_about' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $astro_id = 'PUAST' . date('dmy') . last_id('pujari_astrologers');

        // Handle image uploads for 'astro_image' and 'astro_aadhar_pic'
        $aadharPic = $request->file('astro_aadhar_pic');

        // Handle profile image upload
        if ($request->hasFile('astro_image')) {
            $path = public_path('astrologer/profile');
            $profile_image = $astro_id.'_profile.'.$request->file('astro_image')->getClientOriginalExtension();
            $imagePath = $request->file('astro_image')->move($path, $profile_image);
        }

        // Handle profile image upload
        if ($request->hasFile('astro_aadhar_pic')) {
            $path = public_path('astrologer/aadhar');
            $aadhar_image = $astro_id.'_aadhar.'.$request->file('astro_aadhar_pic')->getClientOriginalExtension();
            $aadharimagePath = $request->file('astro_aadhar_pic')->move($path, $aadhar_image);
        }

        // Handle profile image upload
        if ($request->hasFile('astro_aadhar_back_pic')) {
            $path = public_path('astrologer/aadhar');
            $aadhar_back_image = $astro_id.'_aadhar_back.'.$request->file('astro_aadhar_back_pic')->getClientOriginalExtension();
            $aadharbackimagePath = $request->file('astro_aadhar_back_pic')->move($path, $aadhar_back_image);
        }

        if($request->astro_jyotish_language){
            $astro_jyotish_language = stringToArray($request->astro_jyotish_language);
        }
        if($request->astro_types){
            $astro_types = stringToArray($request->astro_types);
        }

        // Create a new Astrologer record
        $astrologer = new Astrologer([
            'astro_id' => $astro_id,
            'astro_name' => $request->input('astro_name'),
            'astro_surname' => $request->input('astro_surname'),
            'astro_father' => $request->input('astro_father'),
            'astro_image' => $profile_image,
            'astro_phone' => $request->input('astro_phone'),
            'astro_whatsapp' => $request->input('astro_whatsapp'),
            'astro_dob' => $request->input('astro_dob'),
            'astro_education' => $request->input('astro_education'),
            'astro_gender' => $request->input('astro_gender'),
            'astro_address' => $request->input('astro_address'),
            'astro_vill_flat' => $request->input('astro_vill_flat'),
            'astro_post' => $request->input('astro_post'),
            'astro_police_station' => $request->input('astro_police_station'),
            'astro_city' => $request->input('astro_city'),
            'astro_state' => $request->input('astro_state'),
            'astro_pincode' => $request->input('astro_pincode'),
            'astro_other_job' => $request->input('astro_other_job'),
            'astro_gst_name' => $request->input('astro_gst_name'),
            'astro_gst' => $request->input('astro_gst'),
            'astro_jyotish_language' => serialize($astro_jyotish_language),
            'astro_types' => serialize($astro_types),
            'astro_slot' => $request->input('astro_slot'),
            'astro_price' => $request->input('astro_price'),
            'astro_aadhar_pic' => $aadhar_image??'',
            'astro_aadhar_back_pic' => $aadhar_back_image??'',
            'astro_about' => $request->input('astro_about'),
        ]);

        $astrologer->save();

        return $responseArray = [
            'status_code' => 200,
            'message' =>'Registration Successfull',
            'response' => $astro_id
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
            $verify = Astrologer::where('astro_phone',$request->mobile)->where('deleted_at',NULL)->first();
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

                        $update = Astrologer::where('astro_phone',$request->mobile)->update(['login_otp'=>$otp]);
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
            $verify = Astrologer::where('astro_phone',$request->mobile)->where('deleted_at',NULL)->first();
            if(!is_null($verify)){
                $verify_otp = Astrologer::where('astro_phone',$request->mobile)->where('login_otp',$request->otp)->where('deleted_at',NULL)->first();

                if(!is_null($verify_otp)){
                    $otp = Str::random(6);
                    $update = Astrologer::where('astro_phone',$request->mobile)->update(['login_otp'=>$otp,'fcm_token'=>$request->fcm_token]);

                    return $responseArray = [
                        'status_code' => 200,
                        'message' => 'OTP Verified Successfully',
                        'response' => $verify_otp->astro_id
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



    // Kathavachak Verification Status
    public function astrologer_verification_status(Request $request){
        $rules = [
            'astro_id' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } else{
                $verify = Astrologer::where('astro_id',$request->astro_id)->where('deleted_at',NULL)->first();
                if($verify){
                    $messages = $verify->verification=='0'?'Verified':($verify->verification=='1'?'Pending':'Rejected');
                    return response()->json([
                        'status_code' => 200,
                        'message' => 'Astrologer is '.$messages,
                        'response' => [
                            'status' => $verify->status,
                            'verification' => $verify->verification
                        ]
                    ]);
                }else{
                    return response()->json([
                        'status_code' => 400,
                        'message' => 'Astrologer Not Found',
                        'response' => ''
                    ]);
                }
            }
    }

    public function processAstroName($name)
    {
        $nameParts = explode('_', $name);
        $nameParts = array_map(function ($part) {
           return str_replace('astro', 'Astrology', $part);
        }, $nameParts);
        $nameParts = array_map('ucwords', $nameParts);
        $processedName = implode(' ', $nameParts);
        return $processedName;
    }


    // Update Profile
    public function updateProfile(Request $request){
        $rules = [
            'astro_id' => 'required|string',
            'astro_name' => 'string',
            'astro_surname' => 'string',
            'astro_father' => 'string',
            'astro_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'astro_phone' => 'numeric|digits:10',
            'astro_whatsapp' => 'numeric|digits:10',
            'astro_dob' => 'date',
            'astro_education' => 'string',
            'astro_gender' => 'in:0,1,2',
            'astro_address' => 'string',
            'astro_vill_flat' => 'string',
            'astro_post' => 'string',
            'astro_police_station' => 'string',
            'astro_city' => 'string',
            'astro_state' => 'string',
            'astro_pincode' => 'numeric|digits:6',
            'astro_other_job' => 'string',
            'astro_gst' => 'string',
            'astro_jyotish_language' => '',
            'astro_types' => '',
            'astro_slot' => 'string',
            'astro_price' => 'numeric',
            'astro_aadhar_pic' => 'image|mimes:jpeg,png,jpg|max:2048',
            'astro_about' => 'string',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }


        $check = Astrologer::where('astro_id',$request->astro_id)->where('verification','0')->where('deleted_at',NULL)->first();
        if($check){
            if($request->astro_phone){
                $check_p = Astrologer::where('astro_id','!=',$request->astro_id)->where('astro_phone',$request->astro_phone)->where('deleted_at',NULL)->first();
                if(!is_null($check_p)){
                    return response()->json([
                        'status_code' => 400,
                        'message' => 'Number is already taken',
                        'response' => ''
                    ]);
                }
            }
            $update = Astrologer::find($check->id);

            if ($request->hasFile('astro_image')) {
                if (file_exists(url('public/astrologer/profile',$check->origional_astro_image))){
                    File::deleteDirectory(url('public/astrologer/profile',$check->origional_astro_image));
                }
                $path = public_path('astrologer/profile');
                $profile_image = $check->astro_id.'_profile.'.$request->file('astro_image')->getClientOriginalExtension();
                $request->file('astro_image')->move($path, $profile_image);
                $update->astro_image = $profile_image;
                $update->save();
                $message = 'Profile Image Updated Successfully';
            }

            if ($request->hasFile('astro_aadhar_pic')) {
                if (file_exists(url('public/astrologer/aadhar',$check->origional_astro_aadhar_pic))){
                    $delete  = File::deleteDirectory(url('public/astrologer/aadhar',$check->origional_astro_aadhar_pic));
                }
                $path = public_path('astrologer/aadhar');
                $aadhar_image = $check->astro_id.'_aadhar.'.$request->file('astro_aadhar_pic')->getClientOriginalExtension();
                $request->file('astro_aadhar_pic')->move($path, $aadhar_image);
                $update->astro_aadhar_pic = $aadhar_image;
                $update->save();
                $message = 'Aadhar Image Updated Successfully';
            }

            foreach ($rules as $field => $rule) {
                if ($request->has($field)) {
                    if ($field !== 'astro_image' && $field !== 'astro_aadhar_pic' && $field !== 'astro_id') {
                        if($field=='astro_jyotish_language' || $field=='astro_types'){
                            $update->$field = serialize(stringToArray($request->$field));
                            $update->save();
                        }else{
                            $update->$field = $request->$field;
                            $update->save();
                        }
                        $message = $this->processAstroName($field).' Updated Successfully.';
                    }
                }
            }
            return response()->json([
                'status_code' =>200,
                'message' => $message,
                'response' => $check->astro_id
            ]);
        }
        return false;
    }



    //Astrologer List
    public function astrologer_list(){
        $check = Astrologer::where('status','0')->where('verification','0')->where('deleted_at',NULL)->get();
        if($check){
            foreach ($check as $key => $value) {
                $value->astro_types = unserialize($value->astro_types);
                $value->astro_jyotish_language = unserialize($value->astro_jyotish_language);


                $one_star =  $value->one_star = AstroRating::where('astro_id',$value->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['0','1'])->count();
                $two_star = $value->two_star = AstroRating::where('astro_id',$value->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['1','2'])->count();
                $three_star = $value->three_star = AstroRating::where('astro_id',$value->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['2','3'])->count();
                $four_star = $value->four_star = AstroRating::where('astro_id',$value->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['3','4'])->count();
                $five_star = $value->five_star = AstroRating::where('astro_id',$value->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['4','5'])->count();

                $sum_rating = AstroRating::where('astro_id',$value->astro_id)->where('status','0')->where('deleted_at',NULL)->sum('star_rating');
                $count_rating = AstroRating::where('astro_id',$value->astro_id)->where('status','0')->where('deleted_at',NULL)->count();

                $average_rating = $count_rating>0?$sum_rating/$count_rating:0;
                $value->average_rating = $average_rating;

                $total_ratings = AstroRating::where('astro_id',$value->astro_id)->where('status','0')->where('deleted_at',NULL)->get();

                foreach ($total_ratings as $key => $total_rating) {
                    $jajmaan = Jajmaan::where('jajmaan_id',$total_rating->rated_by)->first();
                    $total_rating->jajmaan_name = $jajmaan->name.' '.$jajmaan->surname;
                    $total_rating->jajmaan_image = $jajmaan->image;
                }
                $value->total_ratings = $total_ratings;
            }
        }

        return response()->json([
            'status_code' =>200,
            'message' => 'List Found',
            'response' => $check
        ]);
    }



    public function astrologer_profile(Request $request){
        $rules = [
            'astro_id' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
        } else{
            $average_rating = 0;
            $check = Astrologer::where('astro_id',$request->astro_id)->where('deleted_at',NULL)->first();

            $one_star = AstroRating::where('astro_id',$check->astro_id)->where('status','0')->where('deleted_at',NULL)->where('star_rating',1)->count();
            $two_star = AstroRating::where('astro_id',$check->astro_id)->where('status','0')->where('deleted_at',NULL)->where('star_rating',2)->count();
            $three_star = AstroRating::where('astro_id',$check->astro_id)->where('status','0')->where('deleted_at',NULL)->where('star_rating',3)->count();
            $four_star = AstroRating::where('astro_id',$check->astro_id)->where('status','0')->where('deleted_at',NULL)->where('star_rating',4)->count();
            $five_star = AstroRating::where('astro_id',$check->astro_id)->where('status','0')->where('deleted_at',NULL)->where('star_rating',5)->count();

            $sum_rating = AstroRating::where('astro_id',$check->astro_id)->where('status','0')->where('deleted_at',NULL)->sum('star_rating');
            $count_rating = AstroRating::where('astro_id',$check->astro_id)->where('status','0')->where('deleted_at',NULL)->count();

            $average_rating = $count_rating>0?$sum_rating/$count_rating:0;
            $average_rating = round($average_rating,2);

            if($check){
                $data = [
                'id' => $check->id,
                'astro_id' => $check->astro_id,
                'status' => $check->status,
                'verification' => $check->verification,
                'astro_name' => $check->astro_name,
                'astro_surname' => $check->astro_surname,
                'astro_father' => $check->astro_father,
                'astro_image' => $check->astro_image,
                'astro_phone' => $check->astro_phone,
                'astro_whatsapp' => $check->astro_whatsapp,
                'astro_dob' => $check->astro_dob,
                'astro_education' => $check->astro_education,
                'astro_gender' => $check->astro_gender,
                'astro_address' => $check->astro_address,
                'astro_vill_flat' => $check->astro_vill_flat,
                'astro_post' => $check->astro_post,
                'astro_police_station' => $check->astro_police_station,
                'astro_city' => $check->astro_city,
                'astro_state' => $check->astro_state,
                'astro_pincode' => $check->astro_pincode,
                'astro_other_job' => $check->astro_other_job,
                'astro_gst' => $check->astro_gst,
                'astro_jyotish_language' => unserialize($check->astro_jyotish_language),
                'astro_types' => unserialize($check->astro_types),
                'astro_slot' => $check->astro_slot,
                'astro_price' => $check->astro_price,
                'astro_final_price' => $check->astro_final_price,
                'astro_aadhar_pic' => $check->astro_aadhar_pic,
                'astro_about' => $check->astro_about,
                'astro_wallet' => $check->astro_wallet,
                'average_rating' => number_format($average_rating, 1, '.', ''),
            ];
                return response()->json([
                    'status_code' =>200,
                    'message' => 'Astrologer Found',
                    'response' => $data
                ]);
            }else{
                return response()->json([
                    'status_code' =>400,
                    'message' => 'No Astrologer Found',
                    'response' => ''
                ]);
            }
        }
    }



    // Create Astro Rating
    public function create_astro_rating(Request $request){
        $validator = Validator::make($request->all(), [
            'astro_id' => 'required|string',
            'rated_by' => 'required|string',
            'star_rating' => 'required|between:1,5',
            'rating_description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->rated_by)->where('deleted_at',NULL)->first();
        if (is_null($check_jajmaan)) {
            return response()->json(['message' => 'No Jajmaan Found'], 400);
        }

        $check_katha = Astrologer::where('astro_id',$request->astro_id)->where('deleted_at',NULL)->first();
        if (is_null($check_katha)) {
            return response()->json(['message' => 'No Astrologer Found'], 400);
        }

        $data = $request->all();
        $check_previous = AstroRating::where('astro_id',$request->astro_id)->where('rated_by',$request->rated_by)->first();
        if(is_null($check_previous)) {
            $rating_id = 'PUJAR' . rand(11, 99) . date('dmy') . last_id('astro_rating');
        }else{
            $rating_id = $check_previous->rating_id;
        }
        $data['rating_id'] = $rating_id;

        $astroRating = AstroRating::updateOrCreate(['rating_id' => $rating_id], $data);

        return response()->json([
            'status_code' =>200,
            'message' => 'Rating saved successfully',
            'response' => $astroRating
        ]);
    }


    public function astro_total_rating(Request $request){
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

        $one_star = AstroRating::where('astro_id',$request->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['0','1'])->count();
        $two_star = AstroRating::where('astro_id',$request->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['1','2'])->count();
        $three_star = AstroRating::where('astro_id',$request->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['2','3'])->count();
        $four_star = AstroRating::where('astro_id',$request->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['3','4'])->count();
        $five_star = AstroRating::where('astro_id',$request->astro_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['4','5'])->count();

        $sum_rating = AstroRating::where('astro_id',$reqquest->astro_id)->where('status','0')->where('deleted_at',NULL)->sum('star_rating');
        $count_rating = AstroRating::where('astro_id',$reqquest->astro_id)->where('status','0')->where('deleted_at',NULL)->count();

        $average_rating = $count_rating>0?$sum_rating/$count_rating:0;

        $data = [
            'one_star' => $one_star,
            'two_star' => $two_star,
            'three_star' => $three_star,
            'four_star' => $four_star,
            'five_star' => $five_star,
            'average_rating' => $average_rating,
        ];
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Rating Found',
            'response' => $data
        ];

    }

    // Astro Rating List
    public function get_astro_rating_list(Request $request){
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

        $list = AstroRating::where('astro_id',$request->astro_id)->where('status','0')->where('deleted_at',NULL)->get();
        foreach ($list as $key => $value) {
            $check_jajmaan = Jajmaan::where('jajmaan_id',$request->rated_by)->where('deleted_at',NULL)->first();
            if($check_jajmaan){
                $value->name = $check_jajmaan->name.'  '.$check_jajmaan->surname;
                $value->image = $check_jajmaan->image;
            }
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $list
        ];

    }

    public function astro_dashboard(Request $request){
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

        $total_booking = AstrologerBooking::where('astro_id',$request->astro_id)->where('booking_status','0')->whereNULL('deleted_at')->count();
        $total_money = AstrologerBooking::where('astro_id',$request->astro_id)->where('booking_status','1')->whereNULL('deleted_at')->sum('vendor_income');
        $total_completed = AstrologerBooking::where('astro_id',$request->astro_id)->where('booking_status','1')->whereNULL('deleted_at')->count();

        return response()->json([
            'status_code' => 200,
            'message' => 'Data Found',
            'response' => [
                'astrologer' => $check_astro->astro_name.' '.$check_astro->astro_surname,
                'total_astrology' => $total_booking,
                'total_money' => $total_money,
                'total_completed' => $total_completed,
                'astro_status' => $check_astro->status,
                'verification' => $check_astro->verification,
            ]
        ]);
    }


    public function save_bank_details(Request $request){
        $rules = [
            'astro_id' => 'required',
            'ac_holder' => 'required',
            'ac_number' => 'required|numeric|unique:kathavachak_bank_details,kthv_ac_num',
            'ifsc' => 'required',
            'type' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $verify = Astrologer::where('astro_id',$request->astro_id)->where('deleted_at',NULL)->first();

            if(!is_null($verify)){
                $check = AstroBankDetail::where('astro_id',$request->astro_id)->whereNull('deleted_at')->first();
                if($check){
                    $bank_id = $check->astro_bank_id;
                }else{
                    $bank_id = 'PASTB' . rand(11, 99) . date('dmy') . last_id('astro_bank_details');
                }

                $save = AstroBankDetail::UpdateorCreate([
                    'astro_id' => $request->astro_id,
                ],[
                    'astro_bank_id' => $bank_id,
                    'astro_type' => $request->type,
                    'astro_ac_holder' => $request->ac_holder,
                    'astro_ac_num' => $request->ac_number,
                    'astro_ifsc' => $request->ifsc,
                ]);

                return response()->json([
                    'status_code' => 200,
                    'message' => 'Bank Detils Saved Successfully',
                    'response' => $save,
                ]);
            }
            return response()->json([
                'status_code' => 401,
                'message' => 'Invalid Astrologer ID',
                'response' => '',
            ]);
        }
    }




    // Astro on/off
    public function astro_on_off(Request $request) {
        $rules = [
            'astro_id' => 'required',
            'status' => 'required|in:0,1' //0-> On,  1->Off
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
        } else{
            $verify = Astrologer::where('astro_id', $request->astro_id)->where('verification', '0')->whereNull('deleted_at')->first();

            if($verify){
                $update = Astrologer::where('astro_id',$request->astro_id)->where('verification','0')->where('deleted_at',NULL)->update(['status'=>$request->status]);
                return response()->json([
                    'status_code' => 200,
                    'message' => 'Astrologer Toggle Switch to ' . ($request->status == 0 ? 'on' : 'off'),
                    'response' => $request->status,
                ]);
            }
            return response()->json([
                'status_code' => 401,
                'message' => 'Astrologer Not Found',
                'response' => ''
            ]);
        }
    }

      // Astro on/off
      public function astro_wallet_money(Request $request) {
        $rules = [
            'astro_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
        } else{
            $verify = Astrologer::where('astro_id', $request->astro_id)->whereNull('deleted_at')->first();

            return response()->json([
                'status_code' => 200,
                'message' => 'Wallet Found',
                'response' => [
                    'wallet' => $verify->astro_wallet
                ]
            ]);
        }
    }

}
