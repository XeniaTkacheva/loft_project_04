<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::with('plant.category')->where('user_id', Auth::id())->get();
        return view('cart.list', ['cart' => $cart]);
    }
    public function deleteItem($cartId)
    {
        Cart::find($cartId)->delete();
        return redirect()->route('cart.list');
    }
}
