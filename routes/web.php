<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WebhookController;
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

Route::get('/', [HomeController::class, 'index']);
Route::post('/schedule', [ScheduleController::class, 'getSchedule']);
Route::post('/booking', [TransactionController::class, 'createTransaction']);
Route::get('/booking', [TransactionController::class, 'showTransaction']);
Route::get('/schedule', function () {
    return redirect('/');
});
Route::post('/searchbykode', [TransactionController::class, 'searchTransaction']);
Route::post('/cancelbooking', [TransactionController::class, 'cancelTransaction']);
// Route::post('/webhook', [WebhookController::class, 'webhook']);
Route::get('/pay', [PaymentController::class, 'pay']);
Route::get('/invoice', [TransactionController::class, 'downloadInvoice']);
Route::get('/profile', function () {
    return view('frontend.profile');
});
