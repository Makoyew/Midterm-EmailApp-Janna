<?php

namespace App\Http\Controllers;

use App\Events\UserLog; // ensure you have this event
use App\Models\Foods;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    // Display a listing of the food.
    public function index()
    {
        $foods = Foods::all();
        return view('foods.index', compact('foods'));
    }

    public function create()
    {
        return view('foods.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $food = Foods::create($request->all());

        $user = auth()->user()->name;
        $log_entry = $user . " added a food \"" . $food->name . "\" with the ID " . $food->id;
        event(new UserLog($log_entry));

        return redirect()->route('foods.index') ->with('success','Food created successfully.');
    }

    public function show(Foods $food)
    {
        return view('foods.show', compact('food'));
    }

    public function edit(Foods $food)
    {
        return view('foods.edit', compact('food'));
    }

    public function update(Request $request, Foods $food)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $food->update($request->all());

        $user = auth()->user()->name;
        $log_entry = $user . " updated a food \"" . $food->name . "\" with the ID " . $food->id;
        event(new UserLog($log_entry));

        return redirect()->route('foods.index')->with('success','Food updated successfully');
    }

    public function destroy(Foods $food)
    {
        $food->delete();
        $user = auth()->user()->name;
        $log_entry = $user . " deleted a food \"" . $food->name . "\" with the ID " . $food->id;
        event(new UserLog($log_entry));

        return redirect()->route('foods.index')->with('error','Food deleted successfully');
    }
}
