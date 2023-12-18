<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Traits\StatusResponser;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServicesResource;
use App\Models\Services;

class ServicesController extends Controller
{
    use StatusResponser;

    public function index()
    {
        
        $services = Services::query();
        if(isset($_GET['getAll']) && $_GET['getAll'] == '1'){
            return $this->apiSuccessResponse(ServicesResource::collection($services->get()), 'Data Get Successfully!');
        }
        if(isset($_GET['searchParameter']) && $_GET['searchParameter'] != ''){
            $services = $services->where('name', 'Like', "%".$_GET['searchParameter']."%");
        }
        if(isset($_GET['limit']) && $_GET['limit'] != ''){
            $limit = $_GET['limit'];
        }
        else{
            $limit = 10;
        }

        try {
            return $this->apiSuccessResponse(ServicesResource::collection($services->paginate($limit)), 'Data Get Successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse();
        }

    }
    public function show(Services $service)
    {

        try {
            return $this->apiSuccessResponse(new ServicesResource($service), 'Data Get Successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse();
        }

    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'urdu_name' => 'required',
        ];
        $this->validate($request, $rules);

        $sql = Services::create([
            'name' => $request->name,
            'urdu_name' => $request->urdu_name,
        ]);

        if($sql){
            return $this->successResponse($sql, 'Service created successfully!');
        }
        return $this->errorResponse();

    }

    public function update(Request $request,Services $category)
    {

        $rules = [
            'id' => 'required',
            'name' => 'required',
            'urdu_name' => 'required',
        ];
        $this->validate($request, $rules);

        $sql = Services::find($request->id)->update([
            'name' => $request->name,
            'urdu_name' => $request->urdu_name,
        ]);

        if($sql){
            return $this->successResponse($sql, 'Service updated successfully!');
        }
        return $this->errorResponse();

    }

    public function destroy(Services $service)
    {
        try {
            $service->delete();
            return $this->successResponse([], 'Service Deleted Successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse();
        }
    }

    public function getServices(){
        $services = Services::all();
        return response()->json(['data' => $services ]);
    }
}
