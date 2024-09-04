<?php

namespace App\Http\Controllers\API\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\AppReview;
use App\Models\Katha;
use App\Models\KathaLanguage;
use App\Models\KundaliBooking;
use App\Models\Jajmaan;
use App\Models\EcommerceCity;
use App\Models\EcommerceProduct;
use App\Models\EcommerceOrderProduct;
use App\Models\PaymentTable;
use DB;

class EcommerceAPIController extends Controller
{
    // Store
    public function place_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jajmaan_id' => 'required',
            'total_amount' => 'required',
            'transection_id' => 'required',
            'payment_date' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'shipping_charge' => 'required',
            'delivery_time' => 'required',
            'del_city' => 'required',
            'del_address' => 'required',
            'del_email' => 'required',
            'del_whatsapp' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('status','0')->whereNull('deleted_at')->first();
        if(is_null($check_jajmaan)){
            return $responseArray = [
                'status_code' => 400,
                'message' =>'No Jajmaan Found',
                'response' => ''
            ];
        }
        $total_unit_price = 0;
        $product_arrays = [];
        $quantity_arrays = [];
        $product_details = [];

        $product_arrays = stringToArray($request->product_id);
        $quantity_arrays = stringToArray($request->quantity);

        if (count($product_arrays) !== count($quantity_arrays)) {
            return response()->json(['error' => 'Mismatched product and quantity arrays'], 422);
        }

        foreach ($product_arrays as $key => $productData) {
            if (isset($quantity_arrays[$key])) {
                $quantityData = $quantity_arrays[$key];
                $product = EcommerceProduct::where('product_status', '0')->where('product_id', $productData['productId'])->first();
                if ($product) {
                    $quantity = $quantityData['quantity'];
                    $unit_price = (int)$quantity * (int)$product->price;
                    $total_unit_price += $unit_price;

                    $product_details[] = [
                        'product_id' => $product->product_id,
                        'name_hindi' => $product->name_hindi,
                        'name_eng' => $product->name_eng,
                        'product_price' => $product->price,
                        'quantity' => $quantity,
                        'unit_price' => $unit_price,
                    ];
                }
            }
        }

        $total_products = count($product_arrays);
        $booking_id = 'ORID' . rand(11, 99) . date('dmy') . last_id('ecom_order_product');
        $total_amount = $total_unit_price + (int)$request->shipping_charge;
        $booking = new EcommerceOrderProduct;
        $booking->order_id = $booking_id;
        $booking->jajmaan_id = $request->jajmaan_id;
        $booking->order_date = date('Y-m-d');
        $booking->total_products = $total_products;
        $booking->product_details = serialize($product_details);
        $booking->shipping_charge = $request->shipping_charge;
        $booking->delivery_time = $request->delivery_time;
        $booking->del_city = $request->del_city;
        $booking->del_address = $request->del_address;
        $booking->del_email = $request->del_email;
        $booking->del_whatsapp = $request->del_whatsapp;
        $booking->total_amt = $total_amount;
        $booking->transection_id = $request->transection_id;
        $booking->payment_date = $request->payment_date;
        $booking->transaction_id = $request->transaction_id;

        $booking->save();

        if($booking){
            $save = PaymentTable::create([
                'payment_id' => 'PID' . date('dmy') . last_id('payment_tables'),
                'payment_for_id' => $booking_id,
                'payment_for_what' => "Product Order",
                'transection_id' => $request->transection_id,
                'amount' => $request->total_amount,
                'entity' => $request->total_amount,
                'type' => 'Credit',
                'mobile' => '',
                'fee' => '0',
            ]);
        }


        // Send Notification
        $fcm_token = jajmaan_fcm($request->jajmaan_id);
        $title ='Order Placed';
        $body = 'Congratulations! Your order has been placed. It will be out for delivery soon. For further updates, please check your application.';
        $sender_id = $request->jajmaan_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

