<?php

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
Route::get('xinchao/{name}', function ($name) {
    echo 'xin chào '.$name;
});
Route::get('hello','Index_controller@index');
Route::get('install','Install@Creat_User');