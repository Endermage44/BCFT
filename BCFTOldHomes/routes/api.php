<?php

<<<<<<< Updated upstream
use App\Http\Controllers\regApproveControlAPI;
=======
use App\Http\Controllers\Employee;
>>>>>>> Stashed changes
use App\Http\Controllers\registerControllerAPI;
use App\Http\Controllers\PatientControllerAPI;
use App\Http\Controllers\employeesControllerAPI;
use App\Http\Controllers\roleControllerAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Registration And User Routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('registration', registerControllerAPI::class);

//Employee Information Routes
Route::resource('empList', employeesControllerAPI::class);

//Patient Information Routes
Route::resource('patientInfo', patientControllerAPI::class);

//Roles Routes
Route::resource('roles', roleControllerAPI::class);

//Registration Approval Routes
Route::resource('regApproval', regApproveControlAPI::class);