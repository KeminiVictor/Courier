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

Auth::routes();

Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth','admin']],function(){

	Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as' => 'agent.','prefix' => 'agent','namespace' => 'Agent','middleware' => ['auth','agent']],function(){

	Route::get('dashboard','DashboardController@index')->name('dashboard');
});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
