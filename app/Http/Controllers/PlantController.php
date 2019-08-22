<?php

namespace App\Http\Controllers;

use App\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function show(int $id)
    {
        return view('plants.single');
    }

    public function category($categoryId)
    {
        $plants = Plant::query()->where('category_id', $categoryId)->get();
        return view('main', ['plants' => $plants]);
    }
}
