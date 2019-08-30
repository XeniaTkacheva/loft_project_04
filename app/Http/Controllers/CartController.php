<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderPlant;
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

    public function order()
    {
        $userId = Auth::id();
        $cart = Cart::with('plant')->where('user_id', $userId)->get();
        if (!$cart) {
            return redirect()-> route('home');
        }

        $order = new Order();
        $order->user_id = $userId;
        $order->save();

        if(!$order->id) {
            return redirect()-> route('home');
        }

        $data = [];
            foreach ($cart as $buying) {
                $data[] = [
                    'order_id' => $order->id,
                    'plant_id' => $buying->plant->id,
                    'price' => $buying->plant->price
                ];
            }
        OrderPlant::insert($data);
        Cart::query()->where('user_id', $userId)->delete();
        $mailAttr = [
            'theme' => 'Получен заказ от пользователя ' . $userId,
            'body' => view('mail.order', ['data' => $data])
        ];
        $send = new OrderController;
        $send->sendOrderMail($mailAttr);

        return redirect()-> route('orders.list');
    }
}
