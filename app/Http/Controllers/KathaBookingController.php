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

class KathaBookingController extends Controller
{
    // Total Katha
    public function total_kathas(){
        $bookings = KathavachakBooking::whereNULL('deleted_at')->where('booking_status','1')->latest()->get();
        return view('admin.bookings.bookings',compact('bookings'));
    }

    // Get Booking Cancelled Data for Ajax
    public function cancelled_booking_data(Request $request){
        $data = KathavachakBooking::whereNull('deleted_at')->where('booking_id',$request->data)->where('booking_status','>=','2')->first();
        return $data;
    }


    // Pending Katha
    public function pending_katha(){
        $bookings = KathavachakBooking::whereNULL('deleted_at')->where('booking_status','0')->latest()->get();
        return view('admin.bookings.bookings',compact('bookings'));
    }


    // Cancel Katha
    public function cancel_katha(){
        $bookings = KathavachakBooking::whereNULL('deleted_at')->where('booking_status','2')->latest()->get();
        return view('admin.bookings.bookings',compact('bookings'));
    }

    // Approved Cancel Katha
    public function approved_cancel_katha(){
        $bookings = KathavachakBooking::whereNULL('deleted_at')->where('booking_status','3')->latest()->get();
        return view('admin.bookings.bookings',compact('bookings'));
    }
    // Approved Cancel Katha
    public function initate_refund(Request $request){
        $bookings = KathavachakBooking::whereNULL('deleted_at')->where('booking_id',$request->data)->first();
        if($bookings){
            $update = KathavachakBooking::whereNULL('deleted_at')->where('booking_id',$request->data)->update(['booking_status'=>'3','refund_date'=>date('Y-m-d')]);
            $fcm_token = jajmaan_fcm($bookings->jajmaan_id);
            $update = Kathavachak::whereNull('deleted_at')->where('kthavchk_id',$request->data)->update(['verification'=>'0']);
            $send = FCMService::send(
                $fcm_token,
                [
                    'title' =>'Refund Initated',
                    'body' => 'Your Katha cancellation request has been approved and payment initated, your refund will be credit in your account within 7 to 10 working days!'
                ]
            );
            return $update;
        }
    }



    // Total Katha
    // public function booking_filter(Request $request){
    //     $bookings = KathavachakBooking::whereNULL('deleted_at')->where('booking_status',base64_decode($request->booking_status))->latest()->get();
    //     $filter = base64_decode($request->booking_status);
    //     return view('admin.bookings.bookings',compact('bookings','filter'));
    // }

    // Total Katha
    public function booking_filter(Request $request){
        $state = '';
        $city = '';
        $filter = '';
        $bookings = KathavachakBooking::whereNULL('deleted_at');
        if($request->state && !is_null($request->state)){
            $state = $request->state;
            $bookings = $bookings->where('state',$request->state);
        }
        if($request->city && !is_null($request->city)){
            $city = $request->city;
            $bookings = $bookings->where('city',$request->city);
        }
        if($request->booking_status && !is_null($request->booking_status)){
            $filter = base64_decode($request->booking_status);
            $bookings = $bookings->where('booking_status',base64_decode($request->booking_status));
        }
        $bookings = $bookings->latest()->get();

        return view('admin.bookings.bookings',compact('bookings','filter','city','state'));
    }


}
