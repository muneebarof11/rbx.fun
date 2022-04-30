<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use \App\Http\Controllers\ApiController;

Route::post('/login', [ApiController::class, 'login']);

Route::post('/game-id', [ApiController::class, 'getGameId']);

Route::group(['middleware' => 'throttle:6,1'], function () {
    Route::post('/quick-task', [ApiController::class, 'updateSocialRobux']);
});

Route::post('/recent-earnings', [ApiController::class, 'recentEarnings']);
Route::post('/get-stock', [ApiController::class, 'getStock']);
Route::post('/claim', [ApiController::class, 'withdraw']);

Route::post('/open-chest', [ApiController::class, 'openChest']);

Route::get('giveaway', [ApiController::class, 'giveaway']);
Route::get('update-timer', [ApiController::class, 'updateTimer']);
Route::group(['middleware' => 'throttle:3,5'], function () {
    Route::post('join-giveaway', [ApiController::class, 'joinGiveaway']);
});
//Route::group(['middleware' => 'throttle:3,5'], function () {
    Route::any('giveaway-reward', [ApiController::class, 'giveawayReward']);
//});

Route::get('stats', [ApiController::class, 'stats']);
Route::get('referral', [ApiController::class, 'referral']);

Route::post('redeem-promocode', [ApiController::class, 'redeemRromocode']);
Route::post('claim-daily', [ApiController::class, 'claimDaily']);
Route::group(['middleware' => 'throttle:5,2'], function () {
    Route::post('event-chest', [ApiController::class, 'eventChest']);
});
Route::post('get-event-chest-stats', [ApiController::class, 'getEventChestStats']);