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

Route::get('/', function(){
	return view('pages/rewards');
});

Route::get('/reward_detail', function(){
	return view('pages/reward_detail');
});

Route::get('/shipment', function(){
	return view('pages/shipment');
});
