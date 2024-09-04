<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use DateTime;
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
    PoojaPujariWithdraw
};
use Str;

class UpcomingPujaController extends Controller
{

    public function index(){
        $data = Pooja::where('status','0')->whereNull('deleted_at')->latest()->get();
        foreach ($data as $key => $value) {
            $value->bookings += PoojaBooking::where('pooja_id',$value->pooja_id)->whereNull('deleted_at')->count();
        }
        return view('admin.upcoming-pooja.list',compact('data'));
    }




    public function set_upcoming_pooja(Request $request){
        $pooja = Pooja::whereNull('deleted_at')->where('pooja_id',$request->data)->first();
        $status = '1';
        if($pooja){
            $status = $pooja->upcoming_pooja=='0'?'1':'0';
            $update = Pooja::whereNull('deleted_at')->where('pooja_id',$request->data)->update(['upcoming_pooja'=>$status]);
        }
        return $status;
    }


}
