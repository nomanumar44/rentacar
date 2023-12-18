<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\StatusResponser;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use StatusResponser;

    public function index()
    {
        $user = User::query();

        if(isset($_GET['getAll']) && $_GET['getAll'] == '1'){
            return $this->apiSuccessResponse(UserResource::collection($user->get()), 'Data Get Successfully!');
        }
        if(isset($_GET['searchParameter']) && $_GET['searchParameter'] != ''){
            $user = $user->where('name', 'Like', "%".$_GET['searchParameter']."%");
        }
        if(isset($_GET['limit']) && $_GET['limit'] != ''){
            $limit = $_GET['limit'];
        }
        else{
            $limit = 10;
        }

        try {
            return $this->apiSuccessResponse(UserResource::collection($user->paginate($limit)), 'Data Get Successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse();
        }

    }
    public function show()
    {
        $userId = Auth::id();
        $user = User::findById($userId);
        try {
            return $this->apiSuccessResponse(new UserResource($user->firstOrFail()), 'Data Get Successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse();
        }

    }

    public function store(Request $request)
    {
        $rules = [
            'fullname' => 'required|string',
            'fathername' => 'required|string',
            'address' => 'required|string',
            'cnic' => 'required|regex:/^[0-9]{5}[-]{1}[0-9]{7}[-]{1}[0-9]{1}$/',
            'roll' => 'required|string',
        ];
        $this->validate($request, $rules);

        $sql = User::create([
            'fullname' => $request->fullname,
            'fathername' => $request->fathername,
            'address' => $request->address,
            'cnic' => $request->cnic,
            'roll' => $request->roll,
        ]);
       
        if($sql){
            return $this->successResponse($sql, 'User created successfully!');
        }
        return $this->errorResponse();
    }

    public function update(Request $request)
    {
        
        $rules = [
            'fullname' => 'required|string',
            'fathername' => 'required|string',
            'address' => 'required|string',
            'cnic' => 'required|regex:/^[0-9]{5}[-]{1}[0-9]{7}[-]{1}[0-9]{1}$/',
            'roll' => 'required|string',
        ];
        $this->validate($request, $rules);

        $sql = User::find($request->id)->update([
            'fullname' => $request->fullname,
            'fathername' => $request->fathername,
            'address' => $request->address,
            'cnic' => $request->cnic,
            'roll' => $request->roll,
        ]);

        if($sql){
            return $this->successResponse($sql, 'User updated successfully!');
        }
        return $this->errorResponse();
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return $this->successResponse([], 'User Deleted Successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse();
        }
    }
}
