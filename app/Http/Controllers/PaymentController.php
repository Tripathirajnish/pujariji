<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\{VirtualPoojaJajmaan, VirtualPooja, VirtualPoojaBooking, VirtualPoojaPaymentTable, VirtualPoojaPackage, JajmaanEnquiry, PoojaBookingMember};
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    // protected $razorpay;

    // public function __construct()
    // {
    //     $this->razorpay = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
    // }

    public function initiatePayment(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required',
            'pooja_id' => 'required',
            'package_id' => 'required',
            'total_price' => 'required',
            'notes' => '',
        ]);

        if ($validator->fails()) {

            return back()->with('fail', $validator->errors());
        }

        $check_jajmaan = VirtualPoojaJajmaan::where('id',$request->jajmaan_id)->where('deleted_at',NULL)->first();
        if (is_null($check_jajmaan)) {
            return back()->with('fail',"No Jajmaan Found");
        }

        $check_package = VirtualPoojaPackage::where('id',$request->package_id)->where('deleted_at',NULL)->first();
        if (is_null($check_package)) {
            return back()->with('fail',"No Package Found");
        }

        $check_pooja = VirtualPooja::where('id',$request->pooja_id)->where('deleted_at',NULL)->first();
        if (is_null($check_pooja)) {

            return back()->with('fail',"No Pooja Found");
            return response()->json(['message' => 'No Pooja Found'], 400);
        }
        // $payment = $this->razorpay->payment->fetch($request->razorpay_payment_id);
        if($request->razorpay_payment_id)
        {
            $booking_id = 'PON' . date('dmy') . last_id('pooja_bookings');
            // Create a new record
            $pujari = new VirtualPoojaBooking([
                'booking_id' => $booking_id,
                'booking_type' => '0',
                'booking_date' => date('Y-m-d'),
                'booking_time' => date('H:i:s'),
                'jajmaan_id' => $request->input('jajmaan_id'),
                'pooja_id' => $request->input('pooja_id'),
                'package_id' => $request->input('package_id'),
                'payment_type' => '0',
                'pooja_price' => $request->input('total_price'),
                'total_price' => $request->input('total_price'),
                'advance' => $request->input('total_price'),
                'transection_id' => $request->razorpay_payment_id,
                'balance' => 0,
                'payment_done_date' => date('Y-m-d'),
                'pooja_date' => $check_pooja->date,
                'pooja_time' => date('H:i:s',strtotime($check_pooja->booking_end_date))
            ]);
    
            $pujari->save();
            if($pujari){

                // $members = new PoojaBookingMember([
                //     'booking_id' => $booking_id,
                //     'name' => $request->input('name'),
                //     'gender' => $request->input('gender'),
                //     'gotra' => $request->input('gotra'),
                // ]);
                // $members->save();


                $enquiry_id = $request->enquiry_id;
                if($enquiry_id){
                    JajmaanEnquiry::where('id',$enquiry_id)->update(['note' => 'Booking Completed', 'payment_id'=>$request->razorpay_payment_id]);
                }
                $title ='Online Pooja Booked';
                $body = 'Congratulations! Your online pooja has been successfully booked. Thank you for choosing our services!';
                $sender_id = $request->jajmaan_id;
                $save = VirtualPoojaPaymentTable::create([
                    'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                    'payment_for_id' => $booking_id,
                    'payment_for_what' => "Pooja Booking",
                    'transection_id' => $request->razorpay_payment_id,
                    'amount' => $request->total_price,
                    'entity' => $request->total_price,
                    'type' => 'Credit',
                    'mobile' => '',
                    'fee' => '0',
                ]);
                 // Send SMS API Here
                 $message = 'Hi '.$check_jajmaan->name.' \n Your booking ID-'.$booking_id.' has been confirmed and processed with our respective pujari -PUJARI JI';
                 sms($check_jajmaan->phone, $message);
                return redirect()->route('home')->with('success','Online Pooja Booked Successfully');
            }
            return back()->with('fail',"Booking Couldn't Saved");

        }else{
            return back()->with('fail',"Payment failed");
        }
            
    }

}
