<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        return view('cart')
            ->with('pageTitle', 'Cart');
    }

    public function delivery()
    {
        return view('delivery')
            ->with('pageTitle', 'Delivery information');
    }
}
