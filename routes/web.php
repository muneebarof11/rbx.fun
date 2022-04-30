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
use \App\Http\Controllers\HomeController as Controller;
use \App\Http\Controllers\OfferwallController;

Route::get('/', 		[Controller::class, 'index']);
Route::get('/pages/loading', 	function () { return view('loading'); });

Route::group(['prefix' => 'pb',  'middleware' => 'offerWall'], function() {
    Route::any('/adgate', 	[OfferwallController::class, 'adgateWall']);
    Route::any('/offerotoro', 	[OfferwallController::class, 'offerotoroWall']);
    Route::any('/lootably', 	[OfferwallController::class, 'lootablyWall']);
    Route::any('/ayet', 	[OfferwallController::class, 'ayetWall']);
    Route::any('/adgem', 	[OfferwallController::class, 'adgemWall']);
    Route::any('/cpx', 	[OfferwallController::class, 'cpxWall']);
});

Route::get('/putin', 	[Controller::class, 'addCookie']);
Route::post('/putin', 	[Controller::class, 'addCookie'])->name('putin');

Route::get('/logs', 		[Controller::class, 'logs']);

Route::get('/re-check-cookie', [\App\Http\Controllers\ApiController::class, 'recheckCookie']);