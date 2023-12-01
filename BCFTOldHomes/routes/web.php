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
Route::get('/', function(){
    return view('home');
});

//Registration page
Route::get('/register', function() {
    return view('registration');
});

//Doctors Landing Page
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

//Patients Home page
Route::get('/pathomePage',function(){
    return view('patientHome');
});

//Patients DashBoard 
Route::get('/patDashboard',function(){
    return view('patientsDashboard');
});

//Caregivers DashBoard
Route::get('/careDashboard',function(){
    return view('caregiversDashboard');
});

//Additional Patients Info Page
Route::get('/patPage', function(){
    return view('patientsPage');
});