<?php

namespace App\Http\Controllers;

use \Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\{
    Kathavachak,
    KathavachakBooking,
    AppReview,
    Blog,
    Jajmaan,

    Astrologer,
    AstroPlan,
    AstrologerBooking,
    AstroWithdrawMoney,

    Kundali,
    KundaliBooking,
    Temple,
    TemplePooja,
    TemplePoojaRating,
    TemplePoojaPackage,
    TemplePoojaInclusion,
    TemplePoojaBooking,
    EcommerceCity,
    EcommerceProduct,
    EcommerceOrderProduct,
    EventPooja,
    EventBooking,

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
    VendorServiceProvides,
    Katha,
    ServiceLanguage,
    MemberLogin,

    PaymentTable,
    Banner,

    MuhurtBooking,
    VirtualPooja,
    VirtualPoojaBooking,
    VirtualPoojaPaymentTable
};
use DateTime;
use Session;
use Str;
use Carbon\Carbon;
use App\Models\Admin;

class AdminAuthController extends Controller
{

    public function index(){
        return view('login');
    }

    // Admin Login
    public function admin_login(Request $request){
        $validated = $request->validate([
            'Email_Address' => 'required',
            'Password' => 'required',
        ]);
        $admin = Admin::where('email',$request->Email_Address)->where('password',md5($request->Password))->first();
            if($admin) {
                $request->session()->put('login_mail', base64_encode($admin->email));
                $request->session()->put('login_id', base64_encode($admin->admin_id));
                $request->session()->put('type', base64_encode('master_admin'));
                return redirect('/dashboard');
            }else{
                session::flash('fail', 'Invalid Details');
                return redirect()->back()->with('message', 'Invalid Login Details');
            }
    }


