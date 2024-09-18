<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function load() {

        $cart = DB::table('carts')
            ->join('books', 'carts.book_id', '=', 'books.id')
            ->join('users', 'carts.user_id', '=', 'users.id')
            ->select('carts.*', 'books.*', 'users.username')
            ->get()
            ;

        return response()->json([
            'user' => Auth::user()->username,
            'carts' => $cart
        ], 200);
    }
}
