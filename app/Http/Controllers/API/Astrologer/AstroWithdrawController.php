<?php

namespace App\Http\Controllers\API\Astrologer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Astrologer;
use App\Models\AstrologerBooking;
use App\Models\Jajmaan;
use App\Models\AstroWithdrawMoney;
use Str;

class AstroWithdrawController extends Controller
{
    // AstroBooking
    public function store(Request $request){
         // Validate the request data
         $validator = Validator::make($request->all(), [
            'astro_id' => 'required|string',
            'ac_holder' => 'required|string',
            'ac_number' => 'required|string',
            'ifsc' => 'required|string',
            'type' => 'required|string',
            'amount' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $check_wallet = Astrologer::where('astro_id',$request->astro_id)->where('status','0')->first();
        if($check_wallet){
            if((int)$request->input('amount')<=(int)$check_wallet->astro_wallet){

                $withdraw_id = 'ASTW' . date('dmy') . last_id('astro_withdraw_money');

                // Create a new Astrologer record
                $astrologer = new AstroWithdrawMoney([
                    'withdraw_id' => $withdraw_id,
                    'astro_id' => $request->input('astro_id'),
                    'withdraw_date' => date('d-m-Y'),
                    'ac_holder' => $request->input('ac_holder'),
                    'ac_number' => $request->input('ac_number'),
                    'ifsc' => $request->input('ifsc'),
                    'type' => $request->input('type'),
                    'amount' => $request->input('amount')
                ]);

                $astrologer->save();
                $new_balance = (int)$check_wallet->astro_wallet - (int)$request->input('amount');
                $check_wallet = Astrologer::where('astro_id',$request->astro_id)->where('status','0')->update(['astro_wallet' => $new_balance]);

                return $responseArray = [
                    'status_code' => 200,
                    'message' =>'Request Placed Successfully',
                    'response' => $withdraw_id
                ];
            }else{
                return $responseArray = [
                    'status_code' => 400,
                    'message' =>'Insufficient Wallet Balance',
                    'response' => ''
                ];
            }
        }else{
            return $responseArray = [
                'status_code' => 400,
                'message' =>'Astrologer Not Found',
                'response' => ''
            ];
        }
    }


    public function withdraw_history(Request $request){
        $validator = Validator::make($request->all(), [
            'astro_id' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $check_astro = Astrologer::where('astro_id',$request->astro_id)->where('deleted_at',NULL)->first();
        if (is_null($check_astro)) {
            return response()->json(['message' => 'No Astrologer Found'], 400);
        }
        $list = array();

        $money = AstroWithdrawMoney::where('astro_id',$request->astro_id)->latest()->get();
        foreach ($money as $key => $value) {
            $list[] = [
                'withdraw_id' => $value->withdraw_id,
                'withdraw_status' => $value->withdraw_status,
                'withdraw_date' => $value->withdraw_date,
                'astro_id' => $value->astro_id,
                'ac_holder' => $value->ac_holder,
                'ac_number' => $value->ac_number,
                'ifsc' => $value->ifsc,
                'type' => $value->type,
                'amount' => $value->amount,
            ];
        }
        return $responseArray = [
            'status_code' => 200,
            'message' =>'List Found',
            'response' => $list
        ];

    }


}
