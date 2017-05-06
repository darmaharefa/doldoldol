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

// Dummy

Route::get('/owner', function () {
    return view('operator.owner');
});

// Merge


// Fix Route

Route::get('/', function () {
    return view('trip.home');
});

Route::get('/list-trip', function(){
	return view('trip.listTrip');
});


Route::get('/detail', function () {
    return view('trip.detail');
});

Route::get('/operator', function () {
    return view('operator.operator');
});

Route::get('/akun-setting', function () {
    return view('operator.akunSetting');
});

Route::get('/create-trip', function () {
    return view('operator.createTrip');
});

