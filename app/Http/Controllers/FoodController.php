<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FoodController extends Controller
{
    // Menampilkan daftar makanan
    public function index()
    {
        $foods = Food::all();
    return response()->json($foods);
    }

    // Menyimpan makanan baru
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
            'image' => 'required|image|max:2048', // Validation for image file
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public'); // Store image in 'public/mitra_logos'
            $validated['image'] = $path;
        }

        Food::create($validated);

        return Redirect::route('foods.index');
    }


    // Menghapus makanan
    public function destroy(Food $food)
    {
        $food->delete();
        return response()->json(null, 204);
    }
}
