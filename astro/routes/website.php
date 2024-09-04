<?php

use App\Http\Controllers\Admin\PageManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PaymentController;

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('privacyPolicy', [PageManagementController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('terms-condition', [PageManagementController::class, 'termscondition'])->name('termscondition');



 // Payment Related 
 Route::get('payment', [PaymentController::class, 'payment'])->name('payment');
 Route::post('payment', [PaymentController::class, 'payment'])->name('payment');
 Route::get('payment-success', [PaymentController::class, 'paymentsuccess']);
 Route::post('payment-success', [PaymentController::class, 'paymentsuccess'])->name('payment-success');
 Route::get('payment-failed', [PaymentController::class, 'paymentfailed'])->name('payment-faileds');
 Route::post('payment-failed', [PaymentController::class, 'paymentfailed'])->name('payment-failed');
 Route::get('payment-response', [PaymentController::class, 'paymentsresponse']);
 Route::post('payment-response', [PaymentController::class, 'paymentsresponse'])->name('payment-response');
//  Route::get('payment-process', [PaymentController::class, 'paymentprocess']);
 Route::post('payment-process', [PaymentController::class, 'paymentprocess'])->name('payment-process');
 Route::get('payment-pending', [PaymentController::class, 'paymentpending']);
 Route::post('payment-pending', [PaymentController::class, 'paymentpending'])->name('payment-pending');
 Route::get('payu-merchant-form', [PaymentController::class, 'payumerchantform'])->name('payumerchantform');
 Route::get('paytm-merchant-form', [PaymentController::class, 'paytmmerchantform'])->name('paytmmerchantform');