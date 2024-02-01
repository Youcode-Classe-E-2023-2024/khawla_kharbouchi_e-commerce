<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\product;
use Illuminate\Http\Request;

class proController extends Controller
{

    public function product()
    {
        return view('product');
    }

    public function productPost(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $filename);

    }
    $product->save();
    return back()->with('success', 'Product ajouté avec succès');
}

}
