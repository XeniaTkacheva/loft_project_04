<?php

namespace App\Http\Controllers;

use App\Plant;
use Illuminate\Http\Request;

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
}
