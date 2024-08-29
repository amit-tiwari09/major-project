<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get("/products","productController@index")->name("product.index");

Route::get("/hlo",function(){
    return "hi this is me Amit Tiwari i am from kalaiya";
});


Route::get('/theme','DemoController@index');