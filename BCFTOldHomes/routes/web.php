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

Route::get('/', function () {
    return view('home');
});

Route::post('/', [homeController::class,'login']);

Route::get('/register', function() {
    return view('registration');
});

//Additional Patient information page
Route::get('/additional-info', function () {
    return view('Additional_Info_Patient');
})->name('additional.info.page');