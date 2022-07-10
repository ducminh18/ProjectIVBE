<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function Index(Request $request)
    {
        return view('home/pages/checkout');
    }
}
