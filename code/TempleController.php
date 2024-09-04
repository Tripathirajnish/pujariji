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
    Temple,
    TemplePooja,
    TemplePoojaRating,
    TemplePoojaPackage,
    TemplePoojaInclusion,
    TemplePoojaBooking
};
use DataTables;
use Str;
use File;
use Validator;


class TempleController extends Controller
{
/*------------------------------------------------- Pooja Category ------------------------------------------------------------------*/
    public function temple_list(){
        $data = Temple::whereNull('deleted_at')->latest()->get();
        foreach($data as $val){
            $count = TemplePooja::where('temple_id',$val->temple_id)->whereNull('deleted_at')->count();
            $val->t_pooja = $count;
        }
        return view('admin.temple-bookings.temple.temple-list',compact('data'));
    }



    // Save Event
    public function save_temple(Request $request){
        $request->validate([
            'temple_id' => '',
            'temple_name' => 'required|string',
            'temple_name_hindi' => 'required|string',
            'temple_image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if($request->temple_id){
            $id = $request->temple_id;
            $check = Temple::where('temple_id',$id)->whereNull('deleted_at')->first();
            $imageName = $check->image;
        }else{
            $id = 'PTM'.rand(1111,9999).last_id('temples');
            $imageName = '';
        }

        if ($request->hasFile('temple_image')) {
            $path = public_path('temple_image');
            $imageName = $id.'_image.'.$request->file('temple_image')->getClientOriginalExtension();
            $aadharImagePath = $request->file('temple_image')->move($path, $imageName);
        }


        $save = Temple::updateOrCreate(
            ['temple_id' => $id],
            [
                'temple_name' => $request->input('temple_name'),
                'temple_name_hindi' => $request->input('temple_name_hindi'),
                'temple_image' => $imageName
            ]
        );
        if($save){
           return back()->with('success','Saved Successfully');
        }else{
           return back()->with('fail',"Couldn't Saved");
        }
    }


    public function get_temple(Request $request){
        $data = Temple::where('temple_id',$request->data)->first();
        return $data;
    }


    public function update_temple(Request $request){
        $pooja = Temple::whereNull('deleted_at')->where('temple_id',$request->data)->first();
        $status = '1';
        if($pooja){
            $status = $pooja->status=='0'?'1':'0';
            $update = Temple::whereNull('deleted_at')->where('temple_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }



    public function pooja_list(){
        $data = TemplePooja::whereNull('deleted_at')->latest()->get();
        return view('admin.temple-bookings.pooja.pooja-list',compact('data'));
    }


    public function update_temple_pooja(Request $request){
        $pooja = TemplePooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        $status = '1';
        if($pooja){
            $status = $pooja->status=='0'?'1':'0';
            $update = TemplePooja::whereNull('deleted_at')->where('pooja_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_temple_pooja(Request $request){
        $pooja = TemplePooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        if($pooja){
            $update = TemplePooja::whereNull('deleted_at')->where('pooja_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }


    public function add_new_temple_pooja(){
        $data = Temple::whereNull('deleted_at')->where('status', '0')->orderBy('temple_name','asc')->get();
        return view('admin.temple-bookings.pooja.add_new_pooja',compact('data'));
    }

    public function save_pooja(Request $request){
        $request->validate([
            'pooja_id' => '',
            'pooja_name' => 'required|string',
            'pooja_name_hindi' => 'required|string',
            'temple' => 'required|string',
            'min_price' => 'required|numeric|gt:0',
            'max_price' => 'required|numeric|gte:min_price',
            'pooja_description' => 'required|string',
            'pooja_description_hindi' => 'required|string',
            'selected_image' => 'required_if:pooja_id,|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->pooja_id){
            $id = $request->pooja_id;
            $check = TemplePooja::where('pooja_id',$id)->whereNull('deleted_at')->first();
            $imageName = $check->origional_image;
        }else{
            $id = 'PJID'.rand(1111,9999).last_id('temple_poojas');
            $imageName = '';
        }

        if ($request->hasFile('selected_image')) {
            $path = public_path('temple/pooja_image');
            $imageName = $id.'_image.'.$request->file('selected_image')->getClientOriginalExtension();
            $aadharImagePath = $request->file('selected_image')->move($path, $imageName);
        }

        $save = TemplePooja::updateOrCreate(
            ['pooja_id' => $id],
            [
                'date' => date('Y-m-d'),
                'name' => $request->input('pooja_name'),
                'name_hindi' => $request->input('pooja_name_hindi'),
                'image' => $imageName,
                'temple_id' => $request->input('temple'),
                'min_price' => $request->input('min_price'),
                'max_price' => $request->input('max_price'),
                'description' => $request->input('pooja_description'),
                'description_hindi' => $request->input('pooja_description_hindi')
            ]
        );
        if($save){
           return back()->with('success','Pooja Saved Successfully');
        }else{
           return back()->with('fail',"Pooja Couldn't Saved");
        }
    }




    public function edit_temple_pooja($id){
        $data = Temple::whereNull('deleted_at')->where('status', '0')->orderBy('temple_name','asc')->get();
        $pooja = TemplePooja::whereNull('deleted_at')->where('pooja_id', base64_decode($id))->first();
        return view('admin.temple-bookings.pooja.edit_pooja',compact('data','pooja'));
    }



/*------------------------------------------------- Pooja Package ------------------------------------------------------------------*/

    public function temple_package_list(){
        $data = TemplePoojaPackage::whereNull('deleted_at')->latest()->get();
        foreach ($data as $key => $value) {
            $pooja = TemplePooja::whereNull('deleted_at')->where('pooja_id', $value->pooja_id)->first();
            $inclusion = TemplePoojaInclusion::where('package_id',$value->package_id)->where('status','0')->whereNull('deleted_at')->count();
            $value->inclusion = $inclusion;
            $value->pooja = $pooja->name;
            $value->pooja_hindi = $pooja->name_hindi;
        }
        return view('admin.temple-bookings.package.pooja-package',compact('data'));
    }


    public function get_pooja_details(Request $request){
        $pooja = TemplePoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->first();
        return $pooja;
    }


    public function update_package(Request $request){
        $check = TemplePoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = TemplePoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_package(Request $request){
        $check = TemplePoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->first();
        if($check){
            $update = TemplePoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }


    public function add_new_package(){
        $data = TemplePooja::whereNull('deleted_at')->latest()->get();
        return view('admin.temple-bookings.package.add-package',compact('data'));
    }


    public function edit_package($id){
        $id = base64_decode($id);
        $data = TemplePoojaPackage::whereNull('deleted_at')->where('package_id',$id)->first();
        $pooja = TemplePooja::whereNull('deleted_at')->latest()->get();
        return view('admin.temple-bookings.package.edit-package',compact('data','pooja'));
    }


    public function save_package(Request $request){
        $request->validate([
            'package_id' => '',
            'pooja' => 'required|string',
            'package_name' => 'required|string',
            'package_name_hindi' => 'required|string',
            'package_price' => 'required',
            'procedure' => 'required',
            'procedure_hindi' => 'required|string',
            'package_description' => 'required|string',
            'package_description_hindi' => 'required|string'
        ]);

        if($request->package_id){
            $id = $request->package_id;
        }else{
            $id = 'TPK'.rand(1111,9999).last_id('pooja_packages');
        }

        $save = TemplePoojaPackage::updateOrCreate(
            ['package_id' => $id],
            [
                'pooja_id' => $request->input('pooja'),
                'name' => $request->input('package_name'),
                'name_hindi' => $request->input('package_name_hindi'),
                'price' => $request->input('package_price'),
                'procudre' => $request->input('procedure'),
                'procedure_hindi' => $request->input('procedure_hindi'),
                'description' => $request->input('package_description'),
                'description_hindi' => $request->input('package_description_hindi')
            ]
        );
        if($save){
           return back()->with('success','Package Saved Successfully');
        }else{
           return back()->with('fail',"Package Couldn't Saved");
        }
    }


    public function get_temple_package_list(Request $request){
        $pooja_id = $request->input('pooja_id');
        $package = TemplePoojaPackage::where('pooja_id', $pooja_id)->get();
        return response()->json($package);
    }



/*------------------------------------------------- Inclusions ------------------------------------------------------------------*/
    public function inclusion_list(){
        $pooja = TemplePooja::whereNull('deleted_at')->get();
        $data = TemplePoojaInclusion::whereNull('deleted_at')->latest()->get();
        $package = TemplePoojaPackage::whereNull('deleted_at')->latest()->get();
        foreach ($data as $key => $value) {
            $pack = TemplePoojaPackage::where('package_id',$value->package_id)->first();
            $poojas = TemplePooja::whereNull('deleted_at')->where('pooja_id', $pack->pooja_id)->first();
            $value->package = $pack->name;
            $value->package_hindi = $pack->name_hindi;
            $value->pooja = $poojas->name;
            $value->pooja_hindi = $poojas->name_hindi;
        }
        return view('admin.temple-bookings.inclusions.inclusion',compact('data','package','pooja'));
    }


    public function update_inclusion(Request $request){
        $check = TemplePoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = TemplePoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_inclusion(Request $request){
        $check = TemplePoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->first();
        if($check){
            $update = TemplePoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

    public function save_inclusion(Request $request){
        $request->validate([
            'inclusion_id' => '',
            'package_id' => 'required|string',
            'inclusion_name' => 'required|string',
            'inclusion_name_hindi' => 'required|string',
            'inclusion_price' => 'required|numeric',
        ]);

        if($request->inclusion_id){
            $id = $request->inclusion_id;
        }else{
            $id = 'TPI'.rand(1111,9999).last_id('pooja_inclusion');
        }

        $save = TemplePoojaInclusion::updateOrCreate(
            ['inclusion_id' => $id],
            [
                'package_id' => $request->input('package_id'),
                'name' => $request->input('inclusion_name'),
                'name_hindi' => $request->input('inclusion_name_hindi'),
                'price' => $request->input('inclusion_price')
            ]
        );
        if($save){
           return back()->with('success','Inclusion Saved Successfully');
        }else{
           return back()->with('fail',"Inclusion Couldn't Saved");
        }
    }

    public function get_inclusion(Request $request){
        $check = TemplePoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->first();
        $check->pooja_id = get_temple_pooja_name_by_package_id($check->package_id)['pooja_id'];
        $check->pooja_name = get_temple_pooja_name_by_package_id($check->package_id)['pooja_name'];
        $check->package_name = temple_package_name($check->package_id)['eng_name'];
        return $check;
    }




    public function offline_pending_pooja(){
        $data = TemplePoojaBooking::where('booking_type','1')->whereNull('deleted_at')->where('booking_status','0')->latest()->get();
        return view('admin.temple-bookings.offline-booking.pending-list',compact('data'));
    }

    public function offline_completed_pooja(){
        $data = TemplePoojaBooking::where('booking_type','1')->whereNull('deleted_at')->where('booking_status','1')->latest()->get();
        return view('admin.temple-bookings.offline-booking.completed-list',compact('data'));
    }

    public function offline_cancelled_request(){
        $data = TemplePoojaBooking::where('booking_type','1')->whereNull('deleted_at')->where('booking_status','2')->latest()->get();
        return view('admin.temple-bookings.offline-booking.cancelled-list',compact('data'));
    }

    public function offline_completed_cancelled_request(){
        $data = TemplePoojaBooking::where('booking_type','1')->whereNull('deleted_at')->where('booking_status','3')->latest()->get();
        return view('admin.temple-bookings.offline-booking.completed-cancelled-booking',compact('data'));
    }



    public function online_pending_pooja(){
        $data = TemplePoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','0')->latest()->get();
        return view('admin.temple-bookings.online-booking.pending-list',compact('data'));
    }

    public function online_completed_pooja(){
        $data = TemplePoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','1')->latest()->get();
        return view('admin.temple-bookings.online-booking.completed-list',compact('data'));
    }

    public function online_cancelled_request(){
        $data = TemplePoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','2')->latest()->get();
        return view('admin.temple-bookings.online-booking.cancelled-list',compact('data'));
    }

    public function online_completed_cancelled_request(){
        $data = TemplePoojaBooking::where('booking_type','0')->whereNull('deleted_at')->where('booking_status','3')->latest()->get();
        return view('admin.temple-bookings.online-booking.completed-cancelled-booking',compact('data'));
    }

    public function get_booking_details(Request $request){
        return $booking = TemplePoojaBooking::where('booking_id',$request->data)->first();
    }

    public function update_pujari_details(Request $request){
        $rules = $request->validate([
            'booking_id' => 'required|string',
            'pujariji_details' => 'required|string',
        ]);
        $check = TemplePoojaBooking::whereNull('deleted_at')->where('booking_id',$request->booking_id)->first();
        if($check){
            $fcm_token = pujari_fcm($check->pujari_id);
            $update = TemplePoojaBooking::whereNull('deleted_at')->where('booking_id',$request->booking_id)->update(['booking_status'=>'1','online_admin_info'=>$request->pujariji_details]);

        // Send Notification
        $fcm_token = jajmaan_fcm($check->jajmaan_id);
        $title ='Temple Booking Complete';
        $body = 'Congratulations! Your Temple booking has been successfully completed. Thank you for choosing our services, give us your feedback!';
        $sender_id = $check->jajmaan_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

            // $send = FCMService::send(
            //     $fcm_token,
            //     [
            //         'title' =>'Pooja Completed',
            //         'body' =>'Your Pooja has been completed successfully!'
            //     ]
            // );
        }
        return back()->with('success','Updated Successfully');
    }



    public function get_pooja_package_inclusion_detail(Request $request){
        $data = '';
        $booking = TemplePoojaBooking::where('booking_id',$request->data)->first();
        if($booking){
            $package = TemplePoojaPackage::where('package_id',$booking->package_id)->first();
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
        $booking = TemplePoojaBooking::where('booking_id',$request->booking_id)->first();
        if($booking){
            if ($request->hasFile('screeenshort')) {
                $path = public_path('temple/cancel');
                $image = $booking->booking_id.'_sc.'.$request->file('screeenshort')->getClientOriginalExtension();
                $request->file('screeenshort')->move($path, $image);
            }
            $update = TemplePoojaBooking::where('booking_id',$request->booking_id)->update(['booking_status' => '3','can_transection_id'=>$request->transection_id,'can_scrnshot'=>$image]);

            // Send Notification
            $fcm_token2 = get_fcm_key($booking->jajmaan_id);
            $title2 ='Refund Initated';
            $body2 = 'Your cancelled temple booking refund has been initated, It will credit to your account within 7 to 10 business days!';
            $sender_id2 = $booking->jajmaan_id;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification

            return back()->with('success','Reunded Successfully');

        }
    }


    public function gettemplepoojadetails(Request $request){
        $pooja = TemplePooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        return $pooja;
    }


}
