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
use App\Models\Kundali;
use App\Models\KundaliBooking;
use Validator;
use Str;
use File;

class KundaliController extends Controller
{
    public function kundali(){
        $data = Kundali::whereNull('deleted_at')->latest()->get();
        return view('admin.kundali.kundali',compact('data'));
    }


    // Kathavachak Stauts on off
    public function update_kundali(Request $request){
        $service = Kundali::whereNull('deleted_at')->where('kundali_id',$request->data)->first();
        $status = '1';
        if($service){
            $status = $service->status=='0'?'1':'0';
            $update = Kundali::whereNull('deleted_at')->where('kundali_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_kundali(Request $request){
        $Katha = Kundali::whereNull('deleted_at')->where('kundali_id',$request->data)->first();
        if($Katha){
            $update = Kundali::whereNull('deleted_at')->where('kundali_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
        }
        return $update;
    }

    public function edit_kundali(Request $request){
        $data = Kundali::whereNull('deleted_at')->where('kundali_id',$request->data)->first();
        return $data;
    }


    public function save_kundali(Request $request){
        $request->validate([
            'id' => '',
            'kundali' => 'required',
            'kundali_hindi' => 'required',
            'price' => 'required'
        ]);
        if(!is_null($request->id)){
            $id = $request->id;
        }else{
            $id = 'PKD' . date('dmy') . last_id('kundalis');
        }
        $save = Kundali::updateorCreate([
            'kundali_id' => $id
        ],[
            'name' => $request->kundali,
            'name_hindi' => $request->kundali_hindi,
            'price' => $request->price
        ]);

        if($save){
            return back()->with('success','Saved Successfully');
        }else{
            return back()->with('fail','Something Went Wrong');
        }
    }

    public function pending_booking(){
        $data= KundaliBooking::whereNull('deleted_at')->where('booking_status','0')->latest()->get();
        return view('admin.kundali.pending-booking',compact('data'));
    }

    public function complete_booking(){
        $data= KundaliBooking::whereNull('deleted_at')->where('booking_status','1')->latest()->get();
        return view('admin.kundali.complete-booking',compact('data'));
    }


    // Kathavachak Stauts on off
    public function update_booking_complete(Request $request){
        $service = KundaliBooking::whereNull('deleted_at')->where('booking_id',$request->data)->first();
        $status = '1';
        if($service){
            $status = KundaliBooking::whereNull('deleted_at')->where('booking_id',$request->data)->update(['booking_status'=>'1']);

            // Send Notification
        $fcm_token = get_fcm_key($service->jajmaan_id);
        $title ='Kundali Created';
        $body = 'Congratulations! Your Kundali has been successfully created and will be transferred to your email or WhatsApp. Please check your email for further details.';
        $sender_id = $service->jajmaan_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

        }
        return $status;
    }
}
