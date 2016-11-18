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
	return view('pages.home');
});

Route::resource('sales', 'SalesTransactionController');
Route::resource('reports', 'ReportsController');

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('logout', 'Auth\LoginController@logout');
// Route::get('/reports',function(){
// 	return view('reports');
// })->middleware('auth');

