<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\KathavachkRating;
use App\Models\Kathavachak;
use App\Models\Jajmaan;

class KathavachakRatingAPIController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kthvchk_id' => 'required|string',
            'rated_by' => 'required|string',
            'star_rating' => 'required|between:1,5',
            'rating_description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_jajmaan = Jajmaan::where('jajmaan_id',$request->rated_by)->where('deleted_at',NULL)->first();
        if (is_null($check_jajmaan)) {
            return response()->json(['message' => 'No Jajmaan Found'], 400);
        }

        $check_katha = Kathavachak::where('kthavchk_id',$request->kthvchk_id)->where('deleted_at',NULL)->first();
        if (is_null($check_katha)) {
            return response()->json(['message' => 'No Kathavachak Found'], 400);
        }

        $data = $request->all();
        $check_previous = KathavachkRating::where('kthvchk_id',$request->kthvchk_id)->where('rated_by',$request->rated_by)->first();
        if(is_null($check_previous)) {
            $rating_id = 'PUJKR' . rand(11, 99) . date('dmy') . last_id('kathavachak_rating');
        }else{
            $rating_id = $check_previous->rating_id;
        }
        $data['rating_id'] = $rating_id;

        $kathavachakRating = KathavachkRating::updateOrCreate(['rating_id' => $rating_id], $data);

        return response()->json([
                'status_code' => 200,
                'message' => 'Rating saved successfully',
                'response' => ''
            ]);
    }


    public function kathavachak_total_rating(Request $request) {
        $validator = Validator::make($request->all(), [
            'kthvchk_id' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_katha = Kathavachak::where('kthavchk_id', $request->kthvchk_id)->where('deleted_at', NULL)->first();
        if (is_null($check_katha)) {
            return response()->json(['message' => 'No Kathavachak Found'], 400);
        }

        $one_star = KathavachkRating::where('kthvchk_id', $request->kthvchk_id)->where('status', '0')->where('deleted_at', NULL)->whereBetween('star_rating', ['0', '1'])->count();
        $two_star = KathavachkRating::where('kthvchk_id', $request->kthvchk_id)->where('status', '0')->where('deleted_at', NULL)->whereBetween('star_rating', ['1', '2'])->count();
        $three_star = KathavachkRating::where('kthvchk_id', $request->kthvchk_id)->where('status', '0')->where('deleted_at', NULL)->whereBetween('star_rating', ['2', '3'])->count();
        $four_star = KathavachkRating::where('kthvchk_id', $request->kthvchk_id)->where('status', '0')->where('deleted_at', NULL)->whereBetween('star_rating', ['3', '4'])->count();
        $five_star = KathavachkRating::where('kthvchk_id', $request->kthvchk_id)->where('status', '0')->where('deleted_at', NULL)->whereBetween('star_rating', ['4', '5'])->count();

        $sum_rating = KathavachkRating::where('kthvchk_id',$value->kthavchk_id)->where('status','0')->where('deleted_at',NULL)->sum('star_rating');
        $count_rating = KathavachkRating::where('kthvchk_id',$value->kthavchk_id)->where('status','0')->where('deleted_at',NULL)->count();

        $average_rating = $count_rating>0?$sum_rating/$count_rating:0;

        $data = [
            'one_star' => $one_star,
            'two_star' => $two_star,
            'three_star' => $three_star,
            'four_star' => $four_star,
            'five_star' => $five_star,
            'total_ratings' => $total_ratings,
            'average_rating' => $average_rating,
        ];

        return $responseArray = [
            'status_code' => 200,
            'message' => 'Rating Found',
            'response' => $data
        ];
    }


    // Kathavachak Rating List
    public function get_kathavachak_rating_list(Request $request){
        $validator = Validator::make($request->all(), [
            'kthvchk_id' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_katha = Kathavachak::where('kthavchk_id',$request->kthvchk_id)->where('deleted_at',NULL)->first();
        if (is_null($check_katha)) {
            return response()->json(['message' => 'No Kathavachak Found'], 400);
        }

        $list = KathavachkRating::where('kthvchk_id',$request->kthvchk_id)->where('status','0')->where('deleted_at',NULL)->get();
        foreach ($list as $key => $value) {
            $check_jajmaan = Jajmaan::where('jajmaan_id',$request->rated_by)->where('deleted_at',NULL)->first();
            if($check_jajmaan){
                $value->name = $check_jajmaan->name.'  '.$check_jajmaan->surname;
                $value->image = $check_jajmaan->image;
            }
        }
        return $responseArray = [
            'status_code' => 200,
            'message' => 'List Found',
            'response' => $list
        ];

    }



}
