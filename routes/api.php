<?php

use App\Http\Controllers\TestController;
use App\Service\OrderService;
use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('order',[OrderService::class,'create2']);

Route::post('user',[OrderService::class,'create3']);

Route::get('test1',[TestController::class,'index']);