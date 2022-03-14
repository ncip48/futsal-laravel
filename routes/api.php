<?php

use App\Http\Controllers\MidtransController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WebhookController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/webhook', [WebhookController::class, 'webhook']);
Route::post('/token_midtrans', [MidtransController::class, 'getSnapToken']);
Route::post('/change_status', [TransactionController::class, 'changeStatusTrx']);
