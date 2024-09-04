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
use App\Models\EventPooja;
use App\Models\EventBooking;
use Validator;
use Str;
use File;

class EventController extends Controller
{
    public function event(){
        $data = EventPooja::whereNull('deleted_at')->latest()->get();
        foreach ($data as $key => $value) {
            $count = EventBooking::whereNull('deleted_at')->where('event_id',$value->event_id)->count();
            $value->bookings = $count;
        }
        return view('admin.event.event',compact('data'));
    }

    public function event_bookings($id){
        $data = EventBooking::whereNull('deleted_at')->where('event_id',base64_decode($id))->latest()->get();
        foreach ($data as $key => $value) {
            $pooja = EventPooja::whereNull('deleted_at')->where('event_id',$value->event_id)->first();
            $value->event_name = $pooja->title_eng;
        }
        return view('admin.event.bookings.event-bookings',compact('data'));
    }

    public function create_event(){
        return view('admin.event.add-event');
    }

    public function get_event_details(Request $request){
        if($request->data){
            $data = EventPooja::whereNull('deleted_at')->where('event_id',$request->data)->first();
            if($data){
                return $data;
            }
        }
        return false;
    }

    public function edit_event($id){
        $data = EventPooja::whereNull('deleted_at')->where('event_id',base64_decode($id))->first();
        return view('admin.event.edit-event',compact('data'));
    }


    // Save Event
    public function save_event(Request $request){
        $request->validate([
            'event_id' => '',
            'title_eng' => 'required|string',
            'title_hin' => 'required|string',
            'desc_eng' => 'required|string',
            'desc_hin' => 'required',
            'price' => 'required',
            'dakshina_price' => 'required|string',
            'guruseva_price' => 'required|string',
            'rudrakshseva_price' => 'required|string',
            'prasaddelivery_price' => 'required|string',
            'fb_link' => '',
            'event_date' => 'required|date|after_or_equal:today',
            'event_img' => 'required|array',
            'event_img.*' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->event_id){
            $id = $request->event_id;
            $check = EventPooja::where('event_id',$id)->whereNull('deleted_at')->first();
            $imageName = $check->image;
        }else{
            $id = 'PEV'.rand(1111,9999).last_id('event_pooja');
            $imageName = '';
        }

        $imagePaths = [];
        if ($request->hasFile('event_img')) {
            $path = public_path('event_pooja');

            foreach ($request->file('event_img') as $index => $image) {
                $imageName = $id.'_image_'.$index.'.'.$image->getClientOriginalExtension();
                $imagePath = $image->move($path, $imageName);
                $imagePaths[] = $imageName;
            }
        }

        $save = EventPooja::updateOrCreate(
            ['event_id' => $id],
            [
                'title_eng' => $request->input('title_eng'),
                'title_hin' => $request->input('title_hin'),
                'desc_eng' => $request->input('desc_eng'),
                'desc_hin' => $request->input('desc_hin'),
                'price' => $request->input('price'),
                'dakshina_price' => $request->input('dakshina_price'),
                'guruseva_price' => $request->input('guruseva_price'),
                'rudrakshseva_price' => $request->input('rudrakshseva_price'),
                'prasaddelivery_price' => $request->input('prasaddelivery_price'),
                'fb_link' => $request->input('fb_link'),
                'event_img' =>  serialize($imagePaths),
                'event_date' => $request->input('event_date')
            ]
        );
        if($save){
           return back()->with('success','Saved Successfully');
        }else{
           return back()->with('fail',"Couldn't Saved");
        }
    }

    public function update_link(Request $request){
        $check = EventPooja::whereNull('deleted_at')->where('event_id',$request->event_id)->first();
        if($check){
            $update = EventPooja::whereNull('deleted_at')->where('event_id',$request->event_id)->update(['fb_link'=>$request->facebook_link]);
            $booking = EventBooking::where('event_id',$check->event_id)->where('booking_status','0')->get();
            foreach($booking as $booo){
                // Send Notification
                $fcm_token = jajmaan_fcm($booo->jajmaan_id);
                $title ='Facebook Live Link Added';
                $body = $check->title_eng." Live link is available please check it now!";
                $sender_id = $booo->jajmaan_id;
                send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification
            }
            return back()->with('success','Link Updated Successfully');
        }
        return back()->with('fail','Could not update');
    }

    public function update_event(Request $request){
        $check = EventPooja::whereNull('deleted_at')->where('event_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = EventPooja::whereNull('deleted_at')->where('event_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_event(Request $request){
        $check = EventPooja::whereNull('deleted_at')->where('event_id',$request->data)->first();
        if($check){
            $update = EventPooja::whereNull('deleted_at')->where('event_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }



    public function pending_booking(){
        $data = EventBooking::whereNull('deleted_at')->where('event_date','>=',date('Y-m-d'))->latest()->get();
        foreach ($data as $key => $value) {
            $pooja = EventPooja::whereNull('deleted_at')->where('event_id',$value->event_id)->first();
            $value->event_name = $pooja->title_eng??'';
        }
        return view('admin.event.bookings.pending-booking',compact('data'));
    }

    public function complete_booking(){
        $data = EventBooking::whereNull('deleted_at')->where('event_date','<',date('Y-m-d'))->latest()->get();
        foreach ($data as $key => $value) {
            $pooja = EventPooja::whereNull('deleted_at')->where('event_id',$value->event_id)->first();
            $value->event_name = $pooja->title_eng;
        }
        return view('admin.event.bookings.completed-booking',compact('data'));
    }



}
