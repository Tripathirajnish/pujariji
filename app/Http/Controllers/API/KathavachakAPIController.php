<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Kathavachak;
use App\Models\KathavachkLeave;
use App\Models\KathavachakBankDetail;
use App\Models\KathavachakBooking;
use App\Models\KathavachkRating;
use Validator;
use Str;
use File;
use DB;

class KathavachakAPIController extends Controller
{
    // Save Kathavachak
    public function store(Request $request)
    {
        
        $rules = array(
            'kthavchk_id' => '',
            'kthavchk_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kthavchk_name' => 'required',
            'kthavchk_surname' => 'required',
            'kthavchk_father' => 'required',
            // 'kthavchk_phone' => 'required|digits:10|numeric|unique:pujari_kathavachaks,kthavchk_phone',
            'kthavchk_phone' => [
                    'required',
                    'numeric',
                    'digits:10',
                    Rule::unique('pujari_kathavachaks', 'kthavchk_phone')->whereNull('deleted_at'),
            ],
            
            'kthavchk_whatsapp' => 'required|digits:10|numeric|unique:pujari_kathavachaks,kthavchk_whatsapp',
            'kthavchk_dob' => 'required|date|before:now',
            'kthavchk_education' => 'required',
            'kthavchk_gender' => 'required|in:0,1,2',
            'kthavchk_address' => 'required',
            'kthavchk_vill_flat' => 'required',
            'kthavchk_post' => '',
            'kthavchk_polic_station' => 'required',
            'kthavchk_city' => 'required',
            'kthavchk_state' => 'required',
            'kthavchk_pincode' => 'required|numeric|digits:6',
            'kthavchk_otherjob' => 'required',
            'kthavchk_gst_name' => '',
            'kthavchk_gstno' => '',
            'kthavchk_language' => 'required',
            'kthavchk_katha' => 'required',
            'kthavchk_youtube' => '',
            'kthavchk_price' => 'required|numeric',
            'kthavchk_aadharpic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kthavchk_aadharpic_back' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kthavchk_about' => 'required'
        );
        
        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $data = $request->all();

        $data['kthavchk_language'] = serialize(stringToArray($request->kthavchk_language));
        $data['kthavchk_katha'] = serialize(stringToArray($request->kthavchk_katha));

        $kthavchk_id = 'PKATV' . date('dmy') . last_id('pujari_kathavachaks');

        // Handle profile image upload
        if ($request->hasFile('kthavchk_image')) {
            $path = public_path('kathavachak/profile');
            $profile_image = $kthavchk_id.'_profile.'.$request->file('kthavchk_image')->getClientOriginalExtension();
            $imagePath = $request->file('kthavchk_image')->move($path, $profile_image);
            $data['kthavchk_image'] = $profile_image??'';
        }

        // Handle Aadhar image upload
        if ($request->hasFile('kthavchk_aadharpic')) {
            $path = public_path('kathavachak/documents');
            $aadhar_image = $kthavchk_id.'_aadhar.'.$request->file('kthavchk_aadharpic')->getClientOriginalExtension();
            $aadharImagePath = $request->file('kthavchk_aadharpic')->move($path, $aadhar_image);
            $data['kthavchk_aadharpic'] = $aadhar_image??'';
        }
        // Handle Aadhar image upload
        if ($request->hasFile('kthavchk_aadharpic_back')) {
            $path = public_path('kathavachak/documents');
            $aadhar_image_back = $kthavchk_id.'_aadhar_back.'.$request->file('kthavchk_aadharpic_back')->getClientOriginalExtension();
            $aadharbackImagePath = $request->file('kthavchk_aadharpic_back')->move($path, $aadhar_image_back);
            $data['kthavchk_aadharpic_back'] = $aadhar_image_back??'';
        }

        $data['kthavchk_id'] = $kthavchk_id;
        $data['date'] = date('Y-m-d');

        $kathavachak = Kathavachak::create($data);

        return response()->json([
            'status_code' => 200,
            'message' => 'Success',
            'id' => $kthavchk_id
        ]);
    }


