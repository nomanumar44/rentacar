<?php

namespace App\Http\Controllers\Api;

use App\Models\ContactUs;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Traits\StatusResponser;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactUsResource;
use App\Jobs\SendContactEmailJob;

class ContactUsController extends Controller
{
    use StatusResponser;
    public function index(){
        $contactUs = ContactUs::query();
        if(isset($_GET['searchParameter']) && $_GET['searchParameter'] != ''){
            $services = $contactUs->where('name', 'Like', "%".$_GET['searchParameter']."%")
                ->orWhere('email', 'Like', "%".$_GET['searchParameter']."%")
               ->orWhere('phone_no', 'Like', "%".$_GET['searchParameter']."%");
        }
        if(isset($_GET['limit']) && $_GET['limit'] != ''){
            $limit = $_GET['limit'];
        }
        else{
            $limit = 10;
        }

        try {
            return $this->apiSuccessResponse(ContactUsResource::collection($contactUs->paginate($limit)), 'Data Get Successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse();
        }
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone_no' => 'required|integer',
            'email' => 'required|email',
        ]);
        $params = $request->all();
        $contactUs = ContactUs::create($params);
        SendContactEmailJob::dispatch($contactUs->email);
        return $this->successResponse($contactUs,'Thanks For Contact Us',200);
    }

    public function destroy($id){
        $contactUs = ContactUs::find($id);
        $contactUs = $contactUs->delete();
        return $this->successResponse($contactUs,'Delete Contact Us Successfully',200);
    }
}
