<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Kathavachak;
use App\Models\KathavachkLeave;
use App\Models\KathavachakBankDetail;
use App\Models\KathavachakBooking;
use App\Models\KathavachkRating;
use App\Models\Katha;
use App\Models\Jajmaan;
use App\Models\Astrologer;
use App\Models\PoojaPujari;
use App\Models\ServiceLanguage;
use App\Models\VendorServiceProvides;
use App\Models\Notifications;
use App\Models\AppReview;
use App\Models\Blog;
use App\Models\ExtraPayment;
use App\Models\Banner;
use App\Models\TermCondition;
use App\Models\PrivacyPolicy;
use App\Models\PaymentTable;
use App\Jobs\SendBulkNotification;
use Validator;
use Str;
use File;
use DB;

class PujarijiController extends Controller
{
    //  Katha List
    public function kathas(){
        $list = VendorServiceProvides::whereNULL('deleted_at')->where('service_provider','1')->orderBy('service_name','asc')->get();
        return view('admin.pujariji.khata-list',compact('list'));
    }
    //  Katha List
    public function astrology(){
        $list = VendorServiceProvides::whereNULL('deleted_at')->where('service_provider','0')->orderBy('service_name','asc')->get();
        return view('admin.pujariji.astrology-list',compact('list'));
    }
    //  Katha List
    public function pooja_perform(){
        $list = VendorServiceProvides::whereNULL('deleted_at')->where('service_provider','2')->orderBy('service_name','asc')->get();
        return view('admin.pujariji.pooja_perform-list',compact('list'));
    }