    public function send_otp(Request $request){
        $rules = array(
            'mobile' => 'required|numeric|digits:10',
        );

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()], 401);
        }else{
            $verify = Kathavachak::where('kthavchk_phone',$request->mobile)->where('deleted_at',NULL)->first();
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
                        $otp = generate_otp(4);;
                        // Send SMS API Here
                        $message = "Dear Customer, the OTP for registration to PUJARI JI is ".$otp.". Do not share with anyone VALID 5 MINT . -PUJARI JI";
                        sms($request->mobile, $message);

                        $update = Kathavachak::where('kthavchk_phone',$request->mobile)->update(['login_otp'=>$otp]);
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
            $verify = Kathavachak::where('kthavchk_phone',$request->mobile)->where('deleted_at',NULL)->first();
            if(!is_null($verify)){
                $verify_otp = Kathavachak::where('kthavchk_phone',$request->mobile)->where('login_otp',$request->otp)->where('deleted_at',NULL)->first();

                if(!is_null($verify_otp)){
                    $otp = Str::random(6);
                    $update = Kathavachak::where('kthavchk_phone',$request->mobile)->update(['login_otp'=>$otp,'fcm_token'=>$request->fcm_token]);

                    return $responseArray = [
                        'status_code' => 200,
                        'message' => 'OTP Verified Successfully',
                        'response' => $verify_otp->kthavchk_id
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


 // Save Kathavachak
    public function kathavachak_leave(Request $request)
    {
        $rules = [
            'kathavachak_id' => 'required',
            'date' => 'required|date|after_or_equal:today',
        ];

        $validator = Validator::make($request->all(), $rules);

        $check_prevoius = KathavachkLeave::where('kthavchk_id',$request->kathavachak_id)->where('leave_date',$request->date)->where('leave_status','!=','2')->first();
        if(!is_null($check_prevoius)){
            return response()->json([
                'status_code' => 200,
                'message' => 'Success',
                'response' => 'Leave Already Saved',
            ]);
        }
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $leave_id = 'PUJLV' . rand(11, 99) . date('dmy') . last_id('kathavachak_leaves');

            $save = KathavachkLeave::create([
                'leave_id' => $leave_id,
                'kthavchk_id' => $request->kathavachak_id,
                'leave_date' => $request->date,
            ]);

            return response()->json([
                'status_code' => 200,
                'message' => 'Leave Added Successfully',
                'response' => $save,
            ]);
        }
    }



 // Save Kathavachak
 public function kathavachak_bank(Request $request)
    {
        $rules = [
            'kathavachak_id' => 'required',
            'ac_holder' => 'required',
            'ac_number' => 'required|numeric|unique:kathavachak_bank_details,kthv_ac_num',
            'ifsc' => 'required',
            'type' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $verify = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('deleted_at',NULL)->first();
            if(!is_null($verify)){
                $check = KathavachakBankDetail::where('kthv_kthv_id',$request->kathavachak_id)->whereNull('deleted_at')->first();
                if($check){
                    $bank_id = $check->kthv_bank_id;
                }else{
                    $bank_id = 'PUJBNK' . rand(11, 99) . date('dmy') . last_id('kathavachak_bank_details');
                }

                $save = KathavachakBankDetail::UpdateorCreate([
                    'kthv_kthv_id' => $request->kathavachak_id,
                ],[
                    'kthv_bank_id' => $bank_id,
                    'kthv_type' => $request->type,
                    'kthv_ac_holder' => $request->ac_holder,
                    'kthv_ac_num' => $request->ac_number,
                    'kthv_ifsc' => $request->ifsc,
                ]);

                return response()->json([
                    'status_code' => 200,
                    'message' => 'Success',
                    'response' => $save,
                ]);
            }
            return response()->json([
                'status_code' => 401,
                'message' => 'Invalid Kathavachak ID',
                'response' => '',
            ]);
        }
    }


     // Get Patient Profile
     public function kathavachak_profile(Request $request){
        $rules = array(
            'kthvchk_id' => 'required|string'
        );

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()], 401);
        }else{
            $verify = Kathavachak::where('kthavchk_id',$request->kthvchk_id)->where('deleted_at',NULL)->first();

            $one_star = KathavachkRating::where('kthvchk_id',$request->kthvchk_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['0','1'])->count();
            $two_star = KathavachkRating::where('kthvchk_id',$request->kthvchk_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['1','2'])->count();
            $three_star = KathavachkRating::where('kthvchk_id',$request->kthvchk_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['2','3'])->count();
            $four_star = KathavachkRating::where('kthvchk_id',$request->kthvchk_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['3','4'])->count();
            $five_star = KathavachkRating::where('kthvchk_id',$request->kthvchk_id)->where('status','0')->where('deleted_at',NULL)->whereBetween('star_rating',['4','5'])->count();

            $sum_rating = KathavachkRating::where('kthvchk_id',$request->kthvchk_id)->where('status','0')->where('deleted_at',NULL)->sum('star_rating');
            $count_rating = KathavachkRating::where('kthvchk_id',$request->kthvchk_id)->where('status','0')->where('deleted_at',NULL)->count();

            $average_rating = $count_rating>0?$sum_rating/$count_rating:0;

            if(!is_null($verify)){
                if($verify->profile_pic!=null){
                    $profile = url('kathavachak/profile').'/'.$verify->kthavchk_image;
                }else{
                    $profile = '';
                }
                $verify->kthavchk_language = unserialize($verify->kthavchk_language);
                $verify->kthavchk_katha = unserialize($verify->kthavchk_katha);
                $verify->average_rating = number_format($average_rating, 1, '.', '');
                return $responseArray = [
                    'status_code' => 200,
                    'message' => 'Profile Found',
                    'response' => $verify
                ];

            }else{
                return $responseArray = [
                    'status_code' => 401,
                    'message' => 'Profile Not Found',
                    'response' => ''
                ];
            }
        }
    }


    public function processKthavchkName($name)
    {
        $nameParts = explode('_', $name);
        $nameParts = array_map(function ($part) {
           return str_replace('Kthavchk', 'Kathavachak', $part);
        }, $nameParts);
        $nameParts = array_map('ucwords', $nameParts);
        $processedName = implode(' ', $nameParts);
        return $processedName;
    }


    // Update Profile
    public function updateProfile(Request $request){
        $rules = [
            'kthavchk_id' => 'required',
            'kthavchk_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kthavchk_name' => '',
            'kthavchk_surname' => '',
            'kthavchk_father' => '',
            'kthavchk_phone' => 'digits:10|numeric',
            'kthavchk_whatsapp' => 'digits:10|numeric',
            'kthavchk_dob' => 'date',
            'kthavchk_education' => '',
            'kthavchk_gender' => 'in:0,1,2',
            'kthavchk_address' => '',
            'kthavchk_vill_flat' => '',
            'kthavchk_polic_station' => '',
            'kthavchk_city' => '',
            'kthavchk_state' => '',
            'kthavchk_pincode' => 'numeric|digits:6',
            'kthavchk_otherjob' => '',
            'kthavchk_post' => '',
            'kthavchk_gst_name' => '',
            'kthavchk_gstno' => '',
            'kthavchk_language' => '',
            'kthavchk_katha' => '',
            'kthavchk_youtube' => '',
            'kthavchk_price' => 'numeric',
            'kthavchk_aadharpic' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kthavchk_about' => ''
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check = Kathavachak::where('kthavchk_id',$request->kthavchk_id)->where('verification','0')->where('deleted_at',NULL)->first();
        if($check){

            $update = Kathavachak::find($check->id);

            if ($request->hasFile('kthavchk_image')) {
                if (file_exists(url('public/kathavachak/profile',$check->origional_kthavchk_image))){
                    File::deleteDirectory(url('public/kathavachak/profile',$check->origional_kthavchk_image));
                }
                $path = public_path('kathavachak/profile');
                $profile_image = $check->kthavchk_id.'_profile.'.$request->file('kthavchk_image')->getClientOriginalExtension();
                $request->file('kthavchk_image')->move($path, $profile_image);
                $update->kthavchk_image = $profile_image;
                $update->save();
                $message = 'Profile Image Updated Successfully';
            }

            if ($request->hasFile('kthavchk_aadharpic')) {
                if (file_exists(url('public/kathavachak/documents',$check->origional_kthavchk_aadhar_pic))){
                    $delete  = File::deleteDirectory(url('public/kathavachak/documents',$check->origional_kthavchk_aadhar_pic));
                }
                $path = public_path('kathavachak/documents');
                $aadhar_image = $check->kthavchk_id.'_profile.'.$request->file('kthavchk_aadharpic')->getClientOriginalExtension();
                $request->file('kthavchk_aadharpic')->move($path, $aadhar_image);
                $update->kthavchk_aadharpic = $aadhar_image;
                $update->save();
                $message = 'Aadhar Image Updated Successfully';
            }

            foreach ($rules as $field => $rule) {
                if ($request->has($field)) {
                    if ($field !== 'kthavchk_image' && $field !== 'kthavchk_aadharpic' && $field !== 'kthavchk_id') {
                        if($field=='kthavchk_language' || $field=='kthavchk_katha'){
                            $update->$field = serialize(stringToArray($request->$field));
                            $update->save();
                        }else{
                            $update->$field = $request->$field;
                            $update->save();
                        }
                        $message = $this->processKthavchkName($field).' Updated Successfully.';
                    }
                }
            }
            return response()->json([
                'status_code' =>200,
                'message' => $message,
                'response' => $check->kthavchk_id
            ]);
        }
        return false;
    }


    // Total Cash Collection
    public function total_cash_collection(Request $request){
        {
            $rules = [
                'kathavachak_id' => 'required'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } else {
                $verify = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('deleted_at',NULL)->first();
                if(!is_null($verify)){
                    $total_collections = KathavachakBooking::where('kathavachak_id',$verify->kthavchk_id)->where('booking_status','1')->sum('total_price');
                    $advance = KathavachakBooking::where('kathavachak_id',$verify->kthavchk_id)->where('booking_status','1')->where('balance','0')->sum('total_price');
                    $balance = KathavachakBooking::where('kathavachak_id',$verify->kthavchk_id)->where('booking_status','1')->where('balance','>','0')->sum('total_price');
                return response()->json([
                    'status_code' => 200,
                    'message' => 'Total Collection',
                    'response' =>[
                        'online'=> round($advance*0.7,2),
                        'offline'=> round($balance*0.7,2),
                        'total_collections'=> $total_collections,
                    ]
                ]);
                }
            }
        }
    }


    // Kathavachak Leave Dates
    public function kathavachak_leave_dates(Request $request){
        $rules = [
            'kathavachak_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } else{
                $dates =[];
                $verify = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('status','0')->where('verification','0')->where('deleted_at',NULL)->first();
                if($verify){
                    $leave_date = KathavachkLeave::where('kthavchk_id',$verify->kthavchk_id)->where('leave_date','>=',date('Y-m-d'))->where('leave_status','!=','2')->get('leave_date');
                    foreach ($leave_date as $key => $value) {
                        $dates[] = $value->leave_date;
                    }
                    return response()->json([
                        'status_code' => 200,
                        'message' => 'Kathavachak Leave Dates',
                        'response' => $dates
                    ]);
                }else{
                    return response()->json([
                        'status_code' => 400,
                        'message' => 'Kathavachak Not Found',
                        'response' => ''
                    ]);
                }
            }
    }


    // Kathavachak Verification Status
    public function kathvachak_verification_status(Request $request){
        $rules = [
            'kathavachak_id' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } else{
                $verify = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('deleted_at',NULL)->first();
                if($verify){
                    $messages = $verify->verification=='0'?'Verified':($verify->verification=='1'?'Pending':'Rejected');
                    return response()->json([
                        'status_code' => 200,
                        'message' => 'Kathavachak is '.$messages,
                        'response' => [
                            'status' => $verify->status,
                            'verification' => $verify->verification
                        ]
                    ]);
                }else{
                    return response()->json([
                        'status_code' => 400,
                        'message' => 'Kathavachak Not Found',
                        'response' => ''
                    ]);
                }
            }
    }


    // Kathavachak Dashboard
    public function kathavachak_dashboard(Request $request) {
        $rules = [
            'kathavachak_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else{
            $verify = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('deleted_at',NULL)->first();
            if($verify){
                $total_katha = KathavachakBooking::where('kathavachak_id',$request->kathavachak_id)->where('booking_status','0')->where('deleted_at',NULL)->count();

                $total_money = KathavachakBooking::where('kathavachak_id',$request->kathavachak_id)->where('booking_status','1')->where('deleted_at',NULL)->sum('total_price');

                $completed_katha = KathavachakBooking::where('kathavachak_id',$request->kathavachak_id)->where('booking_status','1')->where('deleted_at',NULL)->count();

                return response()->json([
                    'status_code' => 200,
                    'message' => 'Kathavachak Dashboard Data',
                    'response' => [
                        'verification' => $verify,
                        'total_katha' => $total_katha,
                        'total_money' => $total_money,
                        'completed_katha' => $completed_katha
                    ]
                ]);
            }else{
                return response()->json([
                    'status_code' => 400,
                    'message' => 'Kathavachak Not Found',
                    'response' => []
                ]);
            }
        }
    }




    // Kathavachak Dashboard
    public function kathavachak_earning_history(Request $request) {
        $rules = [
            'kathavachak_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
        } else{

            $data= [];
            $total_katha = KathavachakBooking::where('kathavachak_id',$request->kathavachak_id)->where('booking_status','1')->where('deleted_at',NULL)->get();

            foreach ($total_katha as $key => $value) {
                $data[] = [
                    'katha_id' => $value->booking_id,
                    'jajman_id' => $value->jajman_id,
                    'kathavachak_id' => $value->kathavachak_id,
                    'booking_date_from' => $value->booking_date_from,
                    'booking_date_to' => $value->booking_date_to,
                    'balance' => $value->balance
                ];
            }

            return response()->json([
                'status_code' => 200,
                'message' => 'Kathavachak Earnings',
                'response' => $data
            ]);
        }
    }


    // Kathavachak on/off
    public function kathavachak_on_off(Request $request) {
        $rules = [
            'kathavachak_id' => 'required',
            'status' => 'required|in:0,1' //0-> On,  1->Off
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
        } else{
            $verify = Kathavachak::where('kthavchk_id', $request->kathavachak_id)->where('verification', '0')->whereNull('deleted_at')->first();

            if($verify){
                $update = Kathavachak::where('kthavchk_id',$request->kathavachak_id)->where('verification','0')->where('deleted_at',NULL)->update(['status'=>$request->status]);
                return response()->json([
                    'status_code' => 200,
                    'message' => 'Kathavachak Toggle Switch to ' . ($request->status == 0 ? 'on' : 'off'),
                    'response' => $request->status,
                ]);
            }
            return response()->json([
                'status_code' => 401,
                'message' => 'Kathavachak Not Found',
                'response' => ''
            ]);
        }
    }




}