    // Admin Dashboard
    public function admin_dashboard(Request $request){
        $jajmaan = Jajmaan::whereNull('deleted_at')->count();

        $kathavachak = Kathavachak::whereNull('deleted_at')->count();
        $pendingkathavachak = Kathavachak::whereNull('deleted_at')->where('verification','1')->count();
        $kthavchak_tbm = KathavachakBooking::whereNull('deleted_at')->sum('total_price');
        $kthavchak_tb = KathavachakBooking::whereNull('deleted_at')->count();
        $kthavchak_pb = KathavachakBooking::whereNull('deleted_at')->where('booking_status','0')->count();
        $kthavchak_cb = KathavachakBooking::whereNull('deleted_at')->where('booking_status','1')->count();
        $kthavchak_cnb = KathavachakBooking::whereNull('deleted_at')->where('booking_status','2')->count();
        $kthavchak_rb = KathavachakBooking::whereNull('deleted_at')->where('booking_status','3')->count();

        $AppReview = AppReview::whereNull('deleted_at')->count();

        $blog = Blog::whereNull('deleted_at')->where('status','1')->count();
        $pending_blog = Blog::whereNull('deleted_at')->where('status','1')->count();

        $astrologer = Astrologer::whereNull('deleted_at')->count();
        $p_astro = Astrologer::whereNull('deleted_at')->where('verification','1')->count();
        $astro_tb = AstrologerBooking::whereNull('deleted_at')->count();
        $astro_pb = AstrologerBooking::whereNull('deleted_at')->where('booking_status','0')->count();
        $astro_cb = AstrologerBooking::whereNull('deleted_at')->where('booking_status','1')->count();
        $astro_cnb = AstrologerBooking::whereNull('deleted_at')->where('booking_status','2')->count();
        $astro_rb = AstrologerBooking::whereNull('deleted_at')->where('booking_status','4')->count();
        $astro_b_money = AstrologerBooking::whereNull('deleted_at')->where('booking_status','1')->sum('plan_price');
        $astro_pl = AstroPlan::whereNull('deleted_at')->count();
        $astro_pw = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_status','0')->count();
        $astro_cw = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_status','1')->count();
        $astro_tw = AstroWithdrawMoney::whereNull('deleted_at')->where('withdraw_status','1')->sum('amount');

        $kundali_tb = KundaliBooking::whereNull('deleted_at')->count();
        $kundali_pb = KundaliBooking::whereNull('deleted_at')->where('booking_status','0')->count();
        $kundali_cb = KundaliBooking::whereNull('deleted_at')->where('booking_status','1')->count();
        $kundali_cnb = KundaliBooking::whereNull('deleted_at')->where('booking_status','2')->count();
        $kundali_rb = KundaliBooking::whereNull('deleted_at')->where('booking_status','3')->count();
        $kundali_bm = KundaliBooking::whereNull('deleted_at')->sum('total');

        $muhurt_tb = MuhurtBooking::whereNull('deleted_at')->count();
        $muhurt_pb = MuhurtBooking::whereNull('deleted_at')->where('booking_status','0')->count();
        $muhurt_cb = MuhurtBooking::whereNull('deleted_at')->where('booking_status','1')->count();
        $muhurt_cnb = MuhurtBooking::whereNull('deleted_at')->where('booking_status','2')->count();
        $muhurt_rb = MuhurtBooking::whereNull('deleted_at')->where('booking_status','3')->count();
        $muhurt_bm = MuhurtBooking::whereNull('deleted_at')->sum('total');

        $temple = Temple::whereNull('deleted_at')->count();
        $temple_pooja = TemplePooja::whereNull('deleted_at')->count();
        $temple_onpm = TemplePoojaBooking::whereNull('deleted_at')->where('booking_type','0')->where('booking_status','1')->sum('total_price');
        $temple_offpm = TemplePoojaBooking::whereNull('deleted_at')->where('booking_type','1')->where('booking_status','1')->sum('total_price');
        $temple_opp = TemplePoojaBooking::whereNull('deleted_at')->where('booking_type','0')->where('booking_status','0')->count();
        $temple_ocp = TemplePoojaBooking::whereNull('deleted_at')->where('booking_type','0')->where('booking_status','1')->count();
        $temple_orp = TemplePoojaBooking::whereNull('deleted_at')->where('booking_type','0')->where('booking_status','2')->count();
        $temple_ofpp = TemplePoojaBooking::whereNull('deleted_at')->where('booking_type','1')->where('booking_status','0')->count();
        $temple_ofcp = TemplePoojaBooking::whereNull('deleted_at')->where('booking_type','1')->where('booking_status','1')->count();
        $temple_ofrp = TemplePoojaBooking::whereNull('deleted_at')->where('booking_type','1')->where('booking_status','2')->count();

        $ecom_product = EcommerceProduct::whereNull('deleted_at')->count();
        $ecom_order = EcommerceOrderProduct::whereNull('deleted_at')->where('order_status','2')->count();
        $ecom_po = EcommerceOrderProduct::whereNull('deleted_at')->where('order_status','<=','1')->count();
        $ecom_co = EcommerceOrderProduct::whereNull('deleted_at')->where('order_status','3')->count();
        $ecom_ts = EcommerceOrderProduct::whereNull('deleted_at')->where('order_status','2')->sum('total_amt');

        $event_pooja = EventPooja::whereNull('deleted_at')->count();
        $event_booking = EventBooking::whereNull('deleted_at')->where('booking_status','1')->count();
        $event_pb = EventBooking::whereNull('deleted_at')->where('booking_status','0')->count();
        $event_earning = EventBooking::whereNull('deleted_at')->where('booking_status','1')->sum('total_payment');

        $pooja = Pooja::whereNull('deleted_at')->count();
        $pooja_pujari = PoojaPujari::whereNull('deleted_at')->count();
        $pooja_pp = PoojaPujari::whereNull('deleted_at')->where('verification','1')->count();
        $pooja_rp = PoojaPujari::whereNull('deleted_at')->where('verification','2')->count();
        $pooja_oe = PoojaBooking::whereNull('deleted_at')->where('booking_type','0')->where('booking_status','1')->sum('total_price');
        $pooja_offe = PoojaBooking::whereNull('deleted_at')->where('booking_type','1')->where('booking_status','1')->sum('total_price');
        $pooja_ob = PoojaBooking::whereNull('deleted_at')->where('booking_type','0')->where('booking_status','1')->count('total_price');
        $pooja_onpb = PoojaBooking::whereNull('deleted_at')->where('booking_type','0')->where('booking_status','0')->count('total_price');
        $pooja_offb = PoojaBooking::whereNull('deleted_at')->where('booking_type','1')->where('booking_status','1')->count('total_price');
        $pooja_ofpb = PoojaBooking::whereNull('deleted_at')->where('booking_type','1')->where('booking_status','0')->count('total_price');
        $pooja_ocr = PoojaBooking::whereNull('deleted_at')->where('booking_type','0')->where('booking_status','2')->count('total_price');
        $pooja_orf = PoojaBooking::whereNull('deleted_at')->where('booking_type','0')->where('booking_status','3')->count('total_price');
        $pooja_offcr = PoojaBooking::whereNull('deleted_at')->where('booking_type','1')->where('booking_status','2')->count('total_price');
        $pooja_offrf = PoojaBooking::whereNull('deleted_at')->where('booking_type','1')->where('booking_status','3')->count('total_price');
        $pooja_pw = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdraw_status','0')->count();
        $pooja_cw = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdraw_status','1')->count();
        $pooja_tw = PoojaPujariWithdraw::whereNull('deleted_at')->where('withdraw_status','1')->sum('withdraw_amount');
        $material = PoojaMaterial::whereNull('deleted_at')->count();
        $package = PoojaPackage::whereNull('deleted_at')->count();
        $inclusions = PoojaInclusion::whereNull('deleted_at')->count();

        $banner = Banner::whereNull('deleted_at')->count();


        $language = ServiceLanguage::whereNull('deleted_at')->count();
        $astro = VendorServiceProvides::whereNull('deleted_at')->where('service_provider','0')->count();
        $katha = VendorServiceProvides::whereNull('deleted_at')->where('service_provider','1')->count();
        $pujari = VendorServiceProvides::whereNull('deleted_at')->where('service_provider','2')->count();

        $total_pyament = PaymentTable::sum('amount');

        $total_virtual_pyament = VirtualPoojaPaymentTable::sum('amount');
        $total_virtual_booking = VirtualPoojaBooking::count();
        $total_virtual_pooja = VirtualPooja::where('status','1')->count();

        $data = ['kathavachak','pendingkathavachak','kthavchak_tbm','kthavchak_tb','kthavchak_pb','kthavchak_cb','kthavchak_cnb','kthavchak_rb','AppReview','blog','jajmaan','astrologer','p_astro','astro_b_money','astro_tb','astro_pb','astro_cb','astro_cnb','astro_rb','astro_pl','astro_pw','astro_cw','astro_tw','kundali_pb','kundali_bm','kundali_tb','kundali_cb','kundali_cnb','kundali_rb','temple','temple_pooja','temple_onpm','temple_offpm','temple_opp','temple_ofpp','ecom_product','ecom_order','ecom_po','ecom_co','ecom_ts','event_pooja','event_booking','event_earning','pooja','pooja_pujari','pooja_pp','pooja_oe','pooja_offe','pooja_ob','pooja_offb','pooja_ocr','pooja_offcr','pooja_pw','pooja_cw','pooja_rp','language','katha','astro','pujari','event_pb','pooja_offrf','pooja_orf','pooja_tw','total_pyament','pending_blog','material','package','inclusions','banner','pooja_onpb','pooja_ofpb','muhurt_pb','muhurt_bm','muhurt_tb','muhurt_cb','muhurt_cnb','muhurt_rb','temple_ocp','temple_orp','temple_ofrp','temple_ofcp', 'total_virtual_pyament','total_virtual_booking','total_virtual_pooja'];
        return view('admin.dashboard',compact($data));
    }

