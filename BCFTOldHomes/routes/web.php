<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Login Page
Route::post('/', [homeController::class,'login']);

//Registration page
Route::get('/', function() {
    return view('registration');
});

//Doctor's Home
Route::get('/doctorLanding', function() {
    return view('doctorLanding');
});

//Additional Patient information page
Route::get('/addPatInfo', function () {
    return view('additionalInfoPatient');
});

//Admin Dashboard
Route ::get('/adminDash', function() {
    return view('adminLanding');
});