<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;
use Illuminate\Auth\Events\Validated;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ( 'admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //valida i dati
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'photo'=>'required|url',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'visible'=>'required|boolean',
        ]);
        //crea il nuovo piatto
        Dish::create($validated);
        return redirect()->route('dishes.index')->with('success', 'Dish created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        return view('admin.dishes.edit'. compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        //validazione
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'photo'=>'required|url',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'visible'=>'required|boolean',
        ]);
        $dish->update($validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route('admin.dishes.index')->with('success', 'Dish deleted!');
    }
}
