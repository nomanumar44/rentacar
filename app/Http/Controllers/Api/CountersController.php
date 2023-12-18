<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Counter;
use Illuminate\Http\Request;
use App\Traits\StatusResponser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CountersRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CountersController extends Controller
{
    use StatusResponser;
   
    public function index()
    {
        $counters = Counter::all();
        return $counters;
        return $this->successResponse($counters, 'Date get successfully!');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '*.counter_no' => 'required|integer',
            '*.name' => 'required|string',
            '*.email' => 'required|email',
        ],[
            '*.counter_no.required' => 'The counter number is required.',
            '*.counter_no.integer' => 'The counter number must be an integer.',
            '*.name.required' => 'The name is required.',
            '*.name.string' => 'The name must be a string.',
            '*.email.required' => 'The email is required.',
            '*.email.email' => 'Invalid email format.',
        ]);
    
        if ($validator->fails()) {
            return $this->errorResponse($validator->errors());
        }
        $authId = Auth::id();
        $createdCounters = [];

        foreach($request->all() as $counter){
            if(Counter::where('id',$counter['id'])->exists()){
                $CounterValue = Counter::find($counter['id']);
                $user = User::where('email',$counter['email'])->first();
                if(isset($user)){
                    $user->update([
                        'name' => $counter['name'],
                        'email' => $counter['email'],
                        'role' => 'user',
                        'password' => Hash::make(123),
                    ]);
                }
                $CounterValue->update([
                    'auth_id' => $authId,
                    'counter_no' => $counter['counter_no'],
                    'name' => $counter['name'],
                    'email' => $counter['email'],
                ]);
            }else{
                User::create([
                    'name' => $counter['name'],
                    'email' => $counter['email'],
                    'role' => 'user',
                    'password' => Hash::make(123),
                ]);
                $createdCounter = Counter::create([
                    'auth_id' => $authId,
                    'counter_no' => $counter['counter_no'],
                    'name' => $counter['name'],
                    'email' => $counter['email'],
                ]);
                $createdCounters = $createdCounter;
            }
        }

        if($createdCounters){
            return $this->successResponse($createdCounters, 'Counters created successfully!');
        }else{
            return $this->successResponse('', 'Counters Update successfully!');
        }
        return $this->errorResponse();
    }

    public function destroy($id){
        $counter = Counter::find($id);
        $user = User::where('email',$counter->email)->first();
        if(isset($user)){
            $user->delete();
        }else if(isset($counter)){
            $counter->delete();
        }
    }

}
