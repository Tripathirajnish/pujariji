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
use App\Models\EcommerceProduct;
use App\Models\EcommerceCity;
use App\Models\EcommerceOrderProduct;
use Validator;
use Str;
use DB;
use File;

class EcommerceController extends Controller
{
    public function products(){
        $data = EcommerceProduct::whereNull('deleted_at')->latest()->get();
        foreach ($data as $key => $value) {

            $productImages = unserialize($value->product_images);
            $productImagesWithUrl = array_map(function ($image) {
                return url('ecommerce/product/' . $image);
            }, $productImages);

            $value->productImagesWithUrl = $productImagesWithUrl;
        }

        return view('admin.ecommerce.product.product',compact('data'));
    }



    public function update_ecom_product(Request $request){
        $check = EcommerceProduct::whereNull('deleted_at')->where('product_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->product_status=='0'?'1':'0';
            $update = EcommerceProduct::whereNull('deleted_at')->where('product_id',$request->data)->update(['product_status'=>$status]);
        }
        return $status;
    }


    public function delete_ecom_product(Request $request){
        $check = EcommerceProduct::whereNull('deleted_at')->where('product_id',$request->data)->first();
        if($check){
            $update = EcommerceProduct::whereNull('deleted_at')->where('product_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }


    public function add_products(){
        return view('admin.ecommerce.product.add-product');
    }


    public function add_products_post(Request $request){
        $request->validate([
            'product_id' => '',
            'product_name' => 'required',
            'product_name_hindi' => 'required',
            'product_description' => 'required',
            'product_description_hindi' => 'required',
            'product_price' => 'required',
            'thumbnail_image' => $request->input('product_id') ? '' : 'required|image|mimes:jpeg,png,jpg|max:2048',
            'slider_image' => $request->input('product_id') ? '' : 'required',
        ]);

        if(!is_null($request->product_id)){
            $id = $request->product_id;
            $getData = EcommerceProduct::where('product_id',$id)->first();
            $imageName = $getData->origional_thumbnail_image;
            $productImages = $getData->product_images;
        }else{
            $id = 'PPID' . date('dmy') . last_id('ecom_products');
        }

        if ($request->hasFile('thumbnail_image')) {
            $path = public_path('ecommerce/thumbnail');
            $imageName = $id.'_image.'.$request->file('thumbnail_image')->getClientOriginalExtension();
            $aadharImagePath = $request->file('thumbnail_image')->move($path, $imageName);
        }
        if ($request->hasFile('slider_image')) {
            foreach ($request->file('slider_image') as $image) {
                $imageNameProduct = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('ecommerce/product'), $imageNameProduct);
                $serializedImages[] = $imageNameProduct;
            }
            $productImages = serialize($serializedImages);
        }else{
            $serializedImages = serialize([]);
        }

        $save = EcommerceProduct::updateorCreate([
            'product_id' => $id
        ],[
            'product_date' => date('Y-m-d'),
            'name_hindi' => $request->product_name_hindi,
            'name_eng' => $request->product_name,
            'desc_hindi' => $request->product_description_hindi,
            'desc_eng' => $request->product_description,
            'price' => $request->product_price,
            'thumbnail_image' => $imageName,
            'product_images' => $productImages,
        ]);

        if($save){
            return back()->with('success','Saved Successfully');
        }else{
            return back()->with('fail','Something Went Wrong');
        }
    }


    public function edit_products($id){
        $data = EcommerceProduct::whereNull('deleted_at')->where('product_id',base64_decode($id))->first();
            $productImages = unserialize($data->product_images);
            $productImagesWithUrl = array_map(function ($image) {
                return url('ecommerce/product/' . $image);
            }, $productImages);
            $data->productImagesWithUrl = $productImagesWithUrl;

        return view('admin.ecommerce.product.edit-product',compact('data'));
    }




    // Shipping Cities-------------------------------------------------------------------------------------------------------
    public function shipping_cities(){
        $data = EcommerceCity::where('deleted_at')->orderBy('city_english','asc')->get();
        $array = [];
        foreach ($data as $key => $value) {
            $array[] = $value->city_english;
        }
        $cities = DB::table('cities')->whereNotIn('name',$array)->get();
        return view('admin.ecommerce.shpping-city',compact('data','cities'));
    }


    public function update_cities(Request $request){
        $check = EcommerceCity::whereNull('deleted_at')->where('city_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = EcommerceCity::whereNull('deleted_at')->where('city_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }



    public function add_new_city_post(Request $request){
        $request->validate([
            'city_id' => '',
            'city_english' => 'required',
            'city_hindi' => 'required',
        ]);

        if(!is_null($request->product_id)){
            $id = $request->product_id;
        }else{
            $id = 'PEC' . date('dmy') . last_id('ecom_shipping_cities');
        }

        $save = EcommerceCity::updateorCreate([
            'city_id' => $id
        ],[
            'city_hindi' => $request->city_hindi,
            'city_english' => $request->city_english
        ]);

        if($save){
            return back()->with('success','Saved Successfully');
        }else{
            return back()->with('fail','Something Went Wrong');
        }
    }

    // Shipping Cities-------------------------------------------------------------------------------------------------------
    public function shipping_charge(){
        $data = DB::table('ecom_shipping_price')->first();
        return view('admin.ecommerce.shipping-charge',compact('data'));
    }

    public function update_delivery_charge(Request $request){
        $save = DB::table('ecom_shipping_price')->updateOrInsert(['id' => 1], ['shipping_price' => $request->delivery_charge]);

            return back()->with('success','Updated Successfully');

    }


    // // Shipping Cities-------------------------------------------------------------------------------------------------------
    // public function add_new_city(){
    //     $data = EcommerceCity::where('deleted_at')->orderBy('city_english','asc')->get();
    //     $array = [];
    //     foreach ($data as $key => $value) {
    //         $array[] = $value->city_english;
    //     }
    //     $data = DB::table('cities')->whereNotIn('name',$array)->paginate(10);
    //     return view('admin.ecommerce.add-city',compact('data'));
    // }


    // Orders-------------------------------------------------------------------------------------------------------
    public function pending_order(){
        $data = EcommerceOrderProduct::where('order_status','<=','1')->whereNull('deleted_at')->latest()->get();
        return view('admin.ecommerce.order.pending-order',compact('data'));
    }

    public function get_order_product(Request $request){
        $data = EcommerceOrderProduct::where('order_id',$request->data)->first();
        $product = unserialize($data->product_details);
        return $product;
    }

    public function update_order_complete(Request $request){
        $data = EcommerceOrderProduct::where('order_id',$request->data)->first();
        $updae = EcommerceOrderProduct::where('order_id',$request->data)->update(['order_status' => '2']);

        // Send Notification
        $fcm_token = jajmaan_fcm($data->jajmaan_id);
        $title ='Out for delivery';
        $body = $data->order_id." Delivery in 7-10 days. Thank you for choosing us!";
        $sender_id = $data->jajmaan_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

        return $data;
    }

    public function delivered_order(){
        $data = EcommerceOrderProduct::where('order_status','2')->whereNull('deleted_at')->latest()->get();
        return view('admin.ecommerce.order.delivered-order',compact('data'));
    }

    public function cancelled_order(){
        $data = EcommerceOrderProduct::where('order_status','3')->whereNull('deleted_at')->latest()->get();
        return view('admin.ecommerce.order.cancel-order',compact('data'));
    }


    public function get_order_details(Request $request){
        $data = EcommerceOrderProduct::where('order_id',$request->data)->first();
        return $data;
    }



    public function initate_refund(Request $request){
        $data = EcommerceOrderProduct::where('order_id',$request->data)->first();
        $updae = EcommerceOrderProduct::where('order_id',$request->data)->update(['order_status' => '4']);

        // Send Notification
        $fcm_token = jajmaan_fcm($data->jajmaan_id);
        $title ='Order Refund';
        $body = '₹'.$data->total_amt." will refund in 7-10 days in your bank account";
        $sender_id = $data->jajmaan_id;
        send_save_individual_nitification($fcm_token,$title,$body,$sender_id);  // Jajman Notification

        return $data;
    }



    public function refunded_order(){
        $data = EcommerceOrderProduct::where('order_status','4')->whereNull('deleted_at')->latest()->get();
        return view('admin.ecommerce.order.refund-order',compact('data'));
    }


}
