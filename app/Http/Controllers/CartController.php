<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function load() {
        // $cart = Cart::where('user_id', Auth::user()->id)->latest()->get();
        $cart = Cart::latest()->get();

        return response()->json([
            'user' => Auth::user()->id,
            'carts' => $cart
        ], 200);
    }
}
