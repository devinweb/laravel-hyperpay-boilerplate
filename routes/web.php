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


Route::get('hyperpay/checkout', 'HyperPayPaymentController@checkout')->name('checkout');
Route::post('hyperpay/payment', 'HyperPayPaymentController@payment')->name('payment');
Route::post('hyperpay/payment-status', 'HyperPayPaymentController@paymentStatus')->name('payment-status');
Route::get('hyperpay/finalize', 'HyperPayPaymentController@finalize')->name('finalize');
