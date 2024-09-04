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
use App\Models\Muhurt;
use App\Models\MuhurtBooking;
use Validator;
use Str;
use File;

class MuhhurtController extends Controller
{
    public function muhurt(){
        $data = Muhurt::whereNull('deleted_at')->latest()->get();
        return view('admin.muhurt.muhurt',compact('data'));
    }


    // Kathavachak Stauts on off
    public function update_muhurt(Request $request){
        $service = Muhurt::whereNull('deleted_at')->where('muhurt_id',$request->data)->first();
        $status = '1';
        if($service){
            $status = $service->status=='0'?'1':'0';
            $update = Muhurt::whereNull('deleted_at')->where('muhurt_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_muhurt(Request $request){
        $Katha = Muhurt::whereNull('deleted_at')->where('muhurt_id',$request->data)->first();
        if($Katha){
            $update = Muhurt::whereNull('deleted_at')->where('muhurt_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
        }
        return $update;
    }

    public function edit_muhurt(Request $request){
        $data = Muhurt::whereNull('deleted_at')->where('muhurt_id',$request->data)->first();
        return $data;
    }


    public function save_muhurt(Request $request){
        $request->validate([
            'id' => '',
            'muhurt' => 'required',
            'muhurt_hindi' => 'required',
            'price' => 'required'
        ]);
        if(!is_null($request->id)){
            $id = $request->id;
        }else{
            $id = 'PMU' . date('dmy') . last_id('muhurts');
        }
        $save = Muhurt::updateorCreate([
            'muhurt_id' => $id
        ],[
            'name' => $request->muhurt,
            'name_hindi' => $request->muhurt_hindi,
            'price' => $request->price
        ]);

        if($save){
            return back()->with('success','Saved Successfully');
        }else{
            return back()->with('fail','Something Went Wrong');
        }
    }

    public function pending_booking(){
        $data= MuhurtBooking::whereNull('deleted_at')->where('booking_status','0')->latest()->get();
        return view('admin.muhurt.pending-booking',compact('data'));
    }

    public function complete_booking(){
        $data= MuhurtBooking::whereNull('deleted_at')->where('booking_status','1')->latest()->get();
        return view('admin.muhurt.complete-booking',compact('data'));
    }


    // Kathavachak Stauts on off
    public function update_booking_complete(Request $request){
        $service = MuhurtBooking::whereNull('deleted_at')->where('booking_id',$request->data)->first();
        $status = '1';
        if($service){
            $status = MuhurtBooking::whereNull('deleted_at')->where('booking_id',$request->data)->update(['booking_status'=>'1']);

            // Send Notification
        $fcm_token = get_fcm_key($service->jajmaan_id);
        $title ='Muhurt Created';
        $body = 'Congratulations! Your Muhurt has been successfully created and will be transferred to your email or WhatsApp. Please check your email for further details.';
        $sender_id = $service->jajmaan_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

        }
        return $status;
    }
}
