<?php

namespace App\Http\Controllers\API\Astrologer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Astrologer;
use App\Models\AstroRating;
use App\Models\AstroPlan;
use Str;

class PlanAPIController extends Controller
{


    //Astrologer List
    public function astrologer_plan_list(){
        $check = AstroPlan::where('status','0')->where('deleted_at',NULL)->get();
        foreach ($check as $key => $value) {
            $value->features = unserialize($value->features);
        }
        return response()->json([
            'status_code' =>200,
            'message' => 'List Found',
            'response' => $check
        ]);

    }







}
