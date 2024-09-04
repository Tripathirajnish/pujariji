<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use \Illuminate\Notifications\Notifiable;
use App\Services\FCMService;
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
    Notifications,
    VirtualPoojaBooking,
    VirtualPoojaJajmaan
};
use DataTables;
use Str;
use File;


class PoojaBookingController extends Controller
{


    public function index(){
        $data = PoojaPujari::whereNull('deleted_at')->where('verification','0')->latest()->get();
        return view('admin.pooja-bookings.pujari.pujariji',compact('data'));
    }

    public function update_pujari(Request $request){
        $pujari = PoojaPujari::whereNull('deleted_at')->where('pujari_id',$request->data)->first();
        $status = '1';
        if($pujari){
            $status = $pujari->status=='0'?'1':'0';
            $update = PoojaPujari::whereNull('deleted_at')->where('pujari_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_pujari(Request $request){
        $pujari = PoojaPujari::whereNull('deleted_at')->where('pujari_id',$request->data)->first();
        if($pujari){
            $update = PoojaPujari::whereNull('deleted_at')->where('pujari_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }


    public function pujariji_details($id){
        $id = base64_decode($id);
        $data = PoojaPujari::where('pujari_id',$id)->whereNull('deleted_at')->first();
        $total_booking = PoojaBooking::where('pujari_id',$id)->whereNULL('deleted_at')->count();
        $pending_booking = PoojaBooking::where('pujari_id',$id)->whereNULL('deleted_at')->where('booking_status','0')->count();
        $completed_booking = PoojaBooking::where('pujari_id',$id)->whereNULL('deleted_at')->where('booking_status','1')->count();
        $cancelled_booking = PoojaBooking::where('pujari_id',$id)->whereNULL('deleted_at')->where('booking_status','2')->count();
        $total_earn = round((PoojaBooking::where('pujari_id',$id)->whereNULL('deleted_at')->sum('total_price'))*0.7,2);
        $cash = round((PoojaBooking::where('pujari_id',$id)->whereNULL('deleted_at')->where('balance','>','0')->sum('total_price'))*0.7,2);
        $online = round((PoojaBooking::where('pujari_id',$id)->whereNULL('deleted_at')->where('balance','0')->sum('total_price'))*0.7,2);
        $cancelled = round((PoojaBooking::where('pujari_id',$id)->whereNULL('deleted_at')->where('booking_status','2')->sum('total_price'))*0.7,2);
        return view('admin.pooja-bookings.pujari.profile-details',compact('data','total_booking','pending_booking','completed_booking','cancelled_booking','total_earn','cash','online','cancelled'));
    }


    public function pending_pujariji(){
        $data = PoojaPujari::whereNull('deleted_at')->where('verification','1')->latest()->get();
        return view('admin.pooja-bookings.pujari.pending-pujariji',compact('data'));
    }



    public function verify_vendor(Request $request){
        $check = PoojaPujari::whereNull('deleted_at')->where('pujari_id',$request->data)->first();
        if($check){
            $fcm_token = $check->fcm_token;
            $update = PoojaPujari::whereNull('deleted_at')->where('pujari_id',$request->data)->update(['verification'=>'0']);
            $send = FCMService::send(
                $fcm_token,
                [
                    'title' =>'Profile Verified',
                    'body' => $check->name.', Your profile has been verified successfully, Now you can login with your credentials!'
                ]
            );
        }
        return 1;
    }



    public function reject_vendor(Request $request){
        $check = PoojaPujari::whereNull('deleted_at')->where('pujari_id',$request->data)->first();
        if($check){
            $fcm_token = $check->fcm_token;
            $update = PoojaPujari::whereNull('deleted_at')->where('pujari_id',$request->data)->update(['verification'=>'2']);
            $send = FCMService::send(
                $fcm_token,
                [
                    'title' =>'Profile Rejected',
                    'body' => $check->name.', Your profile could not be verified, Please try later or contact to admin!'
                ]
            );
        }
        return 1;
    }



    public function rejected_pujariji(){
        $data = PoojaPujari::whereNull('deleted_at')->where('verification','2')->latest()->get();
        return view('admin.pooja-bookings.pujari.rejected-pujariji',compact('data'));
    }


    public function delete_permanently(Request $request){
        $check = PoojaPujari::whereNull('deleted_at')->where('pujari_id',$request->data)->first();
        if($check){

            $directoryPath = public_path('pooja/pujari/profile/' . $check->origional_pujari_image);
            if (File::exists($directoryPath)) {
                File::delete($directoryPath);
            }

            $directoryPath = public_path('pooja/pujari/aadhar/' . $check->origional_adhar_front_image);
            if (File::exists($directoryPath)) {
                File::delete($directoryPath);
            }

            $directoryPath = public_path('pooja/pujari/aadhar/' . $check->origional_adhar_back_image);
            if (File::exists($directoryPath)) {
                File::delete($directoryPath);
            }

            $delete = PoojaPujari::where('pujari_id',$request->data)->delete();
            return 0;
        }
        return 1;
    }


    public function update_profile($id){
        $data = PoojaPujari::where('pujari_id',base64_decode($id))->whereNull('deleted_at')->first();
        return view('admin.pooja-bookings.pujari.edit-profile',compact('data'));
    }

    public function update_pujariji_post(Request $request){
        $rules = $request->validate([
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
            'online_or_offline' => 'in:0,1,2',
            'temple_name' => 'nullable',
            'adhar_front_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'adhar_back_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'about' => '',
        ]);


        $check = PoojaPujari::where('pujari_id',$request->pujari_id)->where('verification','0')->where('deleted_at',NULL)->first();
        if($check){
            if($request->phone_number){
                $check_p = PoojaPujari::where('pujari_id','!=',$request->pujari_id)->where('phone_number',$request->phone_number)->where('deleted_at',NULL)->first();
                if(!is_null($check_p)){
                    return back()->with('fail','Number is already taken');
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
                        // $message = $this->processAstroName($field).' Updated Successfully.';
                    }
                }
            }
            return back()->with('success','Profile Updated Successfully');
        }
        return back()->with('fail','Something Went Wrong');
    }


    public function offline_pending_pooja(){
        $data = PoojaBooking::where('booking_type','1')->whereNull('deleted_at')->where('booking_status','0')->latest()->get();
        return view('admin.pooja-bookings.offline-booking.pending-list',compact('data'));
    }

    public function offline_completed_pooja(){
        $data = PoojaBooking::where('booking_type','1')->whereNull('deleted_at')->where('booking_status','1')->latest()->get();
        return view('admin.pooja-bookings.offline-booking.completed-list',compact('data'));
    }

    public function offline_cancelled_request(){
        $data = PoojaBooking::where('booking_type','1')->whereNull('deleted_at')->where('booking_status','2')->latest()->get();
        return view('admin.pooja-bookings.offline-booking.cancelled-list',compact('data'));
    }

    public function offline_completed_cancelled_request(){
        $data = PoojaBooking::where('booking_type','1')->whereNull('deleted_at')->where('booking_status','3')->latest()->get();
        return view('admin.pooja-bookings.offline-booking.completed-cancelled-booking',compact('data'));
    }



    public function online_pending_pooja(){
        $data = PoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','0')->latest()->get();
        return view('admin.pooja-bookings.online-booking.pending-list',compact('data'));
    }

    public function online_completed_pooja(){
        $data = PoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','1')->latest()->get();
        return view('admin.pooja-bookings.online-booking.completed-list',compact('data'));
    }

    public function online_cancelled_request(){
        $data = PoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','2')->latest()->get();
        return view('admin.pooja-bookings.online-booking.cancelled-list',compact('data'));
    }

    public function online_completed_cancelled_request(){
        $data = PoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','3')->latest()->get();
        return view('admin.pooja-bookings.online-booking.completed-cancelled-booking',compact('data'));
    }



    public function withdraw_request(){
        $data = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdraw_status','0')->latest()->get();
        return view('admin.pooja-bookings.pujari.pending-withdraw',compact('data'));
    }

    public function complete_request(){
        $data = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdraw_status','1')->latest()->get();
        return view('admin.pooja-bookings.pujari.complete-withdraw',compact('data'));
    }

    public function rejected_request(){
        $data = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdraw_status','2')->latest()->get();
        return view('admin.pooja-bookings.pujari.rejected-withdraw',compact('data'));
    }



    public function verify_withdraw(Request $request){
        $check = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdra_id',$request->data)->first();
        if($check){
            $update = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdra_id',$request->data)->update(['withdraw_status'=>'1']);

            // Send Notification
            $fcm_token2 = get_fcm_key($check->pujari_id);
            $title2 = 'Withdraw Successsfull';
            $body2 = 'Your Withdraw Request has been proceed successsfully, It will credited to your account within 72 Hrs.';
            $sender_id2 = $check->pujari_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

        }
        return 1;
    }

    public function reject_withdraw(Request $request){
        $check = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdra_id',$request->data)->first();
        if($check){
            $update = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdra_id',$request->data)->update(['withdraw_status'=>'2']);

            if($update==1){
                $check_p = PoojaPujari::where('pujari_id',$check->pujari_id)->where('deleted_at',NULL)->first();
                $wallet = $check_p->wallet_amt??0;
                $new_wallet = $wallet + $check->withdraw_amount;
                $check_p = PoojaPujari::where('pujari_id',$check->pujari_id)->where('deleted_at',NULL)->update(['wallet_amt'=>$new_wallet]);
            }

            // Send Notification
            $fcm_token2 = get_fcm_key($check->pujari_id);
            $title2 = 'Withdraw Rejected';
            $body2 = 'Your Withdraw Request has been rejected!';
            $sender_id2 = $check->pujari_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

        }
        return 1;
    }



    public function get_pooja_package_inclusion_detail(Request $request){
        $data = '';
        $booking = PoojaBooking::where('booking_id',$request->data)->first();
        if($booking){
            $package = PoojaPackage::where('id',$booking->package_id)->first();
                $package_name = !is_null($package)?$package->name??'':'';
            $inclusions = unserialize($booking->inclusions);
            $data = [
                'package_id' => $booking->package_id,
                'price' => $booking->pooja_price,
                'package_name' => $package_name,
                'inclusions' => $inclusions,
            ];
        }
        return $data;
    }

    public function initate_refund_pooja_booking(Request $request){
        $rules = $request->validate([
            'booking_id' => 'required|string',
            'screeenshort' => 'image|mimes:jpeg,png,jpg|max:2048',
            'transection_id' => '',
        ]);
        $booking = PoojaBooking::where('booking_id',$request->booking_id)->first();
        if($booking){
            if ($request->hasFile('screeenshort')) {
                $path = public_path('pooja/cancel');
                $image = $booking->booking_id.'_sc.'.$request->file('screeenshort')->getClientOriginalExtension();
                $request->file('screeenshort')->move($path, $image);
            }
            $update = PoojaBooking::where('booking_id',$request->booking_id)->update(['booking_status' => '3','can_transection_id'=>$request->transection_id,'can_scrnshot'=>$image]);

            // Send Notification
            $fcm_token2 = get_fcm_key($booking->jajmaan_id);
            $title2 ='Refund Initated';
            $body2 = 'Your cancelled booking refund has been initated, It will credit to your account within 7 to 10 business days!';
            $sender_id2 = $booking->jajmaan_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

            return back()->with('success','Reunded Successfully');

        }
    }

    public function get_booking_details(Request $request){
        return $booking = PoojaBooking::where('booking_id',$request->data)->first();
    }

    public function update_pujari_details(Request $request){
        $rules = $request->validate([
            'booking_id' => 'required|string',
            'pujariji_details' => 'required|string',
        ]);
        $check = PoojaBooking::whereNull('deleted_at')->where('booking_id',$request->booking_id)->first();
        if($check){
            $update = PoojaBooking::whereNull('deleted_at')->where('booking_id',$request->booking_id)->update(['booking_status'=>'1','online_admin_info'=>$request->pujariji_details]);
            // Send Notification
            $fcm_token2 = get_fcm_key($check->jajmaan_id);
            $title2 ='Pooja Completed';
            $body2 = 'Congrestulation! Online Pooja has been successfully completed.';
            $sender_id2 = $check->jajmaan_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification
        }
        return back()->with('success','Updated Successfully');
    }


    
    public function virtual_pending_pooja(){
        $data = VirtualPoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','0')->latest()->get();
        return view('admin.pooja-bookings.web-booking.pending-list',compact('data'));
    }

    public function virtual_completed_pooja(){
        $data = VirtualPoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','1')->latest()->get();
        return view('admin.pooja-bookings.web-booking.completed-list',compact('data'));
    }

    public function virtual_cancelled_request(){
        $data = VirtualPoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','2')->latest()->get();
        return view('admin.pooja-bookings.web-booking.cancelled-list',compact('data'));
    }

    public function virtual_completed_cancelled_request(){
        $data = VirtualPoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','3')->latest()->get();
        return view('admin.pooja-bookings.web-booking.completed-cancelled-booking',compact('data'));
    }


    public function virtual_complete_booking(Request $request){
        $rules = $request->validate([
            'booking_id' => 'required|string',
            'pujariji_details' => 'required|string',
        ]);
        $check = VirtualPoojaBooking::whereNull('deleted_at')->where('booking_id',$request->booking_id)->first();
        if($check){
            $jajmaan = VirtualPoojaJajmaan::where('id',$check->jajmaan_id)->first();
            $update = VirtualPoojaBooking::whereNull('deleted_at')->where('booking_id',$request->booking_id)->update(['booking_status'=>'1','online_admin_info'=>$request->pujariji_details]);
            // Send Notification on phone
            $url = url('pooja-feedback?booking_id='.$request->booking_id);
            $message = 'Hi '.$jajmaan->name.' \n Your Booking ID-'.$request->booking_id.' has been successfully completed. Please provide a respective review as your online puja experience on bit.ly/asYSGG -PUJARI JI';
            sms($jajmaan->phone, $message);
            
        }
        return back()->with('success','Updated Successfully');
    }


    public function virtual_get_booking_details(Request $request){
        return $booking = VirtualPoojaBooking::where('booking_id',$request->data)->first();
    }


    public function pujari_filter(Request $request){
        $state = '';
        $city = '';

        $data = PoojaPujari::whereNULL('deleted_at');
        if($request->state && !is_null($request->state)){
            $state = $request->state;
            $data = $data->where('state',$request->state);
        }
        if($request->city && !is_null($request->city)){
            $filter_city = $request->city;
            $data = $data->where('city',$request->city);
        }

        $data = $data->latest()->get();

        return view('admin.pooja-bookings.pujari.pujariji',compact('data','filter_city','state'));
    }



}
