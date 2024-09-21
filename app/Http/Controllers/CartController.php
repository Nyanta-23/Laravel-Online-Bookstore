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

    public function load()
    {

        $cart = DB::table('carts')
            ->join('books', 'carts.book_id', '=', 'books.id')
            ->join('users', 'carts.user_id', '=', 'users.id')
            ->select('carts.*', 'books.book_title', 'books.price', 'books.slug', 'users.username')
            ->get();

        return response()->json([
            'user' => Auth::user()->username,
            'carts' => $cart,
        ], 200);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'quantity' => 'required',
        ]);


        $quantity = $validatedData['quantity'];

        if (!Cart::where('book_id', $request->book_id)->exists()) {

            $cart = Cart::create($validatedData);

            return response()->json([
                'message' => 'Cart item added successfully',
                'cart' => $cart
            ], 201);
        }

            $cartQuantity = Cart::where('book_id', $request->book_id)->value('quantity');

            $cartUpdate = Cart::where('book_id', $request->book_id)->update(['quantity' => $cartQuantity + $quantity]);

        return response()->json([
            'message' => 'Quantity cart on item successfully to added',
            'cart' => $cartUpdate
        ], 200);;
    }

    public function destroy(Request $request, Cart $cart)
    {

        if (Auth::user()->id != $request->user_id) {
            return response()->json([
                'message' => "Cant delete without premmission!"
            ], 404);
        }
        $cartQuantity = Cart::where('id', $cart->id)->value('quantity');

        // $cartQuantity = Cart::where('id', $cart->id)->get();

        Cart::where('id', $request->id)->update(['quantity' => $cartQuantity - 1]);


        // return response()->json([
        //     'message' => "Reducing cart item successfull!",
        //     'cart' => $cartQuantity
        // ], 200);



        Cart::destroy($cart->id);

        return response()->json([
            'message' => "Cart item delete successfully",
            'cart' => $cart->id
        ]);
    }

    public function show(Cart $cart) {

        return response()->json([
            'user' => Auth::user()->username,
            'carts' => $cart,
        ], 200);
    }
}
