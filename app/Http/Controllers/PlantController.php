<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
{
    public function show(int $id)
    {
        $plant = Plant::with('category')->where('id', $id)->get()->first();
        return view('plants.single', ['plant' => $plant]);
    }

    public function category($categoryId)
    {
        $plants = Plant::query()->where('category_id', $categoryId)->get();
        return view('main', ['plants' => $plants]);
    }

    public function buy($plantId)
    {
        $plant = Plant::query()->find($plantId);
        if (!$plant) {
            return redirect()->route('home');
        }
        $cart = new Cart();
        $cart->plant_id = $plantId;
        $cart->user_id = Auth::id();
        $cart->save();
        return redirect()->route('cart.list');
    }

}
