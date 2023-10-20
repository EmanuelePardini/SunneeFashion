<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
//index,show,store,update,destroy,totalrecycledplastic

    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return view('products.show', ['product' => $product]);
    }

    public function create()
{
    return view('products.create');
}

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'recycled_plastic_kg' => 'required|numeric',
        ]);
    
        $product = Product::create($validatedData);
    
        return redirect()->route('products.index');
    }

    public function edit($id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json(['message' => 'Prodotto non trovato'], 404);
    }

    return view('products.edit', ['product' => $product]);
}

    
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
    
        $validatedData = $request->validate([
            'name' => 'required',
            'recycled_plastic_kg' => 'required|numeric',
        ]);
    
        $product->update($validatedData);
    
        return redirect()->route('products.index');
    }
    
    public function destroy($id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();
    
        return redirect()->route('products.index');
    
    }
    
    public function totalRecycledPlastic()
    {
        // Get all products and their individual recycling values
        $products = Product::all();
    
        // Initialize the variable for total recycled plastic
        $totalRecycledPlastic = 0;
    
        // For each product, calculate the total recycled plastic
        foreach ($products as $product) {
            // Get all order products that contain this product
            $orderProducts = $product->orderProducts;
        
            // Calculate the total recycled plastic for this product
            $productRecycledPlastic = $product->recycled_plastic_kg * $orderProducts->sum('quantity');
        
            // Add the amount of recycled plastic for this product to the total
            $totalRecycledPlastic += $productRecycledPlastic;
        }
        
        return view('products.totalRecycledPlastic', ['totalRecycledPlastic' => $totalRecycledPlastic]);
    }
    
    
    

}
