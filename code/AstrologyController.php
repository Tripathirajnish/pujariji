<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use \Illuminate\Notifications\Notifiable;
use App\Services\FCMService;
use App\Models\Jajmaan;
use App\Models\JajmaanAddress;
use App\Models\Astrologer;
use App\Models\AstroPlan;
use App\Models\AstrologerBooking;
use App\Models\AstroWithdrawMoney;
use App\Models\AstroBankDetail;
use App\Models\Notifications;
use DataTables;

class AstrologyController extends Controller
{


    public function index(){
        $astro = Astrologer::whereNull('deleted_at')->where('verification','0')->get();
        return view('admin.astrology.astrologer',compact('astro'));
    }


//     public function get_astro(Request $request){
//     if($request->ajax()) {
//         $data = Astrologer::latest()->get();
//         return DataTables::of($data)
//             ->addIndexColumn()
//             ->addColumn('action', function ($row) {
//                 $btn = '<a href="javascript:void(0)" class="updateStatustoggleD" data-url="' . url('update_astro') . '" data-id="' . $row->astro_id . '">';
//                 if ($row->status == '0') {
//                     $btn .= '<i class="fa fa-eye text-success"></i>';
//                 } else {
//                     $btn .= '<i class="fa fa-eye-slash text-danger"></i>';
//                 }
//                 $btn .= '</a>';

//                 return $btn;
//             })
//             ->rawColumns(['action'])
//             ->make(true);
//     }
//     return view('admin.astrology.astrologer');
// }