    public function member_login(){
        return view('member-login');
    }

    public function member_login_post(Request $request){
        $validated = $request->validate([
            'Email_Address' => 'required',
            'Password' => 'required',
            'type' => 'required',
        ]);
        $check = MemberLogin::where('login_id',$request->Email_Address)->where('password',md5($request->Password))->where('type',$request->type)->first();
        if($check) {
            $request->session()->put('login_mail', base64_encode($check->login_id));
            $request->session()->put('login_id', base64_encode($check->member_id));
            $request->session()->put('type', base64_encode($check->type));
            return redirect('/dashboard');
        }else{
            session::flash('fail', 'Invalid Details');
            return back()->with('message', 'Invalid Login Details');
        }
    }


    public function get_member_login(Request $request){
        $check = MemberLogin::where('type',$request->data)->first();
        return !is_null($check) ? $check->login_id : '';
    }


    public function update_member_details(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'username' => 'required',
        ]);

        $admin = MemberLogin::where('type',$request->type)->first();
        $data = [
            'login_id'=>$request->username,
        ];
        if($request->password){
            $data[] = [
                'password'=>md5($request->password),
            ];
        }

        $save = MemberLogin::where('type',$request->type)->update($data);

        if($save){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('success', 'Nothing to Update!!!');
        }
    }





    //  Admin Profile
    public function admin_profile(){
        $admin = Admin::where('admin_id','APNTAD000')->first();
        $member = MemberLogin::all();
        $company = DB::table('pujariji_company_details')->where('id','1')->first();
        return view('admin.profile',compact('admin','company','member'));
    }




    public function update_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|string',
            'image' => 'image',
            'mobile' => 'required|numeric|digits:10',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required',
        ]);

        $admin = Admin::where('admin_id','APNTAD000')->first();
        $imageName = $admin->image;
        if($request->image){
            if (file_exists(url('assets/img/admin/',$admin->image))){
                File::deleteDirectory(url('assets/img/admin/',$admin->image));
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/img/admin'),$imageName);
        }

        $save = Admin::where('admin_id','APNTAD000')->update([
                'name'=>$request->name,
                'image'=>$imageName,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
                'phone'=>$request->phone,
                'address'=>$request->address,
        ]);

        if($save){
            return redirect()->back()->with('success','Profile Updated Successfully');
        }else{
            return redirect()->back()->with('success', 'Nothing to Update!!!');
        }
    }



    public function update_company_details(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required|string',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required|numeric|digits:6',
            'cin_number' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric'
        ]);

        $save = DB::table('pujariji_company_details')->where('id','1')->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
                'cin_number'=>$request->cin_number,
                'city'=>$request->city,
                'state'=>$request->state,
                'pincode'=>$request->pincode,
                'address'=>$request->address,
        ]);
        if($save){
            return redirect()->back()->with('success','Details Updated Successfully');
        }else{
            return redirect()->back()->with('success', 'Nothing to Update!!!');
        }
    }




    public function update_password(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $admin = Admin::where('admin_id','APNTAD000')->first();

        $save = Admin::where('admin_id','APNTAD000')->update([
                'password'=>md5($request->password),
        ]);

        if($save){
            return redirect()->back()->with('success','Password Updated Successfully');
        }else{
            return redirect()->back()->with('success', 'Nothing to Update!!!');
        }
    }



    public function update_server_key(Request $request)
    {
        $request->validate([
            'serverkey' => 'required',
        ]);

        $save = DB::table('server_keys')->where('key_ids','1099006852957')->update([
            'server_key'=>$request->serverkey,
        ]);
        if($save){
            return redirect()->back()->with('success','Server Key Updated Successfully');
        }else{
            return redirect()->back()->with('success', 'Nothing to Update!!!');
        }
    }








    // Admin Logout
    public function admin_logout(Request $request){
        session()->pull('login_id');
        session()->pull('type');
        session()->pull('login_mail');
        return redirect('/');
    }

}
