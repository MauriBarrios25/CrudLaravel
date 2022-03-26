<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Petcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pet');
});

Route::resource('pet',PetController::class);
Route::resource('/', Petcontroller::class);
