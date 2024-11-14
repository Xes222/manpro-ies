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
        \Log::info('Request Data:', $request->all());
    
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|max:2048', 
        ]);
    
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        }
    
        $food = Food::create($validated);
        \Log::info('Food Created:', $food->toArray());
    
        return Redirect::route('foods.index');
    }
    

    // Mengedit makanan yang ada
    public function update(Request $request, Food $food)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048', // Image is optional during update
        ]);

        // Perbarui gambar jika ada file baru yang diunggah
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        }

        $food->update($validated);

        return response()->json($food, 200); // Mengembalikan data yang diperbarui
    }

    // Menghapus makanan
    public function destroy(Food $food)
    {
        $food->delete();
        return response()->json(null, 204);
    }
}
