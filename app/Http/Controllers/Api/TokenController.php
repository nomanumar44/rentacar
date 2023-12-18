<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tokens;
use Illuminate\Http\Request;
use App\Events\TokenUpdates;

class TokenController extends Controller
{
    public function index(){
        $date = date('Y-m-d');
        $tokens = Tokens::where('date',$date)->get();
        event(new TokenUpdates($tokens));
        return response()->json(['data'=>$tokens]);
    }
    public function SaveToken(Request $request){
        $token = new Tokens();
        $token->phone_no = $request['phone_no'];
        $token->service_id = $request['service_id'];
        $token->status = 0;
        $token->date = date('Y-m-d');
        $token->token_no = Tokens::generateToken();
        $token->save();
        return response()->json(['data' => $token],200);
    }

    public function getTokenNumber(){
        $date = date('Y-m-d');
        $tokenNumber = Tokens::whereDate('date', $date)->latest('token_no')->first();
        if ($tokenNumber !== null) {
            $data = $tokenNumber->token_no;
        } else {
            $data = null;
        }
        return response()->json(['data' => $data]);
    }

    public function getCurrentToken($counterNumber){
        $date = date('Y-m-d');
        $tokens = Tokens::where('date',$date)->get();
        event(new TokenUpdates($tokens));
        if (Tokens::where([['counter_id', $counterNumber], ['status', 'Active'], ['date', $date]])->exists()) {
            $token = Tokens::where([['counter_id', $counterNumber], ['status', 'Active'], ['date', $date]])->first();
            return response()->json(['token' => $token->token_no], 200);
        } else {
            $tokenNumber = Tokens::where([['counter_id', null], ['status', 0], ['date', $date]])->first();
            if ($tokenNumber != null) {
                $tokenNumber->counter_id = $counterNumber;
                $tokenNumber->status = "Active";
                $tokenNumber->save();
                $token = Tokens::where([['counter_id', $counterNumber], ['status', 'Active'], ['date', $date]])->first();
                return response()->json(['token' => $token->token_no], 200);
            }else{
                return response()->json(['message' => 'Token not found or is not active.']); 
            }
        }
    }

    public function getNextToken(Request $request)
    {
        $date = date('Y-m-d');
        if (Tokens::where([
            ['counter_id', $request['counter_id']],
            ['status', 'Active'],
            ['token_no', $request['token']],
            ['date', $date]
        ])->exists()) {
            $token = Tokens::where([
                ['counter_id', $request['counter_id']],
                ['status', 'Active'],
                ['token_no', $request['token']],
                ['date', $date]
            ])->first();
            
            $token->status = "complete";
            $token->save();

            $tokenNumber = Tokens::where([
                ['counter_id', null],
                ['status', 0],
                ['date', $date]
            ])->first();

            if ($tokenNumber) {
                $tokenNumber->counter_id = $request['counter_id'];
                $tokenNumber->status = "Active";
                $tokenNumber->save();
                $token = Tokens::where([
                    ['counter_id', $request['counter_id']],
                    ['status', 'Active'],
                    ['date', $date]
                ])->first();
                event(new TokenUpdates($token));
                return response()->json(['token' => $token->token_no], 200);
            } else {
                return response()->json(['message' => 'You have no more tokens to process.'], 200); 
            }
        } else {
            return response()->json(['message' => 'Token not found or is not active.']); 
        }
    }

    public function skipeNextToken(Request $request){
        $date = date('Y-m-d');
        
        if (Tokens::where([
            ['counter_id', $request['counter_id']],
            ['status', 'Active'],
            ['token_no', $request['token']],
            ['date', $date]
        ])->exists()) {
            $token = Tokens::where([
                ['counter_id', $request['counter_id']],
                ['status', 'Active'],
                ['token_no', $request['token']],
                ['date', $date]
            ])->first();
            
            $token->status = "missing";
            $token->save();

            $tokenNumber = Tokens::where([
                ['counter_id', null],
                ['status', 0],
                ['date', $date]
            ])->first();

            if ($tokenNumber) {
                $tokenNumber->counter_id = $request['counter_id'];
                $tokenNumber->status = "Active";
                $tokenNumber->save();
                $token = Tokens::where([
                    ['counter_id', $request['counter_id']],
                    ['status', 'Active'],
                    ['date', $date]
                ])->first();

                return response()->json(['token' => $token->token_no], 200);
            } else {
                return response()->json(['message' => 'You have no more tokens to process.'], 200); // Added a missing status code
            }
        } else {
            return response()->json(['message' => 'Token not found or is not active.'], 404); // Return 404 if token not found
        }
   }
}
