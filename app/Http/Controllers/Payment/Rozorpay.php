<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class Rozorpay extends Controller
{
    function checkOut()
    {
        Artisan::call();
        return view('main.payment.checkout');
    }
}
