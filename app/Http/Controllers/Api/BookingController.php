<?php

namespace App\Http\Controllers\Api;

use App\Models\Cars;
use App\Models\Booking;
use App\Models\Country;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Traits\StatusResponser;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookingResource;

class BookingController extends Controller
{
    use StatusResponser;
    public function index(){
        $bookings = Booking::query();

        if (isset($_GET['getAll']) && $_GET['getAll'] == '1') {
            return $this->apiSuccessResponse(BookingResource::collection($bookings->get()), 'Data Get Successfully!');
        }

        if (isset($_GET['searchParameter']) && $_GET['searchParameter'] != '') {
            $bookings = $bookings->where('car_number', 'LIKE', "%" . $_GET['searchParameter'] . "%")
                ->orWhere('email', 'LIKE', "%" . $_GET['searchParameter'] . "%")
                ->orWhere('first_name', 'LIKE', "%" . $_GET['searchParameter'] . "%")
                ->orWhere('last_name', 'LIKE', "%" . $_GET['searchParameter'] . "%")
                ->orWhere('phone_no', 'LIKE', "%" . $_GET['searchParameter'] . "%");
        }

        $limit = isset($_GET['limit']) && $_GET['limit'] != '' ? $_GET['limit'] : 10;

        try {
            return $this->apiSuccessResponse(BookingResource::collection($bookings->paginate($limit)), 'Data Get Successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse();
        }
    }

    public function store(Request $request){
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required',
            'payment_type' => 'required',
        ]);

        $validatedData['rent_price'] = $request['rent_price'];
        $booking = Booking::create($request->all());
        $refrenceNumber = str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        return response()->json(['booking' => new BookingResource($booking),
                            'refrenceNumber' => $refrenceNumber,
                            'message' => 'Booking created successfully!'], 200);
    }

    public function destroy($id){
        $booking = Booking::find($id);
        $booking->delete();
        return $this->successResponse([], 'Booking Deleted Successfully!');    }

    public function getAvaiableCars(){
        $availableCars = 0;
        $bookedCars = 0;

        $bookedCarNumbers = Booking::pluck('car_number')->toArray();
        $cars = Cars::get();

        foreach ($cars as $car) {
            if (in_array($car->vehicle_number, $bookedCarNumbers)) {
                $bookedCars++;
            } else {
                $availableCars++;
            }
        }
        return response()->json(['booked_cars' => $bookedCars,'available_cars' =>$availableCars]);
    }

    public function getCountries(){
        $countries = Country::get();
        return response()->json($countries,200);
    }
}
