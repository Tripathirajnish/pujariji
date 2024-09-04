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
use App\Models\VirtualPoojaJajmaan;
use App\Models\Astrologer;
use App\Models\PoojaPujari;
use App\Models\ServiceLanguage;
use App\Models\VendorServiceProvides;
use App\Models\Notifications;
use App\Models\AppReview;
use App\Models\{Blog, JajmaanEnquiry, VirtualPooja, PoojaDetail, PoojaImage, PoojaProcess, PoojaBenefit, VirtualPoojaBooking, PoojaMandir, VirtualPoojaPackage, PoojaVideos,TemplePoojaInclusion,};
use App\Models\ExtraPayment;
use App\Models\Banner;
use App\Models\TermCondition;
use App\Models\PrivacyPolicy;
use App\Models\AstroPlan;
use Str;
use File;
use DB;
use Crypt;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class FrontEndController extends Controller
{
    public function index(){
        $locale = app()->getLocale();
        $data = VirtualPooja::select('virtual_poojas.id','virtual_poojas.pooja_id','virtual_poojas.date','virtual_poojas.created_at', 'virtual_poojas.image', 'pooja_details.name', 'pooja_details.tithi_name', 'pooja_mandirs.title as mandir_address')
        ->join('pooja_details', 'pooja_details.pooja_id', '=', 'virtual_poojas.id')
        ->join('pooja_mandirs', 'pooja_mandirs.pooja_id', '=', 'virtual_poojas.id')
        ->where('pooja_details.lang', $locale)
        ->where('pooja_mandirs.lang', $locale)
        ->where('virtual_poojas.status', '1')
        ->orderBy('date', 'asc')
        ->get();
        $messages = Lang::get('messages');
        return view('front.puja-list', compact('data', 'messages'));
    }
    public function home(){
        $locale = app()->getLocale();
        $data = VirtualPooja::select('virtual_poojas.id','virtual_poojas.pooja_id','virtual_poojas.date','virtual_poojas.created_at', 'virtual_poojas.image', 'pooja_details.name', 'pooja_details.tithi_name', 'pooja_mandirs.title as mandir_address')
        ->join('pooja_details', 'pooja_details.pooja_id', '=', 'virtual_poojas.id')
        ->join('pooja_mandirs', 'pooja_mandirs.pooja_id', '=', 'virtual_poojas.id')
        ->where('pooja_details.lang', $locale)
        ->where('pooja_mandirs.lang', $locale)
        ->where('virtual_poojas.status', '1')
        ->orderBy('date', 'asc')
        ->get();
        $messages = Lang::get('messages');
        return view('front.index', compact('data', 'messages'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
        
    }
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function tc_page() {
        $data = TermCondition::first();
        return view('front.term_condition',compact('data'));
    }


    public function pp_page() {
        $data = PrivacyPolicy::first();
        return view('front.privacy-policy',compact('data'));
    }

    public function front_blog() {
        $data = Blog::where('status','0')->latest()->paginate(3);
        return view('front.blog',compact('data'));
    }


    public function view_bolg($id){
        $data = Blog::where('blog_id',Crypt::decryptString($id))->where('status','0')->first();
        if($data){
            return view('front.single_blog',compact('data'));
        }else{
            return redirect('/');
        }
    }

    public function pricing(){
        $plans = AstroPlan::whereNull('deleted_at')->where('status','0')->latest()->limit(3)->get();
        return view('front.pricing',compact('plans'));
    }

    public function puja(){
        $locale = app()->getLocale();
        $data = VirtualPooja::select('virtual_poojas.id','virtual_poojas.pooja_id','virtual_poojas.date','virtual_poojas.created_at', 'virtual_poojas.image', 'pooja_details.name', 'pooja_details.tithi_name', 'pooja_mandirs.title as mandir_address')
        ->join('pooja_details', 'pooja_details.pooja_id', '=', 'virtual_poojas.id')
        ->join('pooja_mandirs', 'pooja_mandirs.pooja_id', '=', 'virtual_poojas.id')
        ->where('pooja_details.lang', $locale)
        ->where('pooja_mandirs.lang', $locale)
        ->where('virtual_poojas.status', '1')
        ->orderBy('date', 'asc')
        ->get();
        $messages = Lang::get('messages');
        return view('front.puja-list', compact('data', 'messages'));
    }

    public function pujaDetails($slug_id){
        $locale = app()->getLocale();
        $pooja = VirtualPooja::where('pooja_id',$slug_id)->first();
        $images_list = PoojaImage::where('pooja_id', $pooja->id)->get();
        $process = PoojaProcess::where('pooja_id', $pooja->id)->where('lang', $locale)->get();
        $benefits = PoojaBenefit::where('pooja_id', $pooja->id)->where('lang', $locale)->get();
        $detail = PoojaDetail::where('pooja_id', $pooja->id)->where('lang', $locale)->first();
        $mandir = PoojaMandir::where('pooja_id', $pooja->id)->where('lang', $locale)->first();
        $package = VirtualPoojaPackage::where('pooja_id', $pooja->id)->get();
        $videos = PoojaVideos::where('lang', $locale)->where('status', 1)->get();
        $messages = Lang::get('messages');
        return view('front.puja-detail',compact('pooja','detail', 'mandir', 'package', 'process', 'benefits', 'videos','messages','images_list'));
    }

    public function booking(Request $request, $slug_id){
        $locale = app()->getLocale();
        $package_id = $request->input('package');
        $enquiry_id = $request->input('enquiry_id');
        $pooja = VirtualPooja::where('pooja_id',$slug_id)->first();
        $detail = PoojaDetail::where('pooja_id', $pooja->id)->where('lang', $locale)->first();
        $mandir = PoojaMandir::where('pooja_id', $pooja->id)->where('lang', $locale)->first();
        $package = VirtualPoojaPackage::where('id', $package_id)->first();
        JajmaanEnquiry::where('id',$enquiry_id)->update(['note' => 'Booking Process Started']);
        $enquiry = JajmaanEnquiry::where('id',$enquiry_id)->first();
        $data = TemplePoojaInclusion::whereNull('deleted_at')->latest()->get();
        return view('front.booking',compact('pooja','detail','mandir', 'package', 'enquiry','data'));
    }

    public function poojaFeedback(Request $request){
        $locale = app()->getLocale();
        $booking_id = $request->input('booking_id');
        $booking = VirtualPoojaBooking::where('booking_id', $booking_id)->first();
        $pooja = VirtualPooja::where('id',$booking->pooja_id)->first();
        $detail = PoojaDetail::where('pooja_id', $pooja->id)->where('lang', $locale)->first();
        $mandir = PoojaMandir::where('pooja_id', $pooja->id)->where('lang', $locale)->first();
        $package = VirtualPoojaPackage::where('id', $booking->package_id)->first();
        return view('front.booking-feedback',compact('pooja','detail','mandir','package','booking'));
    }


     // Send OTP
     public function send_otp(Request $request)
     {
         $rules = [
             'mobile' => 'required|numeric|digits:10',
             'name' => 'required'
         ];
 
         $validator = Validator::make($request->all(), $rules);
         if ($validator->fails()) {
             return response()->json(['error' => $validator->errors()], 401);
         } else {
             $verify = VirtualPoojaJajmaan::where('phone', $request->mobile)->first();
             if(!is_object($verify)){
                $data = [
                    'name' => $request->name,
                    'phone' => $request->mobile
                ];
                $verify = VirtualPoojaJajmaan::create($data);
             }
            $enquiry = JajmaanEnquiry::where(['package_id'=>$request->package,'pooja_id'=>$request->pooja_id,'jajmaan_id'=>$verify->id])->first();
            if(!is_object($enquiry)){
                $data_enquiry = [
                    'name' => $request->name,
                    'package_id' =>$request->package,
                    'pooja_id'=>$request->pooja_id,
                    'phone' => $request->mobile,
                    'jajmaan_id'=>$verify->id,
                    'note'=> 'Sent OTP'
                ];
                $enquiry = JajmaanEnquiry::create($data_enquiry);
            }
            
             if (!is_null($verify)) {
                     $mobile = $verify->mobile;
                     $otp = '';
                     for ($i = 0; $i < 4; $i++) {
                        $otp .= mt_rand(0, 9);
                     }
                    
                     // Send SMS API Here
                     $message = "Dear Customer, the OTP for registration to PUJARI JI is ".$otp.". Do not share with anyone VALID 5 MINT . -PUJARI JI";
                     sms($request->mobile, $message);
 
                     $update = VirtualPoojaJajmaan::where('phone', $request->mobile)->update(['loginotp' => $otp, 'login_date' => date('Y-m-d')]);
                     return $responseArray = [
                         'status_code' => 200,
                         'message' => 'OTP Send Successfully',
                         'response' => $request->mobile,
                         'url' => url('verify-otp'),
                         'enquiry_id' => $enquiry->id
                     ];
             } else {
                
                 return $responseArray = [
                     'status_code' => 401,
                     'message' => 'Number Not Registered',
                     'response' => '',
                 ];
             }
         }
     }
 
 
 
     // Verify OTP
     public function verify_otp(Request $request){
                 $rules = array(
                 'mobile' => 'required|numeric|digits:10',
                 'otp' => 'required|numeric|digits:4'
             );
 
             $validator = Validator::make($request->all(),$rules);
             if($validator->fails()){
                 return response()->json(['error'=>$validator->errors()], 401);
             }else{
                 $verify = VirtualPoojaJajmaan::where('phone',$request->mobile)->where('deleted_at',NULL)->first();
                 if(!is_null($verify)){
                     $verify_otp = VirtualPoojaJajmaan::where('phone',$request->mobile)->where('loginotp',$request->otp)->where('deleted_at',NULL)->first();
 
                     if(!is_null($verify_otp)){
                         $otp = Str::random(6);
                         $update = VirtualPoojaJajmaan::where('phone',$request->mobile)->update(['loginotp'=>$otp,'fcm_token'=>$request->fcm_token]);
 
                         $data = [
                                 'jajmaan_id' => $verify_otp->id,
                                 'name' => $verify_otp->name,
                                 'surname' => $verify_otp->surname,
                                 'phone' => $verify_otp->phone,
                                 'gender' => $verify_otp->gender,
                                 'verification_status' => $verify_otp->status
                             ];
                         $enquiry = JajmaanEnquiry::where('id', $request->enquiry_id)->update(['note' => 'OTP verified']);
                         return $responseArray = [
                             'status_code' => 200,
                             'message' => 'OTP Verified Successfully',
                             'redirect_url' => url('booking-process/'.$request->slug.'?package='.$request->package.'&enquiry_id='.$request->enquiry_id),
                             'is_otp_verified' => true,
                             'response' => $data
                         ];
 
                     }else{
                         return $responseArray = [
                             'status_code' => 401,
                             'message' => 'Invalid OTP',
                             'response' => ''
                         ];
                     }
                 }else{
                     return $responseArray = [
                         'status_code' => 401,
                         'message' => 'Number Not Registered',
                         'response' => ''
                     ];
                 }
         }
     }


}