        return $responseArray = [
            'status_code' => 200,
            'message' => 'Order Placed Successfully',
            'response' => [
                "order_id" => $booking_id,
            ]
        ];
    }



    public function product_list(Request $request){
        $products = EcommerceProduct::where('product_status','0')->whereNull('deleted_at')->latest()->get();
        $list = [];
        foreach ($products as $key => $value) {

            $productImages = unserialize($value->product_images);
            $productImagesWithUrl = array_map(function ($image) {
                return url('ecommerce/product/' . $image);
            }, $productImages);

            $list[] = [
                "product_id" => $value->product_id,
                "product_name_eng" => $value->name_eng,
                "product_name_hin" => $value->name_hindi,
                "product_des_eng" => $value->desc_eng,
                "product_des_hin" => $value->desc_hindi,
                "product_price" => $value->price,
                "product_thumbnail_image" => $value->thumbnail_image,
                "productImages" => $productImagesWithUrl,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' =>'E-commerce List Fetched Successfully',
            'response' => $list
        ];
    }



    public function ecommerce_shippping_charge(){
        $get_price = DB::table('ecom_shipping_price')->where('status','0')->first();
        return $responseArray = [
            'status_code' => 200,
            'message' =>'Fetched Shipping Price Successfully',
            'response' => [
                "shipping_price" => $get_price->shipping_price??0
            ]
        ];
    }


    public function ecommerce_shippping_cities(Request $request){
        $validator = Validator::make($request->all(), [
            'language' => 'required|in:eng,hindi'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        if($request->language=='eng'){
            $get_language = EcommerceCity::where('status','0')->orderBy('city_english')->get();
            foreach ($get_language as $key => $value) {
                $list[] = [
                    'city_id' => $value->city_id,
                    'city' => $value->city_english,
                ];
            }
            return $responseArray = [
                'status_code' => 200,
                'message' =>'Fetched Cities Successfully',
                'response' => $list
            ];
        }
        if($request->language=='hindi'){
            $get_language = EcommerceCity::where('status','0')->orderBy('city_hindi')->get();
            foreach ($get_language as $key => $value) {
                $list[] = [
                    'city_id' => $value->city_id,
                    'city' => $value->city_hindi,
                ];
            }
            return $responseArray = [
                'status_code' => 200,
                'message' =>'Fetched Cities Successfully',
                'response' => $list
            ];
        }
    }




    // Cancel Booking
    public function cancel_order(Request $request){
        $rules = [
            'jajman_id' => 'required|string',
            'booking_id' => 'required|string',
            'acholder' => 'required|string',
            'acnumber' => 'required|numeric',
            'ifsc' => 'required|string',
            'type' => 'required|string',
            'reason' => 'required|string',
            'amount' => 'required|numeric',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $v_jajman = Jajmaan::where('jajmaan_id', $request->jajman_id)->where('status','0')->where('deleted_at',NULL)->first();
        if(!is_null($v_jajman)){

            $booking = EcommerceOrderProduct::where('order_id',$request->booking_id)
                    ->where(function ($query) {
                        $query->where('order_status', '0')
                            ->orWhere('order_status', '1');
                    })
                    ->where('deleted_at',NULL)->first();

            if($booking){
                $cancel_booking = EcommerceOrderProduct::where('order_id',$request->booking_id)->update([
                    'cancel_date'=>date('d-m-Y'),
                    'can_acholder'=>$request->acholder,
                    'can_acnumber'=>$request->acnumber,
                    'can_ifsc'=>$request->ifsc,
                    'can_type'=>$request->type,
                    'can_reason'=>$request->reason,
                    'can_amount'=>$request->amount,
                    'order_status'=>'3',
                ]);

                
                // Send Notification
                $fcm_token = jajmaan_fcm($request->jajman_id);
                $title ='Order Cancelled';
                $body = 'Your order has been cancelled. Refund will be intited short';
                $sender_id = $request->jajman_id;
                send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

                return response()->json([
                    'status_code' => 200,
                    'message' => 'Order Cancelled',
                    'response' => $cancel_booking,
                ]);
            }
            return response()->json([
                'status_code' => 400,
                'message' => 'Order Not Found',
                'response' => ''
            ]);
        }
        return response()->json([
            'status_code' => 400,
            'message' => 'Jajmaan Not Found',
            'response' => ''
        ]);
    }



    public function order_history(Request $request){
        $rules = [
            'jajmaan_id' => 'required|string',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->jajmaan_id)->where('status','0')->whereNull('deleted_at')->first();
        if(is_null($check_jajmaan)){
            return $responseArray = [
                'status_code' => 400,
                'message' =>'No Jajmaan Found',
                'response' => ''
            ];
        }

        $booking = EcommerceOrderProduct::where('jajmaan_id',$request->jajmaan_id)->get();
        $list = [];

        foreach ($booking as $key => $value) {
            $jajmaan = Jajmaan::where('jajmaan_id',$value->jajmaan_id)->first();
            $value->jajmaan_name = $jajmaan->name.' '.$jajmaan->surname;
            $value->jajmaan_number = $jajmaan->phone;
            $product_detail = unserialize($value->product_details);
            foreach ($product_detail as $key => $detils) {
                $prod = EcommerceProduct::where('product_status','0')->where('product_id',$detils['product_id'])->first();
                $products[] = [
                        "product_id" => $detils['product_id'],
                        "product_name_eng" => $detils['name_eng'],
                        "product_name_hin" => $detils['name_hindi'],
                        "product_price" => $detils['unit_price'],
                        "product_quantity" => $detils['quantity'],
                        "product_thumbnail_image" => $prod->thumbnail_image,
                ];
            }
            $list[] = [
                "order_id" => $value->order_id,
                "Name" => $jajmaan->name.' '.$jajmaan->surname,
                "Whatsapp_Number" => $jajmaan->phone,
                "Delivery_Location" => $value->del_address,
                "Delivery_Time" => $value->delivery_time,
                "product_list" => $products,
                "Shipping_Charge" => $value->shipping_charge,
                "order_status" => $value->order_status,
                "cancel_status" => $value->order_status=='3'?'Yes':'No',
                "total Amount" => $value->total_amt,
            ];
            $products = [];
        }

        return response()->json([
            'status_code' => 200,
            'message' => 'Order History Fetched Successfully',
            'response' => $list
        ]);

    }


}
