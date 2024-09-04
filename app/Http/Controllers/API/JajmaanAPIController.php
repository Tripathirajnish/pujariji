<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Jajmaan;
use App\Models\JajmaanAddress;
use App\Models\KathavachkLeave;
use App\Models\KathavachkRating;
use App\Models\Kathavachak;
use Str;

class JajmaanAPIController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => '',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'horoscope' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => [
                'required',
                'numeric',
                'digits:10',
                Rule::unique('jajmaans', 'phone')->ignore($request->jajmaan_id)->whereNull('deleted_at'),
            ],
            'gender' => 'required|in:0,1,2',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $data = $request->all();

        $jajmaanData['date'] = date('Y-m-d');
        $jajmaan_id = 'PUJA' . rand(11, 99) . date('dmy') . last_id('jajmaans');

        $data['image'] = '';
        // Handle profile image upload
        if ($request->hasFile('image')) {
            $path = public_path('user/profile');
            $profile_image = $jajmaan_id.'_profile.'.$request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->move($path, $profile_image);
            $data['image'] = $profile_image;
        }

        $data['jajmaan_id'] = $jajmaan_id;
        $data['date'] = date('Y-m-d');

        $jajmaan = Jajmaan::create($data);

        return response()->json([
            'status_code' => 200,
            'message' => 'Success',
            'id' => $jajmaan_id
        ]);
    }

    // Send OTP
    public function send_otp(Request $request)
    {
        $rules = [
            'mobile' => 'required|numeric|digits:10',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $verify = Jajmaan::where('phone', $request->mobile)
                ->where('deleted_at', null)
                ->first();
            if (!is_null($verify)) {
                if($verify->status =='1'){
                    return $responseArray = [
                        'status_code' => 401,
                        'message' => 'Your Profile has been blocked',
                        'response' => '',
                    ];
                }
                    $mobile = $verify->mobile;
                    $otp = generate_otp(4);
                    // Send SMS API Here
                    $message = "Dear Customer, the OTP for registration to PUJARI JI is ".$otp.". Do not share with anyone VALID 5 MINT . -PUJARI JI";
                    sms($request->mobile, $message);

                    $update = Jajmaan::where('phone', $request->mobile)->update(['loginotp' => $otp, 'login_date' => date('Y-m-d')]);
                    return $responseArray = [
                        'status_code' => 200,
                        'message' => 'OTP Send Successfully',
                        'response' => $request->mobile,
                    ];
            } else {
                return $responseArray = [
                    'status_code' => 401,
                    'message' => 'Number Not Registered',
                    'response' => '',
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
                $verify = Jajmaan::where('phone',$request->mobile)->where('deleted_at',NULL)->first();
                if(!is_null($verify)){
                    $verify_otp = Jajmaan::where('phone',$request->mobile)->where('loginotp',$request->otp)->where('deleted_at',NULL)->first();

                    if(!is_null($verify_otp)){
                        $otp = Str::random(6);
                        $update = Jajmaan::where('phone',$request->mobile)->update(['loginotp'=>$otp,'fcm_token'=>$request->fcm_token]);

                        $data = [
                                'jajmaan_id' => $verify_otp->jajmaan_id,
                                'name' => $verify_otp->name,
                                'surname' => $verify_otp->surname,
                                'phone' => $verify_otp->phone,
                                'gender' => $verify_otp->gender,
                                'verification_status' => $verify_otp->status
                            ];
                        return $responseArray = [
                            'status_code' => 200,
                            'message' => 'OTP Verified Successfully',
                            'response' => $data
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



    // Get Jajmaan Profile
    public function get_profile(Request $request){
        $rules = array(
            'jajmaan_id' => 'required|string'
        );

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()], 401);
        }else{
            $verify = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('deleted_at',NULL)->first();
            if(!is_null($verify)){
                return $responseArray = [
                    'status_code' => 200,
                    'message' => 'Jajmaan Found',
                    'response' => $verify
                ];

            }else{
                return $responseArray = [
                    'status_code' => 401,
                    'message' => 'Jajmaan Not Found',
                    'response' => ''
                ];
            }
        }
    }

    public function store_address(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'adrs_id' => '',
            'adrs_jajman_id' => 'required|string',
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if (!is_null($request->adrs_id)) {
            $check = JajmaanAddress::where('adrs_id', $request->adrs_id)->first();
            $adrs_id = $check->adrs_id;
         } else {
            $adrs_id = 'PUJUAD' . rand(11, 99) . date('dmy') . last_id('jajmaan_addresses');
        }

        $jajmaanAddressData = $request->all();

        // Use updateOrCreate to create or update based on 'adrs_id'
        JajmaanAddress::updateOrCreate(
            ['adrs_id' => $adrs_id],
            $jajmaanAddressData
        );

        // return response()->json(['message' => 'Saved successfully'], 200);
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Address Saved Successfully',
            'response' => $jajmaanAddressData
        ];
    }


    public function get_address(Request $request){
        $validator = Validator::make($request->all(), [
            'jajman_id' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $list = JajmaanAddress::where('adrs_jajman_id',$request->jajman_id)->where('deleted_at',NULL)->latest()->get();
        $message = count($list)>0?'Jajmaan Address Found':'No Address Found';
        $status_code = count($list)>0?200:400;
        if($list){
            return $responseArray = [
                'status_code' => $status_code,
                'message' => $message,
                'response' => $list
            ];
        }
    }



    // Delete Address
    public function delete_jajmaan_address(Request $request) {
        $validator = Validator::make($request->all(), [
            'jajman_id' => 'required|string',
            'address_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $delete = 0;

        $list = JajmaanAddress::where('adrs_jajman_id',$request->jajman_id)->where('adrs_id',$request->address_id)->first();
        if($list){
            $delete = JajmaanAddress::where('adrs_jajman_id',$request->jajman_id)->where('adrs_id',$request->address_id)->delete();
        }
        return $responseArray = [
                'status_code' => 200,
                'message' => 'Deleted Successfully',
                'response' => $delete
            ];
    }



    public function kathavachak_list(){
        $list = Kathavachak::where('status','0')->where('verification','0')->where('deleted_at',NULL)->get();
        $date = date('Y-m-d');
        $data = [];
        $leave_dates = [];
        foreach ($list as $key => $value) {
            $check_leave = KathavachkLeave::where('kthavchk_id',$value->kthavchk_id)->where('leave_date',$date)->where('leave_status','!=','2')->first();
            if(is_null($check_leave)){
                $ratings = KathavachkRating::where('kthvchk_id', $value->kthavchk_id)
                    ->where('status', '0')
                    ->where('deleted_at', NULL)
                    ->select('star_rating', \DB::raw('COUNT(*) as count'))
                    ->groupBy('star_rating')
                    ->pluck('count', 'star_rating');

                // Initialize counts for all star levels
                $starCounts = array_fill(0, 5, 0);

                // Update counts with the retrieved values
                foreach ($ratings as $starRating => $count) {
                    $starCounts[$starRating - 1] = $count;
                }

                // Extract individual counts
                [$one_star, $two_star, $three_star, $four_star, $five_star] = $starCounts;

                $sum_rating = KathavachkRating::where('kthvchk_id',$value->kthavchk_id)->where('status','0')->where('deleted_at',NULL)->sum('star_rating');
                $count_rating = KathavachkRating::where('kthvchk_id',$value->kthavchk_id)->where('status','0')->where('deleted_at',NULL)->count();

                $average_rating = $count_rating>0?$sum_rating/$count_rating:0;

                $ratings = KathavachkRating::where('kthvchk_id',$value->kthavchk_id)->where('status','0')->where('deleted_at',NULL)->select('rating_id','kthvchk_id','rated_by','star_rating','rating_description','status','created_at')->get();

                foreach ($ratings as $key => $val) {
                    $check_jajmaan = Jajmaan::where('jajmaan_id',$val->rated_by)->where('deleted_at',NULL)->first();
                    if($check_jajmaan){
                        $val->name = $check_jajmaan->name.'  '.$check_jajmaan->surname;
                        $val->image = $check_jajmaan->image;
                    }
                }

                $leave_date = KathavachkLeave::where('kthavchk_id',$value->kthavchk_id)->where('leave_date','>=',date('Y-m-d'))->where('leave_status','!=','2')->get('leave_date');
                foreach ($leave_date as $key => $ld) {
                    $leave_dates[] = $ld->leave_date;
                }

                // $value->kthavchk_language = json_decode($value->kthavchk_language, true);
                // $value->kthavchk_katha = json_decode($value->kthavchk_katha, true);
                    $data[] = [
                        'kthavchk_id' => $value->kthavchk_id,
                        'kthavchk_image' => $value->kthavchk_image,
                        'kthavchk_name' => $value->kthavchk_name,
                        'kthavchk_surname' => $value->kthavchk_surname,
                        'kthavchk_phone' => $value->kthavchk_phone,
                        'kthavchk_whatsapp' => $value->kthavchk_whatsapp,
                        'kthavchk_dob' => $value->kthavchk_dob,
                        'kthavchk_education' => $value->kthavchk_education,
                        'kthavchk_gender' => $value->kthavchk_gender,
                        'kthavchk_language' => unserialize($value->kthavchk_language)??'',
                        'kthavchk_katha' => unserialize($value->kthavchk_katha)??'',
                        'kthavchk_youtube' => $value->kthavchk_youtube,
                        'kthavchk_price' => $value->kthavchk_price,
                        'kthavchk_about' => $value->kthavchk_about,
                        'status' => $value->status,
                        'one_star' => $one_star??0,
                        'two_star' => $two_star??0,
                        'three_star' => $three_star??0,
                        'four_star' => $four_star??0,
                        'five_star' => $five_star??0,
                        'average_rating' => round($average_rating,2)??0,
                        'jajmaan_ratings' => $ratings,
                        'leave_dates' => $leave_dates
                    ];
            }
        }
        return response()->json([
            'status_code' =>200,
            'message' =>'Success',
            'response' => $data
        ]);
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

    public function update_jajmaan_pofile(Request $request){
        $rules = [
            'jajmaan_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => '',
            'surname' => '',
            'horoscope' => '',
            'address' => 'string|max:255',
            'phone' => 'digits:10|numeric',
            'state' => '',
            'city' => '',
            'gender' => 'in:0,1,2'
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('deleted_at',NULL)->first();
        if($check){
            $message = '';
            $update = Jajmaan::find($check->id);

            if ($request->hasFile('image')) {
                if (file_exists(url('public/user/profile',$check->origional_image))){
                    File::deleteDirectory(url('public/user/profile',$check->origional_image));
                }
                $path = public_path('user/profile');
                $profile_image = $check->jajmaan_id.'_profile.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->move($path, $profile_image);
                $update->image = $profile_image;
                $update->save();
                $message = 'Profile Image Updated Successfully';
            }

            foreach ($rules as $field => $rule) {
                if ($request->has($field)) {
                    if ($field !== 'image' && $field !== 'jajmaan_id') {
                        $update->$field = $request->input($field);
                        $update->save();
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















}
