<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Plant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Plant  $plant
     * @return Response
     */
    public function show(Plant $plant)
    {
        $plant = Plant::with('category')->where('id', $plant->id)->get()->first();
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

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Plant  $plant
     * @return Response
     */
    public function edit(Plant $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Plant  $plant
     * @return Response
     */
    public function update(Request $request, Plant $plant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Plant  $plant
     * @return Response
     */
    public function destroy(Plant $plant)
    {
        //
    }
}