    public function update_astro(Request $request){
        $Astrologer = Astrologer::whereNull('deleted_at')->where('astro_id',$request->data)->first();
        $status = '1';
        if($Astrologer){
            $status = $Astrologer->status=='0'?'1':'0';
            $update = Astrologer::whereNull('deleted_at')->where('astro_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_astro(Request $request){
        $Astrologer = Astrologer::whereNull('deleted_at')->where('astro_id',$request->data)->first();
        if($Astrologer){
            $update = Astrologer::whereNull('deleted_at')->where('astro_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }


    public function astrologer_details($id){
        $id = base64_decode($id);
        $astro = Astrologer::where('astro_id',$id)->whereNull('deleted_at')->first();
        $astro_ac = AstroBankDetail::where('astro_id',$id)->whereNull('deleted_at')->first();
        $total_booking = AstrologerBooking::where('astro_id',$id)->whereNULL('deleted_at')->count();
        $pending_booking = AstrologerBooking::where('astro_id',$id)->whereNULL('deleted_at')->where('booking_status','0')->count();
        $completed_booking = AstrologerBooking::where('astro_id',$id)->whereNULL('deleted_at')->where('booking_status','1')->count();
        $cancelled_booking = AstrologerBooking::where('astro_id',$id)->whereNULL('deleted_at')->where('booking_status','2')->orwhere('booking_status','3')->count();
        $total_earn = round((AstrologerBooking::where('astro_id',$id)->whereNULL('deleted_at')->sum('vendor_income')));
        $collected = round((AstrologerBooking::where('astro_id',$id)->whereNULL('deleted_at')->where('booking_status','1')->sum('vendor_income')));
        $pending = round((AstrologerBooking::where('astro_id',$id)->whereNULL('deleted_at')->where('booking_status','0')->sum('vendor_income')));
        $cancelled = round((AstrologerBooking::where('astro_id',$id)->whereNULL('deleted_at')->where('booking_status','2')->sum('vendor_income')));
        return view('admin.astrology.profile-details',compact('astro','total_booking','pending_booking','completed_booking','cancelled_booking','total_earn','collected','pending','cancelled','astro_ac'));
    }



    public function pending_list(){
        $astro = Astrologer::whereNull('deleted_at')->where('verification','1')->get();
        return view('admin.astrology.pending-request',compact('astro'));
    }



    public function verify_astro(Request $request){
        if($request->astro_id){
            $Astrologer = Astrologer::whereNull('deleted_at')->where('astro_id',base64_decode($request->astro_id))->first();
            if($Astrologer){
                $update = Astrologer::whereNull('deleted_at')->where('astro_id',base64_decode($request->astro_id))->update(['astro_final_price'=>$request->final_price,'verification'=>'0','date'=>date('Y-m-d')]);

                return back()->with('success','Verification Successfull');
            }
            return back()->with('fail','Something Went Wrong');
        }
    }


    public function reject_astro(Request $request){
        if($request->data){
            $Astrologer = Astrologer::whereNull('deleted_at')->where('astro_id',base64_decode($request->data))->first();
            if($Astrologer){
                $update = Astrologer::whereNull('deleted_at')->where('astro_id',base64_decode($request->data))->update(['verification'=>'2']);
                return back()->with('success','Rejected Successfull');
            }
            return back()->with('fail','Something Went Wrong');
        }
    }



    public function rejected_list(){
        $astro = Astrologer::whereNull('deleted_at')->where('verification','2')->get();
        return view('admin.astrology.rejected-list',compact('astro'));
    }


    public function astrology_plan(){
        $data = AstroPlan::whereNull('deleted_at')->orderBy('mrp','asc')->get();
        return view('admin.astrology.plan-list',compact('data'));
    }

    public function update_plan(Request $request){
        $Astrologer = AstroPlan::whereNull('deleted_at')->where('plan_id',$request->data)->first();
        $status = '1';
        if($Astrologer){
            $status = $Astrologer->status=='0'?'1':'0';
            $update = AstroPlan::whereNull('deleted_at')->where('plan_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_plan(Request $request){
        $Astrologer = AstroPlan::whereNull('deleted_at')->where('plan_id',$request->data)->first();
        if($Astrologer){
            $update = AstroPlan::whereNull('deleted_at')->where('plan_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

    public function store_plan(){
        return view('admin.astrology.store-plan');
    }

    public function save_plan(Request $request){
        $request->validate([
            'plan_id' => '',
            'name' => 'required|string',
            'subtitle' => 'required|string',
            'description' => 'required|string',
            'features' => 'required',
            'mrp' => 'required|numeric',
            'price' => 'required|numeric',
            'talk_time' => 'required|numeric'
        ]);

        if($request->plan_id){
            $id = $request->plan_id;
        }else{
            $id = 'PAP'.rand(1111,9999).last_id('astro_plans');
        }

        $disscount_per = (($request->mrp - $request->price)/$request->mrp) * 100;

        $save = AstroPlan::updateOrCreate(
            ['plan_id' => $id],
            [
                'plan_name' => $request->input('name'),
                'sutitle' => $request->input('subtitle'),
                'description' => $request->input('description'),
                'features' => serialize($request->input('features')),
                'talk_time' => $request->input('talk_time'),
                'mrp' => $request->input('mrp'),
                'price' => $request->input('price'),
                'disscount_per' => number_format($disscount_per,2)
            ]
        );
        if($save){
           return back()->with('success','Saved Successfully');
        }else{
           return back()->with('fail',"Couldn't Saved");
        }
    }



    public function edit_plan($id){
        $data = AstroPlan::whereNull('deleted_at')->where('plan_id',base64_decode($id))->first();
        return view('admin.astrology.edit-plan',compact('data'));
    }




    public function pending_bookings(){
        $data = AstrologerBooking::whereNull('deleted_at')->where('booking_status','0')->latest()->get();
        return view('admin.astrology.bookings.pending-list',compact('data'));
    }


    public function completed_bookings(){
        $data = AstrologerBooking::whereNull('deleted_at')->where('booking_status','1')->latest()->get();
        return view('admin.astrology.bookings.completed-list',compact('data'));
    }

    public function cancelled_bookings(){
        $data = AstrologerBooking::whereNull('deleted_at')->where('booking_status','2')->latest()->get();
        return view('admin.astrology.bookings.cancelled-list',compact('data'));
    }

    public function completed_cancelled_bookings(){
        $data = AstrologerBooking::whereNull('deleted_at')->where('booking_status','3')->latest()->get();
        return view('admin.astrology.bookings.cancelled-list-approved',compact('data'));
    }

    public function get_cancel_details(Request $request){
        $Astrologer = AstrologerBooking::whereNull('deleted_at')->where('booking_id',$request->data)->first();
        return $Astrologer;
    }

    // public function update_astro(Request $request){
    //     $Astrologer = AstrologerBooking::whereNull('deleted_at')->where('booking_id',$request->data)->first();
    //     $status = '1';
    //     if($Astrologer){
    //         $status = $Astrologer->status=='0'?'1':'0';
    //         $update = AstrologerBooking::whereNull('deleted_at')->where('booking_id',$request->data)->update(['status'=>$status]);
    //     }
    //     return $status;
    // }


    // public function delete_astro(Request $request){
    //     $Astrologer = AstrologerBooking::whereNull('deleted_at')->where('booking_id',$request->data)->first();
    //     if($Astrologer){
    //         $update = AstrologerBooking::whereNull('deleted_at')->where('booking_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
    //         return $update;
    //     }
    //     return 1;
    // }

    public function update_profile($id){
        $data = Astrologer::where('astro_id',base64_decode($id))->whereNull('deleted_at')->first();
        return view('admin.astrology.edit-profile',compact('data'));
    }


    public function update_astrologer_post(Request $request){
        $rules = $request->validate([
            'astro_id' => 'required|string',
            'astro_name' => $request->filled('astro_name') ? 'string' : '',
            'astro_surname' => $request->filled('astro_surname') ? 'string' : '',
            'astro_father' => $request->filled('astro_father') ? 'string' : '',
            'astro_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'astro_phone' => $request->filled('astro_phone') ? 'numeric|digits:10' : '',
            'astro_whatsapp' => $request->filled('astro_whatsapp') ? 'numeric|digits:10' : '',
            'astro_dob' => $request->filled('astro_dob') ? 'date' : '',
            'astro_education' => $request->filled('astro_education') ? 'string' : '',
            'astro_gender' => $request->filled('astro_gender') ? 'in:0,1,2' : '',
            'astro_address' => $request->filled('astro_address') ? 'string' : '',
            'astro_vill_flat' => $request->filled('astro_vill_flat') ? 'string' : '',
            'astro_post' => $request->filled('astro_post') ? 'string' : '',
            'astro_police_station' => $request->filled('astro_police_station') ? 'string' : '',
            'astro_city' => $request->filled('astro_city') ? 'string' : '',
            'astro_state' => $request->filled('astro_state') ? 'string' : '',
            'astro_pincode' => $request->filled('astro_pincode') ? 'numeric|digits:6' : '',
            'astro_other_job' => $request->filled('astro_other_job') ? 'string' : '',
            'astro_gst_name' => $request->filled('astro_gst_name') ? 'string' : '',
            'astro_gst' => $request->filled('astro_gst') ? 'string' : '',
            'astro_jyotish_language' => $request->filled('astro_jyotish_language') ? 'string' : '',
            'astro_types' => $request->filled('astro_types') ? 'string' : '',
            'astro_slot' => $request->filled('astro_slot') ? 'string' : '',
            'astro_price' => $request->filled('astro_price') ? 'numeric' : '',
            'astro_aadhar_pic' => 'image|mimes:jpeg,png,jpg|max:2048',
            'astro_about' => $request->filled('astro_about') ? 'string' : '',
            'astro_final_price' => $request->filled('astro_final_price') ? 'string' : '',
        ]);

        $check = Astrologer::where('astro_id',$request->astro_id)->where('verification','0')->where('deleted_at',NULL)->first();
        if($check){
            if($request->astro_phone){
                $check_p = Astrologer::where('astro_id','!=',$request->astro_id)->where('astro_phone',$request->astro_phone)->where('deleted_at',NULL)->first();
                if(!is_null($check_p)){
                    return back()->with('fail','Something Went Wrong, Please Try Again');
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
                    }
                }
            }
           return back()->with('success','Profile Updated Successfully');
        }
        return back()->with('fail','Something Went Wrong');
    }


    public function astrologer_filter(Request $request){
        $state = '';
        $city = '';

        $astro = Astrologer::whereNULL('deleted_at');
        if($request->state && !is_null($request->state)){
            $state = $request->state;
            $astro = $astro->where('astro_state',$request->state);
        }
        if($request->city && !is_null($request->city)){
            $filter_city = $request->city;
            $astro = $astro->where('astro_city',$request->city);
        }

        $astro = $astro->latest()->get();

        return view('admin.astrology.astrologer',compact('astro','filter_city','state'));
    }


    // Astrologer WIthdraw
    public function withdraw_request(){
        $data = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_status','0')->latest()->get();
        return view('admin.astrology.withdraw.pending-withdraw',compact('data'));
    }

    public function complete_request(){
        $data = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_status','1')->latest()->get();
        return view('admin.astrology.withdraw.complete-withdraw',compact('data'));
    }

    public function rejected_request(){
        $data = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_status','2')->latest()->get();
        return view('admin.astrology.withdraw.rejected-withdraw',compact('data'));
    }



    public function verify_withdraw(Request $request){
        $check = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_id',$request->data)->first();
        if($check){
            $update = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_id',$request->data)->update(['withdraw_status'=>'1']);

            // Send Notification
            $fcm_token2 = get_fcm_key($check->astro_id);
            $title2 ='Withdraw Successsfull';
            $body2 = 'Your Withdraw Request has been proceed successsfully, It will credited to your account within 72 Hrs!';
            $sender_id2 = $check->astro_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

        }
        return 1;
    }

    public function reject_withdraw(Request $request){
        $check = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_id',$request->data)->first();
        if($check){
            $fcm_token = pujari_fcm($check->astro_id);
            $update = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_id',$request->data)->update(['withdraw_status'=>'2']);
            if($update==1){
                $wallet_check = Astrologer::where('astro_id',$check->astro_id)->where('deleted_at',NULL)->first();
                $wallet = $wallet_check->astro_wallet??0;
                $newWallet = $wallet +  $check->amount;
                $update = Astrologer::where('astro_id',$check->astro_id)->where('deleted_at',NULL)->update(['astro_wallet' => $newWallet]);
            }
            // Send Notification
            $fcm_token2 = get_fcm_key($check->astro_id);
            $title2 ='Withdraw Rejected';
            $body2 = 'Your Withdraw Request has been rejected!';
            $sender_id2 = $check->astro_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

        }
        return 1;
    }



    public function initate_refund_astro_booking(Request $request){
        $rules = $request->validate([
            'booking_id' => 'required|string',
            'screeenshot' => 'image|mimes:jpeg,png,jpg|max:2048',
            'transection_id' => '',
        ]);
        $booking = AstrologerBooking::where('booking_id',$request->booking_id)->first();
        if($booking){
            if ($request->hasFile('screeenshot')) {
                $path = public_path('astrologer/cancel');
                $image = $booking->booking_id.'_sc.'.$request->file('screeenshot')->getClientOriginalExtension();
                $request->file('screeenshot')->move($path, $image);
            }

            $update = AstrologerBooking::where('booking_id',$request->booking_id)->update(['booking_status' => '3','can_transection_id'=>$request->transection_id,'can_scrnshot'=>$image]);

            // Send Notification
            $fcm_token2 = get_fcm_key($booking->jajmaan_id);
            $title2 ='Refund Initated';
            $body2 = 'Your cancelled booking refund has been initated, It will credit to your account within 7 to 10 business days.';
            $sender_id2 = $booking->jajmaan_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

            return back()->with('success','Reunded Successfully');

        }
    }


}