    // Kathavachak Stauts on off
    public function update_types(Request $request){
        $service = VendorServiceProvides::whereNull('deleted_at')->where('service_id',$request->data)->first();
        $status = '1';
        if($service){
            $status = $service->status=='0'?'1':'0';
            $update = VendorServiceProvides::whereNull('deleted_at')->where('service_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_types(Request $request){
        $Katha = VendorServiceProvides::whereNull('deleted_at')->where('service_id',$request->data)->first();
        if($Katha){
            $update = VendorServiceProvides::whereNull('deleted_at')->where('service_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
        }
        return $update;
    }


    public function save_types(Request $request){
        $request->validate([
            'id' => '',
            'service_name' => 'required',
            'description' => '',
            'service_provider' => 'required',
            'image' => '',
        ]);
        $image = '';
        if(!is_null($request->id)){
            $id = $request->id;
            $get_previous = VendorServiceProvides::where('service_id', $id)->first();
            $image = $get_previous->origional_image;
        }else{
            $id = 'PVT' . date('dmy') . last_id('vendor_service_provides');
            if ($request->hasFile('image')) {
                $path = public_path('pujariji_pic/vendor_service_types');
                $image = $id.'_img.'.$request->file('image')->getClientOriginalExtension();
                $imagePath = $request->file('image')->move($path, $image);
            }
        }

        // dd($id);
        $save = VendorServiceProvides::updateOrCreate(
            ['service_id' => $id],
            [
                'service_name'     => $request->service_name,
                'description'      => $request->description,
                'image'            => $image,
                'service_provider' => $request->service_provider,
                'date'             => date('Y-m-d'),
            ]
        );
        if($save){
            return back()->with('success','Saved Successfully');
        }else{
            return back()->with('fail','Something Went Wrong');
        }
    }



    public function edit_data_types(Request $request){
        $list = VendorServiceProvides::whereNull('deleted_at')->where('service_id',$request->data)->first();
        return $list;
    }



    //  Katha Language List
    public function language(){
        $laguages = ServiceLanguage::whereNULL('deleted_at')->orderBy('language','asc')->get();
        return view('admin.pujariji.language',compact('laguages'));
    }


    // Kathavachak Stauts on off
    public function update_language(Request $request){
        $Katha = ServiceLanguage::whereNull('deleted_at')->where('language_id',$request->data)->first();
        $status = '1';
        if($Katha){
            $status = $Katha->status=='0'?'1':'0';
            $update = ServiceLanguage::whereNull('deleted_at')->where('language_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_language(Request $request){
        $Katha = ServiceLanguage::whereNull('deleted_at')->where('language_id',$request->data)->first();
        if($Katha){
            $update = ServiceLanguage::whereNull('deleted_at')->where('language_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
        }
        return $update;
    }


    public function save_language(Request $request){
        $request->validate([
            'id' => '',
            'language' => 'required',
            'language_hindi' => 'required',
        ]);
        if(!is_null($request->id)){
            $id = $request->id;
        }else{
            $id = 'PKL' . date('dmy') . last_id('service_languages');
        }
        $save = ServiceLanguage::updateorCreate([
            'language_id' => $id
        ],[
            'language' => $request->language,
            'language_hindi' => $request->language_hindi,
            'date'=>date('Y-m-d')
        ]);

        if($save){
            return back()->with('success','New Language Added');
        }else{
            return back()->with('fail','Something Went Wrong');
        }
    }



    public function edit_data_language(Request $request){
        $language = ServiceLanguage::whereNull('deleted_at')->where('language_id',$request->data)->first();
        return $language;
    }

    public function addNewBlog()
    {
        return view('admin.blog.add-new-blog');
    }
    public function blog_list(){
        $blogs = Blog::whereNull('deleted_at')->latest()->get();
        return view('admin.blog.blog-list',compact('blogs'));
    }


    public function delete_blog(Request $request){
        $check = Blog::whereNull('deleted_at')->where('blog_id',$request->data)->first();
        if($check){
            $update = Blog::whereNull('deleted_at')->where('blog_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            if($update=='1'){
            // Send Notification
                $fcm_token2 = get_fcm_key($check->added_by);
                $title2 ='Blog Rejected';
                $body2 = 'Warning! Your blog has been rejected by Pujari Ji due to some reasons!';
                $sender_id2 = $check->added_by;
                send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification
            }
        }
        return $update;
    }
    public function saveNewBlog(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
        ]);

        // Save the blog
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        
        // Save the image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->blog_image = $imagePath;
        }

        $blog->added_by = auth()->id(); 
        $blog->status = '1'; // Set default status for new blog
        $blog->save();
        // dd($blog);

        return redirect()->route('admin.blog.list')->with('success', 'Blog added successfully!');
    }

    // Kathavachak Stauts on off
    public function update_blog(Request $request){
        $Katha = Blog::whereNull('deleted_at')->where('blog_id',$request->data)->first();
        $status = '1';
        if($Katha){
            $status = $Katha->status=='0'?'1':'0';
            $update = Blog::whereNull('deleted_at')->where('blog_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }

    // Kathavachak Stauts on off
    public function get_blog(Request $request){
        $blog = Blog::whereNull('deleted_at')->where('blog_id',$request->data)->first();
        return $blog;
    }


    public function pending_blog_list(){
        $blogs = Blog::whereNull('deleted_at')->where('status','1')->latest()->get();
        return view('admin.blog.pending-blog',compact('blogs'));
    }

    public function approve_blog(Request $request){
        $check = Blog::whereNull('deleted_at')->where('blog_id',$request->data)->first();
        if($check){
            $update = Blog::whereNull('deleted_at')->where('blog_id',$request->data)->update(['status'=>'0']);
            // Send Notification
            $fcm_token2 = get_fcm_key($check->added_by);
            $title2 ='Blog Verified';
            $body2 = 'Congratulations! Your blog has been verified!';
            $sender_id2 = $check->added_by;
            send_save_individual_nitification($fcm_token2,$title2,$body2,$sender_id2); // Vendor Notification
        }
        return $update;
    }



    public function state_list(){
        $array = [];
        $states = DB::table('pujari_state')->orderBy('state')->get();
        foreach ($states as $key => $value) {
            $array[] = $value->state;
        }
        $select_states = DB::table('states')->whereNotIn('state_title',$array)->orderBy('state_title')->get();
        return view('admin.state-city.state',compact('states','select_states'));
    }

    public function save_state_post(Request $request){
        $request->validate([
            'state_name' => 'required',
            'state_name_hindi' => 'required',
        ]);

        $save = DB::table('pujari_state')->insert([
            'state' => $request->state_name,
            'state_hindi' => $request->state_name_hindi
        ]);

        if($save){
            return back()->with('success','State Saved Successfully');
        }else{
            return back()->with('fail','Something Went Wrong');
        }
    }

    // Kathavachak Stauts on off
    public function update_state(Request $request){
        $check = DB::table('pujari_state')->where('id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = DB::table('pujari_state')->where('id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }
    // Kathavachak Stauts on off
    public function delete_state(Request $request){
        $delete = DB::table('pujari_state')->where('id',$request->data)->delete();
        return $delete;
    }


    public function city_list(){
        $states = DB::table('pujari_state')->orderBy('state')->get();
        $cities = DB::table('pujari_city')->orderBy('city')->get();
        return view('admin.state-city.city',compact('cities','states'));
    }

    public function save_city(Request $request){
        $request->validate([
            'state_id' => 'required',
            'city_name' => 'required',
            'city_name_hindi' => 'required',
        ]);

        $save = DB::table('pujari_city')->insert([
            'city' => $request->city_name,
            'city_hindi' => $request->city_name_hindi,
            'state_id' => $request->state_id
        ]);

        if($save){
            return back()->with('success','City Saved Successfully');
        }else{
            return back()->with('fail','Something Went Wrong');
        }
    }


    // Kathavachak Stauts on off
    public function update_city(Request $request){
        $Katha = DB::table('pujari_city')->where('id',$request->data)->first();
        $status = '1';
        if($Katha){
            $status = $Katha->status=='0'?'1':'0';
            $update = DB::table('pujari_city')->where('id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }
    // Kathavachak Stauts on off
    public function delete_city(Request $request){
        $delete = DB::table('pujari_city')->where('id',$request->data)->delete();
        return $delete;
    }


    // public function update_city(Request $request){
    //     $request->validate([
    //         'city_id' => 'required',
    //         'state_id' => 'required',
    //         'city_name' => 'required',
    //         'city_name_hindi' => 'required',
    //     ]);

    //     $save = DB::table('pujari_city')->where('id',$request->city_id)->update([
    //         'city' => $request->city_name,
    //         'city_hindi' => $request->city_name_hindi,
    //         'state_id' => $request->state_id
    //     ]);
    //     if($save){
    //         return back()->with('success','City Saved');
    //     }else{
    //         return back()->with('fail','Something Went Wrong');
    //     }
    // }


    public function send_notification(Request $request){
        $request->validate([
            'sender_id' => 'required',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'fcm_token' => 'required',
            'body' => 'required',
        ]);


            $fcm = $request->fcm_token;
            $title = $request->title;
            $body = $request->body;
            $type = !is_null($request->type)?'1':'0';
            $send = send_individual_nitification($fcm,$title,$body);
            // if($send){
                $save = Notifications::create([
                    'notfication_to' => $type,
                    'send_to' => $request->sender_id,
                    'notification_by' => 'Admin',
                    'date' => date('d-m-Y'),
                    'msg' => $request->body,
                    'title' => $request->title,
                    'body' => $request->body,
                    'image' => '',
                ]);
                return back()->with('success','Notification Sent Successfully');
            // }else{
            //     return back()->with('success','Notification Sent Successfully');
            // }
    }


    public function raised_query(){
        $data = AppReview::whereNull('deleted_at')->latest()->get();
        foreach ($data as $key => $value) {
            $name = '';
            $mobile = '';
            $type = '';
            if($check = Kathavachak::where('kthavchk_id',$value->review_by)->first()){
                $name = $check->kthavchk_name.' '.$check->kthavchk_surname;
                $mobile = $check->kthavchk_phone;
                $type = '0';
            }
            if($check = Jajmaan::where('jajmaan_id',$value->review_by)->first()){
                $name = $check->name.' '.$check->surname;
                $mobile = $check->phone;
                $type = '1';
            }
            if($check = Astrologer::where('astro_id',$value->review_by)->first()){
                $name = $check->astro_name.' '.$check->astro_surname;
                $mobile = $check->astro_phone;
                $type = '2';
            }
            if($check = PoojaPujari::where('pujari_id',$value->review_by)->first()){
                $name = $check->name.' '.$check->surname;
                $mobile = $check->phone_number;
                $type = '3';
            }
            $value->name = $name;
            $value->mobile = $mobile;
            $value->type = $type;
        }
        return view('admin.pujariji.app-review',compact('data'));
    }

    public function delete_app_review(Request $request){
        $data = AppReview::whereNull('deleted_at')->where('review_id',$request->data)->first();
        if($data){
            $update = AppReview::whereNull('deleted_at')->where('review_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }



    public function get_vendor_cities(Request $request){
            $check = DB::table('pujari_state')->where('state',$request->data)->first();
            $cities = DB::table('pujari_city')->where('state_id',$check->id)->where('status','0')->orderBy('city','asc')->get();
            return $cities;
    }


    public function extra_payment_history(Request $request){
        $list = ExtraPayment::whereNull('deleted_at')->latest()->get();
        return view('admin.pujariji.extra-payments',compact('list'));
    }

    public function delete_payment(Request $request){
        $list = ExtraPayment::whereNull('deleted_at')->where('pay_id',$request->data)->first();
        if($list){
            $list = ExtraPayment::whereNull('deleted_at')->where('pay_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
        }
        return 1;
    }


    public function app_banner(Request $request){
        $list = Banner::whereNull('deleted_at')->orderBy('screen','asc')->get();
        return view('admin.pujariji.banner',compact('list'));
    }

    public function delete_banner(Request $request){
        $check = Banner::whereNull('deleted_at')->where('id',$request->data)->first();
        if($check){
            if (file_exists(url('banner_image',$check->origional_image))){
                $delete  = File::deleteDirectory(url('banner_image',$check->origional_image));
            }
            $list = Banner::whereNull('deleted_at')->where('id',$request->data)->delete();
        }
        return 1;
    }

        // Kathavachak Stauts on off
    public function uppdate_banner(Request $request){
        $check = Banner::whereNull('deleted_at')->where('id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = Banner::whereNull('deleted_at')->where('id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function saveBanner(Request $request)
    {
        // Validate the form data
        $request->validate([
            'screen_id' => 'required',
            'banner_images' => 'required|array',
            'banner_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = public_path('banner_image');
        // Process the form data
        $screenId = $request->input('screen_id');

        if ($request->hasFile('image')) {
                $path = public_path('pujariji_pic/vendor_service_types');
                $image = $id.'_img.'.$request->file('image')->getClientOriginalExtension();
                $imagePath = $request->file('image')->move($path, $image);
            }

        // Store the images in the public directory and database
        foreach ($request->file('banner_images') as $image) {
            $imageName = time().'_img.'.$image->getClientOriginalExtension();
            $imagePath = $image->move($path, $imageName);

            if($screenId=='4'){
                for ($i = 0; $i <= 3; $i++) {
                    $banner = new Banner();
                    $banner->screen = (string)$i;
                    $banner->image = $imageName;
                    $banner->save();
                }
            }else {
                $banner = new Banner();
                $banner->screen = $screenId;
                $banner->image = $imageName;
                $banner->save();
            }
        }

        // Redirect or return a response
        return redirect()->back()->with('success', 'Banner images saved successfully');
    }


    public function term_condition(Request $request){
        $data = TermCondition::whereNull('deleted_at')->first();
        return view('admin.pujariji.term-condition',compact('data'));
    }


    public function udpdate_term_condition(Request $request){
        $save = TermCondition::updateorCreate([
            'id' => '1'
        ],[
            'tc_content' => $request->tc_content
        ]);
        return back()->with('success', 'Updated Successfully');
    }


    public function privacy_policy(Request $request){
        $data = PrivacyPolicy::whereNull('deleted_at')->first();
        return view('admin.pujariji.privacy-policy',compact('data'));
    }


    public function udpdate_privacy_policies(Request $request){
        $save = PrivacyPolicy::updateorCreate([
            'id' => '1'
        ],[
            'pp_content' => $request->pp_content
        ]);
        return back()->with('success', 'Updated Successfully');
    }


    public function send_vendor_notification(){
        $kathavack = Kathavachak::whereNull('deleted_at')->where('status','0')->get();
        $astro = Astrologer::whereNull('deleted_at')->where('status','0')->get();
        $pujari = PoojaPujari::whereNull('deleted_at')->where('status','0')->get();
        $data = [];
        // dd($kathavack);
        foreach($kathavack as $key=>$value){
            $data[$value->kthavchk_id] = $value->kthavchk_name.' '.$value->kthavchk_surname;
        }
        foreach($astro as $key=>$value){
            $data[$value->astro_id] = $value->astro_name.' '.$value->astro_surname;
        }
        foreach($pujari as $key=>$value){
            $data[$value->pujari_id] = $value->name.' '.$value->surname;
        }
        return view('admin.pujariji.send-vendor-notification',compact('data'));
    }

    public function send_user_notification(){
        $list = Jajmaan::whereNull('deleted_at')->where('status','0')->get();
        foreach ($list as $key => $value) {
            $data[$value->jajmaan_id] = $value->name.' '.$value->surname;
        }
        return view('admin.pujariji.send-user-notification',compact('data'));
    }


    public function send_bulk_notification_post(Request $request)
    {
        $request->validate([
            'sender_id' => 'required|array',
            'title' => 'required',
            'body' => 'required',
        ]);

        $title = $request->title;
        $body = $request->body;

        foreach ($request->sender_id as $sender) {
            $fcm = get_fcm_key($sender);
            $type = get_vendor_name($sender)['type'] == 'Jajmaan' ? '0' : '1';

            $save = Notifications::create([
                'notfication_to' => $type,
                'send_to' => $sender,
                'notification_by' => 'Admin',
                'date' => date('d-m-Y'),
                'msg' => $body,
                'title' => $title,
                'body' => $body,
                'image' => '',
            ]);

            send_save_individual_nitification($fcm,$title,$body,$sender);
            // $this->dispatchNotificationJob($sender, $title, $body);
        }

        return back()->with('success', 'Notifications Sent Successfully');
    }

    protected function dispatchNotificationJob($sender, $title, $body)
    {
        dispatch(new SendBulkNotification($sender, $title, $body));
        \Log::info("Notification job dispatched for sender: $sender");
    }


    public function yajman_contact_details(){
        $data = Jajmaan::whereNull('deleted_at')->get();
        return view('admin.pujariji.yajman_contact_details',compact('data'));
    }

    public function astrologer_contact_details(){
        $data = Astrologer::whereNull('deleted_at')->get();
        return view('admin.pujariji.astrologer_contact_details',compact('data'));
    }

    public function kathavachak_contact_details(){
        $data = Kathavachak::whereNull('deleted_at')->get();
        return view('admin.pujariji.kathavachak_contact_details',compact('data'));
    }

    public function pujari_contact_details(){
        $data = PoojaPujari::whereNull('deleted_at')->get();
        return view('admin.pujariji.pujari_contact_details',compact('data'));
    }


    public function get_cities(Request $request){
        $array = [];
        $pujari_state = DB::table('pujari_state')->where('id', $request->data)->first();
        $pujari_city = DB::table('pujari_city')->get();
        foreach ($pujari_city as $key => $value) {
           $array[] = $value->city;
        }
        $states = DB::table('states')->where('state_title', '=', $pujari_state->state)->first();
        $cities = DB::table('cities')->where('state_id',$states->id)->whereNotIn('name',$array)->orderBy('name','asc')->get();
        return $cities;
    }

    public function payment_history(){
        $data = PaymentTable::where('seen_status','1')->latest()->get();
        return view('admin.pujariji.payment-table',compact('data'));
    }



}
