<?php

namespace App\Http\Controllers\Api;

use App\Models\Cars;
use Illuminate\Http\Request;
use App\Traits\StatusResponser;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarsResource;

class CarsController extends Controller
{
    use StatusResponser;

    public function index(){
        $cars = Cars::query();
        if(isset($_GET['searchParameter']) && $_GET['searchParameter'] != ''){
            $cars = $cars->where('vehicle_name', 'Like', "%".$_GET['searchParameter']."%")
            ->orWhere('vehicle_type','Like', "%".$_GET['searchParameter']."%")
            ->orWhere('brand','Like', "%".$_GET['searchParameter']."%")
            ->orWhere('price','Like', "%".$_GET['searchParameter']."%");
        }
        if(isset($_GET['limit']) && $_GET['limit'] != ''){
            $limit = $_GET['limit'];
        }
        else{
            $limit = 10;
        }

        try {
            return $this->apiSuccessResponse(CarsResource::collection($cars->paginate($limit)), 'Data Get Successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse();
        }
    }

    public function uploadImage(Request $request){
        $this->validate($request, [
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image = $request->file('file');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/cars');
        $image->move($destinationPath, $name);
        return '/cars/'.$name;
    }

    public function store(Request $request){
        $this->validate($request,[
            'number_of_seats' => 'required|numeric',
            'price' => 'required|numeric',
            'vehicle_name' => 'required',
        ]);
        $params = $request->all();
        $car = Cars::create($params);
        return $this->successResponse($car,'Vehicle Created Successfully');
    }

    public function show($id){
        $car = Cars::find($id);
        return $this->successResponse($car,'Vehicle Retrived Successfully');
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'number_of_seats' => 'required|numeric',
            'price' => 'required|numeric',
            'vehicle_name' => 'required',
        ]);
        $car = Cars::find($id);
        $car = $car->update($request->all());
        return $this->successResponse($car,'Vehicle Updated Successfully');
    }

    public function destroy($id){
        $car = Cars::find($id);
        $imagePath = public_path($car->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $car = $car->delete();
        return $this->successResponse($car,'Vehicle Deleted Successfully');
    }

    public function getSuvs(){
        $suvs = Cars::where('vehicle_type','SUV')->get();
        return $this->successResponse($suvs,'Suvs get successfully');
    }

    public function getCars(){
        $cars = Cars::get();
        return $this->successResponse($cars,'Vehciles get successfully');
    }

    public function getVans(){
        $vans = Cars::where('vehicle_type','Ute')->get();
        return $this->successResponse($vans,'Vans get successfully');
    }

    public function getFilterData(Request $request){
        $data = $request['data'];
        $vehicles  = Cars::where('vehicle_type',$data['vehicleType'])
            ->where('location_store',$data['metroType'])->get();
        return $this->successResponse($vehicles,'Vehicles get successfully');
    }
}
