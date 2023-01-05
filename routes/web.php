<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
use App\Http\Controllers\products;

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

// Route::get('/index',[products::class,"index"]);
// Route::view("/create","create");
// Route::post("/store",[user::class,"store"]);
// Route::get('/delete/{id}',[user::class,"delete"]);



// Route::group(['prefix'=>'users','middleware'=>"auth"],function(){
    Route::get("sginup",[user::class,"sginup"]);
    Route::post("sginup",[user::class,"sginupRequest"]);
    Route::get("/",[user::class,"login"])->name("login");
    Route::post("login",[user::class,"loginRequest"]);
    Route::get("logout",[user::class,"logout"]);
// });

Route::group(['middleware'=>"auth"],function(){
    Route::get('/index',[products::class,"index"]);
    Route::get('/create',[products::class,"create"]);
    Route::post('/store',[products::class,"store"]);
    Route::get('/delete/{id}',[products::class,"delete"]);
    Route::get('/edit/{id}',[products::class,"edit"]);
    Route::post('/update',[products::class,"update"]);
});