<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CarsController,
    ContactUsController,
    CountersController,
    ServicesController,
    TokenController,
    UserController,
    BookingController
};
use App\Http\Controllers\Auth\AuthenticatedSessionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('user', [UserController::class,'show']);
Route::apiResource('contact_us',ContactUsController::class);
Route::controller(CarsController::class)->group(function(){
    Route::post('image_upload','uploadImage');
    Route::get('get_suvs','getSuvs');
    Route::get('get_cars','getCars');
    Route::get('get_vans','getVans');
    Route::post('filter_data','getFilterData');
    Route::apiResource('cars',CarsController::class);
});
Route::controller(BookingController::class)->group(function(){
    Route::get('/countries','getCountries');
    Route::get('avaiable_cars','getAvaiableCars');
    Route::apiResource('booking_cars',BookingController::class);
});
Route::get('get_services',[ServicesController::class, 'getServices']);
Route::apiResource('services',ServicesController::class)->middleware('auth:sanctum');
Route::apiResource('counters',CountersController::class);
Route::get('get_token_number',[TokenController::class, 'getTokenNumber']);
Route::post('save_token',[TokenController::class,'SaveToken']);
Route::get('get_current_token/{counter_no}',[TokenController::class,'getCurrentToken']);
Route::post('skipe_next_token',[TokenController::class, 'skipeNextToken']);
Route::post('get_next_token',[TokenController::class,'getNextToken']);
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:sanctum');
Route::get('get_all_tokens',[TokenController::class, 'index']);
