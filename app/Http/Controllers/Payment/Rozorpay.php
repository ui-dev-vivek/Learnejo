<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Rozorpay extends Controller
{
    function checkOut()
    {
        return view('main.payment.checkout');
    }
}