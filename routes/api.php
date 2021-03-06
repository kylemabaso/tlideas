<?php

use App\Events\SendLocation;
use App\Http\Controllers\AuthController;
use App\Models\Geolocation;
use App\Models\Requisition;
use App\Models\RequisitionStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('requisitions', function (Request $request) {
    $id = Auth::user()->id;

    dd($id);

    $requisitions = Requisition::with('requisition_status')
        ->where('driver_id','=', $id)
        ->get();

    return $requisitions;
})->middleware('auth');


Route::get('requisition/{requisition}', function (Requisition $requisition) {
    $requisition = Requisition::first()->with('requisition_status')->get();

    return $requisition;
});


Route::get('statuses', function (Request $request) {
    $status = RequisitionStatus::where('id', '>=', 3)->get();

    return $status;
});

Route::post('/geolocation', function (Request $request) {
    $requisition_id = $request->input('requisition_id');
    $requisition_status_id = $request->input('requisition_status_id');
    $lat = $request->input('lat');
    $lng = $request->input('lng');

    $geolocation = [
        'requisition_id' => $requisition_id,
        'requisition_status_id' => $requisition_status_id,
        'lat' => $lat,
        'lng' => $lng
    ];

    $requisition_id = $geolocation['requisition_id'];
    $requisition_status_id = $geolocation['requisition_status_id'];
    $updateStatus = Requisition::where('id', $requisition_id)
        ->update(['requisition_status_id' => $requisition_status_id]);

    $setLocation = Geolocation::create([
        'lat' => $geolocation['lat'],
        'lng' => $geolocation['lng'],
        'requisition_id' => $geolocation['requisition_id']
    ]);

});

Route::get('location', function () {
    $requisition = Requisition::with('geolocations')->first();
});
