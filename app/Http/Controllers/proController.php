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
        $path = $file->storeAs('public/images', $filename);
        $product->image = $path;
    }

    $product->save();

    return back()->with('success', 'Product ajouté avec succès');
}
public function showProducts()
{
    $products = Product::all(); 
    return view('product', compact('products')); 
}
public function remove($id)
{
    $product = Product::find($id);
    if ($product->image) {
        Storage::delete($product->image);
    }
    
    $product->delete();
    return redirect()->route('products')->with('status', "Product Deleted Successfully");
}
public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('edit', compact('product'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;

    if ($request->hasFile('image')) {
        // Supprimer l'ancienne image si elle existe
        if ($product->image) {
            Storage::delete($product->image);
        }
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/images', $filename);
        $product->image = $path;
    }

    $product->save();
    return redirect()->route('products')->with('success', 'Product updated successfully');
}


}
