<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use \Illuminate\Notifications\Notifiable;
use App\Services\FCMService;
use App\Models\{
    AppReview,
    Jajmaan,
    JajmaanEnquiry,
    PoojaPujari,
    PoojaCategories,
    Pooja,
    PoojaBenefit,
    PoojaRating,
    PoojaPackage,
    PoojaInclusion,
    PoojaBooking,
    PoojaMaterial,
    PoojaCancelByPujari,
    PoojaDetail,
    PoojaImage,
    PoojaMandir,
    PoojaProcess,
    PoojaPujariWithdraw,
    VirtualPoojaCategories,
    PoojaVideos,
    VirtualPooja,
    VirtualPoojaBooking,
    VirtualPoojaPackage,
    VirtualPoojaReview
};
use DataTables;
use Str;
use File;
use Validator;


class PoojaController extends Controller
{
/*------------------------------------------------- Pooja Category ------------------------------------------------------------------*/
    public function pooja_pactegory(){
        $categories = PoojaCategories::whereNull('deleted_at')->latest()->get();
        return view('admin.pooja-bookings.category.pooja-category',compact('categories'));
    }

    public function save_category(Request $request){
        $request->validate([
            'category_id' => '',
            'category_name' => 'required|string',
            'category_name_hindi' => 'required|string',
            'category_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->category_id){
            $id = $request->category_id;
            $check = PoojaCategories::where('cat_id',$id)->whereNull('deleted_at')->first();
            $imageName = $check->cat_image;
        }else{
            $id = 'PCAT'.rand(1111,9999).last_id('pooja_categories');
            $imageName = '';
        }

        if ($request->hasFile('category_image')) {
            $path = public_path('pooja/category');
            $imageName = $id.'_category.'.$request->file('category_image')->getClientOriginalExtension();
            $aadharImagePath = $request->file('category_image')->move($path, $imageName);
        }

        $save = PoojaCategories::updateOrCreate(
            ['cat_id' => $id],
            [
                'cat_name' => $request->input('category_name'),
                'cat_name_hindi' => $request->input('category_name_hindi'),
                'cat_image' => $imageName
            ]
        );
        if($save){
            return back()->with('success','Pooja Category Successfully');
        }else{
            return back()->with('fail',"Category Couldn't Saved");
        }
    }


    public function get_category(Request $request){
        $check = PoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->first();
        return $check;
    }


    public function update_category(Request $request){
        $check = PoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = PoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_category(Request $request){
        $check = PoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->first();
        if($check){
            $update = PoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

/*------------------------------------------------- Pooja ------------------------------------------------------------------*/

    public function add_new_pooja(){
        $categories = PoojaCategories::whereNull('deleted_at')->orderBy('cat_name','desc')->get();
        return view('admin.pooja-bookings.pooja.add_new_pooja',compact('categories'));
    }


    public function save_new_pooja(Request $request){
        $request->validate([
            'pooja_id' => '',
            'pooja_name' => 'required|string',
            'pooja_name_hindi' => 'required|string',
            'pooja_category' => 'required|string',
            'min_price' => 'required|numeric|gt:0',
            'max_price' => 'required|numeric|gte:min_price',
            'pooja_description' => 'required|string',
            'pooja_description_hindi' => 'required|string',
            'selected_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->pooja_id){
            $id = $request->pooja_id;
            $check = Pooja::where('pooja_id',$id)->whereNull('deleted_at')->first();
            $imageName = $check->origional_image;
        }else{
            $id = 'POJ'.rand(1111,9999).last_id('poojas');
            $imageName = '';
        }

        if ($request->hasFile('selected_image')) {
            if(file_exists(public_path('pooja/pooja_image/' . $imageName))) {
               \File::delete(public_path('pooja/pooja_image/' . $imageName));
            }
            $path = public_path('pooja/pooja_image');
            $imageName = $id.'_image.'.$request->file('selected_image')->getClientOriginalExtension();
            $aadharImagePath = $request->file('selected_image')->move($path, $imageName);
        }

        $save = Pooja::updateOrCreate(
            ['pooja_id' => $id],
            [
                'date' => date('Y-m-d'),
                'name' => $request->input('pooja_name'),
                'name_hindi' => $request->input('pooja_name_hindi'),
                'image' => $imageName,
                'category_id' => $request->input('pooja_category'),
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


    public function edit_pooja($id){
        $data = PoojaCategories::whereNull('deleted_at')->where('status', '0')->orderBy('cat_name','asc')->get();
        $pooja = Pooja::whereNull('deleted_at')->where('pooja_id', base64_decode($id))->first();
        return view('admin.pooja-bookings.pooja.edit_pooja',compact('data','pooja'));
    }


    public function pooja_list(){
        $data = Pooja::whereNull('deleted_at')->latest()->get();
        foreach ($data as $key => $value) {
            $value->bookings += PoojaBooking::where('pooja_id',$value->pooja_id)->whereNull('deleted_at')->count();
        }
        return view('admin.pooja-bookings.pooja.pooja-list',compact('data'));
    }

    public function update_pooja(Request $request){
        $pooja = Pooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        $status = '1';
        if($pooja){
            $status = $pooja->status=='0'?'1':'0';
            $update = Pooja::whereNull('deleted_at')->where('pooja_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_pooja(Request $request){
        $pooja = Pooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        if($pooja){
            $update = Pooja::whereNull('deleted_at')->where('pooja_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }


    public function get_poojaDetails(Request $request){
        $pooja = Pooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        return $pooja;
    }



/*------------------------------------------------- Pooja Package ------------------------------------------------------------------*/
    public function package_list(){
        $data = PoojaPackage::whereNull('deleted_at')->latest()->get();
        foreach ($data as $key => $value) {
            $inclusion = PoojaInclusion::where('package_id',$value->package_id)->where('status','0')->whereNull('deleted_at')->count();
            $value->inclusion = $inclusion;
        }
        return view('admin.pooja-bookings.package.pooja-package',compact('data'));
    }


    public function get_package_list(Request $request){
        $pooja_id = $request->input('pooja_id');
        $package = PoojaPackage::where('pooja_id', $pooja_id)->get();
        return response()->json($package);
    }

    public function get_pooja_details(Request $request){
        $pooja = PoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->first();
        return $pooja;
    }


    public function update_package(Request $request){
        $check = PoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = PoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_package(Request $request){
        $check = PoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->first();
        if($check){
            $update = PoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }


    public function add_new_package(){
        $data = Pooja::whereNull('deleted_at')->latest()->get();
        return view('admin.pooja-bookings.package.add-package',compact('data'));
    }


    public function edit_package($id){
        $id = base64_decode($id);
        $data = PoojaPackage::whereNull('deleted_at')->where('package_id',$id)->first();
        $pooja = Pooja::whereNull('deleted_at')->latest()->get();
        return view('admin.pooja-bookings.package.edit-package',compact('data','pooja'));
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
            $id = 'PKG'.rand(1111,9999).last_id('pooja_packages');
        }

        $save = PoojaPackage::updateOrCreate(
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



/*------------------------------------------------- Inclusions ------------------------------------------------------------------*/
    public function inclusion_list(){
        $pooja = Pooja::whereNull('deleted_at')->latest()->whereNull('deleted_at')->get();
        $data = PoojaInclusion::whereNull('deleted_at')->latest()->whereNull('deleted_at')->get();
        $package = PoojaPackage::whereNull('deleted_at')->latest()->whereNull('deleted_at')->get();
        return view('admin.pooja-bookings.inclusions.inclusion',compact('data','package','pooja'));
    }


    public function update_inclusion(Request $request){
        $check = PoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = PoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_inclusion(Request $request){
        $check = PoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->first();
        if($check){
            $update = PoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
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
            $id = 'PIN'.rand(1111,9999).last_id('pooja_inclusion');
        }

        $save = PoojaInclusion::updateOrCreate(
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
        $check = PoojaInclusion::whereNull('deleted_at')->where('inclusion_id',$request->data)->first();
        $check->pooja_id = get_pooja_name_by_package_id($check->package_id)['pooja_id'];
        $check->pooja_name = get_pooja_name_by_package_id($check->package_id)['pooja_name'];
        $check->package_name = package_name($check->package_id)['eng_name'];
        return $check;
    }


    public function pooja_material(){
        $pooja = Pooja::whereNull('deleted_at')->orderBy('name','asc')->get();
        $data = PoojaMaterial::whereNull('deleted_at')->orderBy('pooja_id','asc')->latest()->get();
        return view('admin.pooja-bookings.material.pooja-material',compact('data','pooja'));
    }


    public function update_material(Request $request){
        $check = PoojaMaterial::whereNull('deleted_at')->where('material_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = PoojaMaterial::whereNull('deleted_at')->where('material_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function delete_material(Request $request){
        $check = PoojaMaterial::whereNull('deleted_at')->where('material_id',$request->data)->first();
        if($check){
            $update = PoojaMaterial::whereNull('deleted_at')->where('material_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

    public function get_material(Request $request){
        $check = PoojaMaterial::whereNull('deleted_at')->where('material_id',$request->data)->first();
        return $check;
    }


    public function save_material(Request $request){
        $request->validate([
            'material_id' => '',
            'pooja' => 'required|string',
            'material_name' => 'required|string',
            'material_name_hindi' => 'required|string',
            'material_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->material_id){
            $id = $request->material_id;
            $check = PoojaMaterial::where('material_id',$id)->whereNull('deleted_at')->first();
            $imageName = $check->origional_image;
        }else{
            $id = 'PMT'.rand(1111,9999).last_id('pooja_materials');
            $imageName = '';
        }

        if ($request->hasFile('material_image')) {
            $path = public_path('pooja/material');
            $imageName = $id.'_image.'.$request->file('material_image')->getClientOriginalExtension();
            $aadharImagePath = $request->file('material_image')->move($path, $imageName);
        }

        $save = PoojaMaterial::updateOrCreate(
            ['material_id' => $id],
            [
                'pooja_id' => $request->input('pooja'),
                'material_name' => $request->input('material_name'),
                'material_name_hindi' => $request->input('material_name_hindi'),
                'image' => $imageName
            ]
        );
        if($save){
           return back()->with('success','Pooja Material Saved Successfully');
        }else{
           return back()->with('fail',"Pooja Material Couldn't Saved");
        }
    }



    /*------------------------------------------------- Virtual Pooja started ------------------------------------------------------------------*/

    public function virtual_pooja_category(){
        $categories = VirtualPoojaCategories::whereNull('deleted_at')->latest()->get();
        return view('admin.pooja-bookings.category.pooja-category',compact('categories'));
    }

    public function virtual_save_category(Request $request){
        $request->validate([
            'category_id' => '',
            'category_name' => 'required|string',
            'category_name_hindi' => 'required|string',
            'category_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->category_id){
            $id = $request->category_id;
            $check = VirtualPoojaCategories::where('cat_id',$id)->whereNull('deleted_at')->first();
            $imageName = $check->cat_image;
        }else{
            $id = 'PCAT'.rand(1111,9999).last_id('pooja_categories');
            $imageName = '';
        }

        if ($request->hasFile('category_image')) {
            $path = public_path('pooja/category');
            $imageName = $id.'_category_new.'.$request->file('category_image')->getClientOriginalExtension();
            $aadharImagePath = $request->file('category_image')->move($path, $imageName);
        }

        $save = VirtualPoojaCategories::updateOrCreate(
            ['cat_id' => $id],
            [
                'cat_name' => $request->input('category_name'),
                'cat_name_hindi' => $request->input('category_name_hindi'),
                'cat_image' => $imageName
            ]
        );
        if($save){
            return back()->with('success','Pooja Category Successfully');
        }else{
            return back()->with('fail',"Category Couldn't Saved");
        }
    }


    public function virtual_get_category(Request $request){
        $check = VirtualPoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->first();
        return $check;
    }


    public function virtual_update_category(Request $request){
        $check = VirtualPoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
            $update = VirtualPoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function virtual_delete_category(Request $request){
        $check = VirtualPoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->first();
        if($check){
            $update = VirtualPoojaCategories::whereNull('deleted_at')->where('cat_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }



    public function pooja_videos(){
        $videos = PoojaVideos::latest()->get();
        return view('admin.pooja-bookings.videos.pooja-videos',compact('videos'));
    }


    public function get_pooja_video_single(Request $request, $id){
        $check = PoojaVideos::where('id',$id)->first();
        return $check;
    }

    public function get_pooja_detail_single(Request $request, $id){
        $check = PoojaDetail::where('id',$id)->first();
        return $check;
    }

    public function delete_pooja_detail(Request $request){
        $check = PoojaDetail::whereNull('deleted_at')->where('id',$request->data)->first();
        if($check){
            $update = PoojaDetail::whereNull('deleted_at')->where('id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

    public function delete_pooja_benefit(Request $request){
        $check = PoojaBenefit::whereNull('deleted_at')->where('id',$request->data)->first();
        if($check){
            $update = PoojaBenefit::whereNull('deleted_at')->where('id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

    public function delete_pooja_process(Request $request){
        $check = PoojaProcess::whereNull('deleted_at')->where('id',$request->data)->first();
        if($check){
            $update = PoojaProcess::whereNull('deleted_at')->where('id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

    public function delete_pooja_mandir(Request $request){
        $check = PoojaMandir::whereNull('deleted_at')->where('id',$request->data)->first();
        if($check){
            $update = PoojaMandir::whereNull('deleted_at')->where('id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

    public function delete_pooja_package(Request $request){
        $check = VirtualPoojaPackage::whereNull('deleted_at')->where('id',$request->data)->first();
        if($check){
            $update = VirtualPoojaPackage::whereNull('deleted_at')->where('id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

    public function get_pooja_benefit_single(Request $request, $id){
        $check = PoojaBenefit::where('id',$id)->first();
        return $check;
    }

    public function get_pooja_process_single(Request $request, $id){
        $check = PoojaProcess::where('id',$id)->first();
        return $check;
    }

    public function get_pooja_mandir_single(Request $request, $id){
        $check = PoojaMandir::where('id',$id)->first();
        return $check;
    }

    public function get_pooja_package_single(Request $request, $id){
        $check = VirtualPoojaPackage::where('id',$id)->first();
        return $check;
    }

    public function save_pooja_video(Request $request){
        $request->validate([
            'lang' => 'required|string',
            'title' => 'required|string',
            'url' => 'required|string'
        ]);

        $save = PoojaVideos::updateOrCreate(
            [
                'lang' => $request->input('lang'),
                'title' => $request->input('title'),
                'url' =>  $request->input('url'),
            ]
        );
        if($save){
            return back()->with('success','Pooja Video Added Successfully');
        }else{
            return back()->with('fail',"Video Couldn't Saved");
        }
    }


    public function update_pooja_video(Request $request){
        $check = PoojaVideos::where('id',$request->data)->first();
        $status = '1';
        if($check){
            $status = $check->status=='0'?'1':'0';
             PoojaVideos::whereNull('deleted_at')->where('id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }

    public function delete_pooja_video(Request $request){
        $check = PoojaVideos::whereNull('deleted_at')->where('id',$request->data)->first();
        if($check){
            $update = PoojaVideos::whereNull('deleted_at')->where('id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }

    /*------------------------------------------------- Pooja ------------------------------------------------------------------*/

    public function virtual_add_new_pooja(){
        $categories = PoojaCategories::whereNull('deleted_at')->orderBy('cat_name','desc')->get();
        return view('admin.pooja-bookings.virtual-pooja.add_new_pooja',compact('categories'));
    }


    public function virtual_save_new_pooja(Request $request){
        $request->validate([
            'pooja_id' => '',
            'puja_date' => 'required|date',
            'booking_end_date' => 'required|date',
            'pooja_category' => 'required|string',
            'selected_image' => 'required_if:pooja_id,|image|mimes:jpeg,png,jpg|max:2048',
            'temple_image' => 'nullable|mimes:jpeg,png,jpg|max:2048'
        ]);

        if($request->pooja_id){
            $id = $request->pooja_id;
            $check = VirtualPooja::where('pooja_id',$id)->first();
            $imageName = $check->origional_image;
        }else{
            $id = 'POJ'.rand(1111,9999).last_id('poojas');
            $imageName = '';
        }

        if ($request->hasFile('selected_image')) {
            $path = public_path('pooja/pooja_image');
            $imageName = $id.'_image.'.$request->file('selected_image')->getClientOriginalExtension();
            $request->file('selected_image')->move($path, $imageName);
        }

        if ($request->hasFile('temple_image')) {
            $path = public_path('pooja/temple');
            $templeImageName = $id.'-temple-image.'.$request->file('temple_image')->getClientOriginalExtension();
            $request->file('temple_image')->move($path, $templeImageName);
        }

        $save = VirtualPooja::updateOrCreate(
            ['pooja_id' => $id],
            [
                'date' => $request->input('puja_date'),
                'category_id' => $request->input('pooja_category'),
                'image' => $imageName,
                'booking_count' => $request->input('booking_count') ?? null,
                'temple_image' => $templeImageName ?? null,
                'booking_end_date' => $request->input('booking_end_date')
            ]
        );
        if($save){
            return redirect()->route('virtual.editPuja', ['id' => base64_encode($id)])->with('success','Pooja Saved Successfully');
        }else{
           return back()->with('fail',"Pooja Couldn't Saved");
        }
    }


    public function virtual_save_pooja_basic(Request $request){
        $request->validate([
            'pooja_id' => 'required|integer',
            'puja_date' => 'required|date',
            'booking_end_date' => 'required|date',
            'pooja_category' => 'required|string',
            'selected_image' => 'required_if:pooja_id,|image|mimes:jpeg,png,jpg|max:2048',
            'temple_image' => 'nullable|mimes:jpeg,png,jpg|max:2048'
        ]);

        $id = $request->input('pooja_id');  
        
        $update_data = [
            'date' => $request->input('puja_date'),
            'category_id' => $request->input('pooja_category'),
            'booking_end_date' => $request->input('booking_end_date')
        ];

        if($request->input('booking_count') and $request->input('booking_count') != null){
            $update_data['booking_count'] =  $request->input('booking_count');
        }

        if ($request->hasFile('selected_image')) {
            $path = public_path('pooja/pooja_image');
            $imageName = $id.'_image.'.$request->file('selected_image')->getClientOriginalExtension();
            $request->file('selected_image')->move($path, $imageName);
            $update_data['image'] =  $imageName;
        }

        if ($request->hasFile('temple_image')) {
            $path = public_path('pooja/temple');
            $templeImageName = $id.'-temple-image.'.$request->file('temple_image')->getClientOriginalExtension();
            $request->file('temple_image')->move($path, $templeImageName);
            $update_data['temple_image'] =  $templeImageName;
        }
        $save = VirtualPooja::where('id', $id)->update($update_data);
        if($save){
            return back()->with('success','Pooja Updated Successfully');
        }else{
           return back()->with('fail',"Pooja Couldn't Saved");
        }
    }

    public function virtual_save_pooja_detail(Request $request){
        $request->validate([
            'pooja_id' => 'required|integer',
            'lang' => 'required|string',
            'pooja_name' => 'required|string',
            'pooja_purpose' => 'required|string',
            'pooja_tithi' => 'required|string',
            'pooja_description' => 'required|string'
        ]);
        if($request->input('puja_detail_id')){
            
            $save = PoojaDetail::where('id', $request->input('puja_detail_id'))->update(
                [
                    'pooja_id' => $request->input('pooja_id'),
                    'lang'  => $request->input('lang'),
                    'name' => $request->input('pooja_name'),
                    'purpose' => $request->input('pooja_purpose'),
                    'tithi_name' => $request->input('pooja_tithi'),
                    'description' => $request->input('pooja_description')
                ]
            );

        }else{

            $save = PoojaDetail::updateOrCreate(
                [
                    'pooja_id' => $request->input('pooja_id'),
                    'lang'  => $request->input('lang'),
                    'name' => $request->input('pooja_name'),
                    'purpose' => $request->input('pooja_purpose'),
                    'tithi_name' => $request->input('pooja_tithi'),
                    'description' => $request->input('pooja_description')
                ]
            );

        }
       
        if($save){
           return back()->with('success','Pooja Detail Saved Successfully');
        }else{
           return back()->with('fail',"Pooja Detail Couldn't Saved");
        }
    }

    public function virtual_save_pooja_benefit(Request $request){
        $request->validate([
            'pooja_id' => 'required|integer',
            'lang' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if($request->input('puja_benefit_id')){
            
            $save = PoojaBenefit::where('id', $request->input('puja_benefit_id'))->update(
                [
                    'pooja_id' => $request->input('pooja_id'),
                    'lang'  => $request->input('lang'),
                    'title' => $request->input('title'),
                    'description' => $request->input('description')
                ]
            );

        }else{

        $save = PoojaBenefit::updateOrCreate(
            [
                'pooja_id' => $request->input('pooja_id'),
                'lang'  => $request->input('lang'),
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]
        );
        }
        if($save){
           return back()->with('success','Pooja Benefit Saved Successfully');
        }else{
           return back()->with('fail',"Pooja Benefit Couldn't Saved");
        }
    }


    public function virtual_save_pooja_process(Request $request){
        $request->validate([
            'pooja_id' => 'required|integer',
            'lang' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);


        if($request->input('puja_process_id')){
            
            $save = PoojaProcess::where('id', $request->input('puja_process_id'))->update(
                [
                    'pooja_id' => $request->input('pooja_id'),
                    'lang'  => $request->input('lang'),
                    'title' => $request->input('title'),
                    'description' => $request->input('description')
                ]
            );

        }else{

        $save = PoojaProcess::updateOrCreate(
            [
                'pooja_id' => $request->input('pooja_id'),
                'lang'  => $request->input('lang'),
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]
        );

       }
        if($save){
           return back()->with('success','Pooja Process Saved Successfully');
        }else{
           return back()->with('fail',"Pooja Process Couldn't Saved");
        }
    }


    public function virtual_save_pooja_mandir(Request $request){
        $request->validate([
            'pooja_id' => 'required|integer',
            'lang' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if($request->input('puja_mandir_id')){
            
            $save = PoojaMandir::where('id', $request->input('puja_mandir_id'))->update(
                [
                    'pooja_id' => $request->input('pooja_id'),
                    'lang'  => $request->input('lang'),
                    'title' => $request->input('title'),
                    'description' => $request->input('description')
                ]
            );

        }else{

            $save = PoojaMandir::updateOrCreate(
                [
                    'pooja_id' => $request->input('pooja_id'),
                    'lang'  => $request->input('lang'),
                    'title' => $request->input('title'),
                    'description' => $request->input('description')
                ]
            );
        }
        if($save){
           return back()->with('success','Mandir Saved Successfully');
        }else{
           return back()->with('fail',"Mandir Couldn't Saved");
        }
    }


    public function virtual_savePoojaImages(Request $request)
    {
       // Validate the form data
       $request->validate([
            'pooja_id' => 'required',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = public_path('image');
        // Process the form data
        $pooja_id = $request->input('pooja_id');
        $path = public_path('pooja/pooja_image');
        // Store the images in the public directory and database
        foreach ($request->file('image') as $image) {
            $imageName = time().'_img.'.$image->getClientOriginalExtension();
            $imagePath = $image->move($path, $imageName);
            $banner = new PoojaImage();
            $banner->pooja_id = $pooja_id;
            $banner->image = $imageName;
            $banner->save(); 
        }
        // Redirect or return a response
        return redirect()->back()->with('success', 'Puja images saved successfully');
    }


    public function delete_pooja_image(Request $request){
        $check = PoojaImage::whereNull('deleted_at')->where('id',$request->data)->first();
        if($check){
            if (file_exists(url('banner_image',$check->origional_image))){
                $delete  = File::deleteDirectory(url('pooja/pooja_image',$check->origional_image));
            }
            $list = PoojaImage::whereNull('deleted_at')->where('id',$request->data)->delete();
        }
        return 1;
    }


    public function virtual_edit_pooja($id) {
        $pooja = VirtualPooja::where('pooja_id', base64_decode($id))->first();
        $data = VirtualPoojaCategories::whereNull('deleted_at')->where('status', '0')->orderBy('cat_name','asc')->get();
        $images_list = PoojaImage::where('pooja_id', $pooja->id)->get();
        $process = PoojaProcess::where('pooja_id', $pooja->id)->get();
        $benefits = PoojaBenefit::where('pooja_id', $pooja->id)->get();
        $detail = PoojaDetail::where('pooja_id', $pooja->id)->get();
        $mandir = PoojaMandir::where('pooja_id', $pooja->id)->get();
        $package = VirtualPoojaPackage::where('pooja_id', $pooja->id)->get();
        $categories = VirtualPoojaCategories::whereNull('deleted_at')->orderBy('cat_name','desc')->get();
        return view('admin.pooja-bookings.virtual-pooja.edit_pooja_detail',compact('data','pooja','images_list','process','benefits','detail','mandir','package','categories'));
    }


    public function virtual_pooja_list(){
        $data = VirtualPooja::where('date','>=', date('Y-m-d'))->latest()->get();
        foreach ($data as $key => $value) {
            $value->bookings += VirtualPoojaBooking::where('pooja_id',$value->id)->whereNull('deleted_at')->count();
            $value->amounts += VirtualPoojaBooking::where('pooja_id',$value->id)->whereNull('deleted_at')->sum('total_price');
        }
        return view('admin.pooja-bookings.virtual-pooja.pooja-list',compact('data'));
    }

    public function virtual_past_puja(){
        $data = VirtualPooja::whereNull('deleted_at')->where('date','<', date('Y-m-d'))->latest()->get();
        foreach ($data as $key => $value) {
            $value->bookings += VirtualPoojaBooking::where('pooja_id',$value->id)->whereNull('deleted_at')->count();
            $value->amounts += VirtualPoojaBooking::where('pooja_id',$value->id)->whereNull('deleted_at')->sum('total_price');
        }
        return view('admin.pooja-bookings.virtual-pooja.pooja-list',compact('data'));
    }

    public function virtual_update_pooja(Request $request){
        $pooja = VirtualPooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        $status = '1';
        if($pooja){
            $status = $pooja->status=='0'?'1':'0';
            $update = VirtualPooja::whereNull('deleted_at')->where('pooja_id',$request->data)->update(['status'=>$status]);
        }
        return $status;
    }


    public function virtual_delete_pooja(Request $request){
        $pooja = VirtualPooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        if($pooja){
            $update = VirtualPooja::whereNull('deleted_at')->where('pooja_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            return $update;
        }
        return 1;
    }


    public function virtual_get_poojaDetails(Request $request){
        $pooja = VirtualPooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        return $pooja;
    }


    
/*-------------------------------------------------Virtual Pooja Package ------------------------------------------------------------------*/



public function virtual_get_pooja_details(Request $request){
    $pooja = VirtualPoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->first();
    return $pooja;
}


public function virtual_update_package(Request $request){
    $check = VirtualPoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->first();
    $status = '1';
    if($check){
        $status = $check->status=='0'?'1':'0';
        $update = VirtualPoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->update(['status'=>$status]);
    }
    return $status;
}


public function virtual_delete_package(Request $request){
    $check = VirtualPoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->first();
    if($check){
        $update = VirtualPoojaPackage::whereNull('deleted_at')->where('package_id',$request->data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
        return $update;
    }
    return 1;
}



public function virtual_save_package(Request $request){
    $request->validate([
        'package_id' => '',
        'pooja_id' => 'required|integer',
        'package_name' => 'required|string',
        'package_name_hindi' => 'required|string',
        'package_price' => 'required',
        'member_limit' => 'required',
        'procedure' => 'required',
        'procedure_hindi' => 'required|string',
        'package_description' => 'required|string',
        'package_description_hindi' => 'required|string'
    ]);

    // if($request->package_id){
    //     $id = $request->package_id;
    // }else{
    //     $id = 'PKG'.rand(1111,9999).last_id('pooja_packages');
    // }

    if($request->input('puja_package_id')){
            
        $save = VirtualPoojaPackage::where('id', $request->input('puja_package_id'))->update(
            [
                'pooja_id' => $request->input('pooja_id'),
                'name' => $request->input('package_name'),
                'name_hindi' => $request->input('package_name_hindi'),
                'price' => $request->input('package_price'),
                'member_limit' => $request->input('member_limit'),
                'procudre' => $request->input('procedure'),
                'procedure_hindi' => $request->input('procedure_hindi'),
                'description' => $request->input('package_description'),
                'status' => '1',
                'description_hindi' => $request->input('package_description_hindi')
            ]
        );

    }else{

      $save = VirtualPoojaPackage::updateOrCreate(
        [
            'pooja_id' => $request->input('pooja_id'),
            'name' => $request->input('package_name'),
            'name_hindi' => $request->input('package_name_hindi'),
            'price' => $request->input('package_price'),
            'member_limit' => $request->input('member_limit'),
            'procudre' => $request->input('procedure'),
            'procedure_hindi' => $request->input('procedure_hindi'),
            'description' => $request->input('package_description'),
            'status' => '1',
            'description_hindi' => $request->input('package_description_hindi')
        ]
    );
   }
    if($save){
       return back()->with('success','Package Saved Successfully');
    }else{
       return back()->with('fail',"Package Couldn't Saved");
    }
}


public function puja_enquiry(){
    $datas = JajmaanEnquiry::latest()->get();
    return view('admin.jajmaan.jajmaan-enquiry',compact('datas'));
}


public function puja_review(){
    $datas = VirtualPoojaReview::latest()->get();
    return view('admin.pooja-bookings.virtual-pooja.review-list',compact('datas'));
}


}
