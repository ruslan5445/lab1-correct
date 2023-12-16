<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get("/home",[HomeController::class,"index"])->name("home");
Route::get("/home1",[HomeController::class,"about"])->name("home1");
Route::get("/home2",[HomeController::class,"contact"])->name("home2");
Route::post("/telephon",[HomeController::class,"telephon"]);