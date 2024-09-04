<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\AppReview;
use App\Models\Katha;
use App\Models\KathaLanguage;

class AppReviewAPIController extends Controller
{
    // Store
    public function store_review(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'review_by' => 'required',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $review_id = 'PURW' . rand(11, 99) . date('dmy') . last_id('app_reviews');

        $review = new AppReview;
        $review->review_id = $review_id;
        $review->date = date('Y-m-d');
        $review->review_by = $request->input('review_by');
        $review->title = $request->input('title');
        $review->description = $request->input('description');

        $review->save();
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Posted Successfully',
            'response' => $review_id
        ];
    }


    // Get Katha
    public function get_kathas(){
        $katha = Katha::whereNull('deleted_at')->orderBy('name')->get();
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Katha Get Successfully',
            'response' => $katha
        ];
    }

    // Get Katha
    public function get_languages(){
        $language = KathaLanguage::whereNull('deleted_at')->orderBy('language')->get();
        return $responseArray = [
            'status_code' => 200,
            'message' => 'Katha Language Get Successfully',
            'response' => $language
        ];
    }


}
