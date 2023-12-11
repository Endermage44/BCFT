<?php

use App\Http\Controllers\dashboardsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Employee;
use App\Http\Controllers\employeesControllerAPI;
use App\Http\Controllers\RosterApiController;
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

// Family Member Login
Route::get('/familyLogin', function() {
    return view('familyLogin');
});

//Doctor Dash
Route::get('/docDash', function(){
    return view('doctorDash');
});

//Admin Dashboard
Route::get('/adminDash', function() {
    return view('adminDash');
});

//Patients DashBoard
Route::get('/patDashboard', function(){
    return view('patientsDashboard');
});

//Caregivers DashBoard
Route::get('/careDashboard', function(){
    return view('caregiversDashboard');
});

//Supervisor Dashboard
Route::get('/supDashboard', function(){
    return view('supervisorDash');
});

//Roster Page
Route::get('/roster', [dashboardsController::class,'roster']);
//Patient Additional Info Page
Route::get('/patAdInfo', [dashboardsController::class,'addInfoPatient']);
//Doctors Home Page
Route::get('/docHome', [dashboardsController::class,'doctorsHome']);
//Patients Home Page
Route::get('/patHome', [dashboardsController::class,'patientsHome']);
//Doctors Appointments Page
Route::get('/docAppt', [dashboardsController::class,'doctorAppointments']);
//Admin Report Page
Route::get('/adReport', [dashboardsController::class,'adminReport']);
//Caregiver's Home Page
Route::get('/careHome', [dashboardsController::class,'caregiversHome']);
//Patient of Doctor Page
Route::get('/patOfDoc', [dashboardsController::class,'patientOfDoctor']);

