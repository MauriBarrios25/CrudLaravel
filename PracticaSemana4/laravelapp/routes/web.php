<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Petcontroller;
use App\Http\Controllers\SucursalController;

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


Route::resource('/',SucursalController::class);
Route::resource('sucur',SucursalController::class);
