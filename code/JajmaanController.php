<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jajmaan;
use App\Models\JajmaanAddress;
use App\Models\KathavachkLeave;
use App\Models\KathavachkRating;
use App\Models\Kathavachak;
use App\Models\Notifications;
use Validator;
use DB;

class JajmaanController extends Controller
{

    // Show Jajmaan Data
    public function jajmaan(){
        $jajmaan = Jajmaan::whereNull('deleted_at')->latest()->get();
        return view('admin.jajmaan.jajmaan',compact('jajmaan'));
    }

    // Kathavachak Stauts on off
    public function update_jajmaan(Request $request){
        $Jajmaan = Jajmaan::whereNull('deleted_at')->where('jajmaan_id',$request->data)->first();
        $status = '1';
        if($Jajmaan){
            $status = $Jajmaan->status=='0'?'1':'0';
            $update = Jajmaan::whereNull('deleted_at')->where('jajmaan_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_jajmaan(Request $request){
        $Katha = Jajmaan::whereNull('deleted_at')->where('jajmaan_id',$request->data)->first();
        if($Katha){
            $update = Jajmaan::whereNull('deleted_at')->where('jajmaan_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
        }
        return $update;
    }

    public function edit_jajmaan($id){
        $jajmaan = Jajmaan::whereNull('deleted_at')->where('jajmaan_id',base64_decode($id))->first();
        return view('admin.jajmaan.update-jajmaan', compact('jajmaan'));
    }




    public function update_jajmaan_post(Request $request){
        $request->validate([
            'jajmaan_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => '',
            'surname' => '',
            'horoscope' => '',
            'phone' => 'digits:10|numeric',
            'state' => '',
            'city' => '',
            'gender' => 'in:0,1,2'
        ],[
            'image.max' => 'Jajmaan Image Must be less than or equal to 2MB',
        ]);

        $check = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('deleted_at',NULL)->first();
        if($check){

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
            }

            foreach ($request->all() as $field => $rule) {
                if ($request->has($field) && $field !=='_token') {
                    if ($field !== 'image' && $field !== 'jajmaan_id') {
                        $update->$field = $request->input($field);
                        $update->save();
                    }
                }
            }
            return back()->with('success','Profile Updated Successfully');
        }
        return false;
    }

    public function jajmaan_filter(Request $request){
        $state = '';
        $city = '';

        $jajmaan = Jajmaan::whereNULL('deleted_at');
        if($request->state && !is_null($request->state)){
            $state = $request->state;
            $jajmaan = $jajmaan->where('state',$request->state);
        }
        if($request->city && !is_null($request->city)){
            $filter_city = $request->city;
            $jajmaan = $jajmaan->where('city',$request->city);
        }

        $jajmaan = $jajmaan->latest()->get();

        return view('admin.jajmaan.jajmaan',compact('jajmaan','filter_city','state'));
    }



    public function jajmaan_profile($id){
        $jajmaan = Jajmaan::whereNull('deleted_at')->where('jajmaan_id',base64_decode($id))->first();
        return view('admin.jajmaan.user-profile', compact('jajmaan'));
    }


    public function get_cities(Request $request){
        $states = DB::table('states')->where('state_title', '=', $request->data)->first();
        $cities = DB::table('cities')->where('state_id',$states->id)->where('status','Active')->orderBy('name','asc')->get();
        return $cities;
    }


    public function send_notification(Request $request){
        $request->validate([
            'sender_id' => 'required',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'body' => 'required',
        ]);


        $check = Jajmaan::where('jajmaan_id',$request->sender_id)->where('deleted_at',NULL)->first();
        if($check){
            $fcm = $check->fcm_token;
            $title = $request->title;
            $body = $request->body;
            $send = send_individual_nitification($fcm,$title,$body);
            if($send){
                $save = Notifications::create([
                    'notfication_to' => '0',
                    'send_to' => $check->jajmaan_id,
                    'notification_by' => 'Admin',
                    'date' => date('d-m-Y'),
                    'msg' => $request->body,
                    'title' => $request->title,
                    'body' => $request->body,
                    'image' => '',
                ]);
                return back()->with('success','Notification Sent Successfully');
            }else{
                return back()->with('fail','Failed to send notification, Please try again');
            }
        }else{
            return back()->with('fail','No Jajmaan Found');
        }

    }


}
