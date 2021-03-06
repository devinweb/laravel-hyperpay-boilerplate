<?php

namespace App\Http\Controllers;

use App\Billing\HyperPayBilling;
use Devinweb\LaravelHyperpay\Facades\LaravelHyperpay;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class HyperPayPaymentController extends Controller
{
    /**
     * Create a new PaymentController instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function payment(Request $request)
    {
        $model = config('hyperpay.model');
        $user = app($model)->first();
        
        $amount = 1;
        $brand = $request->brand;
        $trackable_data = [
            'product' => 'teams',
            'product_id'=> Str::random('64'),
        ];


        return LaravelHyperpay::addBilling(new HyperPayBilling($request))->checkout($trackable_data, $user, $amount, $brand, $request);
    }

    public function paymentStatus(Request $request)
    {
        $resourcePath = $request->get('resourcePath');
        $checkout_id = $request->get('id');

        return LaravelHyperpay::paymentStatus($resourcePath, $checkout_id);
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function finalize(Request $request)
    {
        return view('finalize', [
            'id' => $request->get('id'),
            'resourcePath' => $request->get('resourcePath'),
        ]);
    }
}
