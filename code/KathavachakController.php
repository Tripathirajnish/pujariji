<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use \Illuminate\Notifications\Notifiable;
use App\Services\FCMService;
use App\Models\Kathavachak;
use App\Models\KathavachkLeave;
use App\Models\KathavachakBankDetail;
use App\Models\KathavachakBooking;
use App\Models\KathavachkRating;
use Validator;
use Str;
use File;

class KathavachakController extends Controller
{
    public function index(){
        $kathavachak = Kathavachak::whereNull('deleted_at')->where('verification','0')->latest()->get();
        return view('admin.kathavachak.kathavachak',compact('kathavachak'));
    }

    // Kathavachak Stauts on off
    public function update_kathavachak(Request $request){
        $kathavachak = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$request->data)->first();
        $status = '1';
        if($kathavachak){
            $status = $kathavachak->status=='0'?'1':'0';
            $update = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function get_kathavachak_details(Request $request){
        if($request->data){
            $kathavachak = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$request->data)->first();
            if($kathavachak){
                return $kathavachak;
            }
        }
        return false;
    }



    public function pending_kathavachak(){
        $kathavachak = Kathavachak::whereNull('deleted_at')->where('verification','1')->latest()->get();
        return view('admin.kathavachak.pending_request',compact('kathavachak'));
    }



    public function rejected_kathavachak(){
        $kathavachak = Kathavachak::whereNull('deleted_at')->where('verification','2')->latest()->get();
        return view('admin.kathavachak.rejected_list',compact('kathavachak'));
    }


    // Kathavachak Verify
    public function verify_kathavachak(Request $request){
        $kathavachak = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$request->data)->first();
        if($kathavachak){
            $fcm_token = $kathavachak->fcm_token;
            $update = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$request->data)->update(['verification'=>'0']);
            $send = FCMService::send(
                $fcm_token,
                [
                    'title' =>'Profile Verified',
                    'body' => $kathavachak->kthavchk_name.', Your profile has been verified successfully, Now you can login with your credentials!'
                ]
            );
        }
        return 1;
    }


    // Kathavachak Verify
    public function reject_kathavachak(Request $request){
        $kathavachak = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$request->data)->first();
        if($kathavachak){
            $fcm_token = $kathavachak->fcm_token;
            $update = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$request->data)->update(['verification'=>'2']);
            $send = FCMService::send(
                $fcm_token,
                [
                    'title' =>'Profile Rejected',
                    'body' => $kathavachak->kthavchk_name.', Your profile could not be verified, Please try later or contact to admin!'
                ]
            );
        }
        return 1;
    }



    public function kathavachak_filter(Request $request){
        $state = '';
        $city = '';
        $status = '';
        $filter = '';
        $kathavachak = Kathavachak::whereNULL('deleted_at');
        if($request->state && !is_null($request->state)){
            $state = $request->state;
            $kathavachak = $kathavachak->where('kthavchk_state',$request->state);
        }
        if($request->city && !is_null($request->city)){
            $city = $request->city;
            $kathavachak = $kathavachak->where('kthavchk_city',$request->city);
        }
        if($request->status && !is_null($request->status)){
            $filter = base64_decode($request->status);
            $kathavachak = $kathavachak->where('verification',base64_decode($request->status));
        }
        $kathavachak = $kathavachak->latest()->get();

        return view('admin.kathavachak.kathavachak',compact('kathavachak','filter','city','state'));
    }


    public function kathavachak_profile($id){
        $id = base64_decode($id);
        $data = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$id)->first();
        $total_booking = KathavachakBooking::where('kathavachak_id',$id)->whereNULL('deleted_at')->count();
        $pending_booking = KathavachakBooking::where('kathavachak_id',$id)->whereNULL('deleted_at')->where('booking_status','0')->count();
        $completed_booking = KathavachakBooking::where('kathavachak_id',$id)->whereNULL('deleted_at')->where('booking_status','1')->count();
        $cancelled_booking = KathavachakBooking::where('kathavachak_id',$id)->whereNULL('deleted_at')->where('booking_status','2')->count();
        $total_earn = round((KathavachakBooking::where('kathavachak_id',$id)->whereNULL('deleted_at')->sum('total_price'))*0.7,2);
        $cash = round((KathavachakBooking::where('kathavachak_id',$id)->where('booking_status','1')->whereNULL('deleted_at')->where('balance','>','0')->sum('total_price'))*0.7,2);
        $online = round((KathavachakBooking::where('kathavachak_id',$id)->whereNULL('deleted_at')->where('balance','0')->sum('total_price'))*0.7,2);
        return view('admin.kathavachak.profile',compact('data','total_booking','pending_booking','completed_booking','cancelled_booking','total_earn','cash','online'));
    }


    public function update_profile($id){
        $id = base64_decode($id);
        $data = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$id)->first();
        return view('admin.kathavachak.edit-profile',compact('data'));
    }


    public function update_kathavachak_post(Request $request){
        $rules = $request->validate([
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
            'kthavchk_gst_name' => '',
            'kthavchk_gstno' => '',
            'kthavchk_language' => '',
            'kthavchk_katha' => '',
            'kthavchk_youtube' => '',
            'kthavchk_price' => 'numeric',
            'kthavchk_aadharpic' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kthavchk_about' => ''
        ]);


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
                        // $message = $this->processKthavchkName($field).' Updated Successfully.';
                    }
                }
            }
            // return response()->json([
            //     'status_code' =>200,
            //     'message' => $message,
            //     'response' => $check->kthavchk_id
            // ]);
            return back()->with('success','Profile Updated Successfully');
        }
        return back()->with('error','Profile Updated Error');
    }

        // Approved Cancel Katha
    public function p_delete_kathavachak(Request $request){
        $bookings = Kathavachak::whereNULL('deleted_at')->where('kthavchk_id',$request->data)->first();
        if($bookings){
            $update = Kathavachak::whereNULL('deleted_at')->where('kthavchk_id',$request->data)->delete();
            return 1;
        }
    }
        // Approved Cancel Katha
    public function delete_kathavachak(Request $request){
        $bookings = Kathavachak::whereNULL('deleted_at')->where('kthavchk_id',$request->data)->first();
        if($bookings){
            $update = Kathavachak::whereNULL('deleted_at')->where('kthavchk_id',$request->data)->update(['deleted_at' => date('Y-m-d H:i:s')]);
            return 1;
        }
    }
}
