<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Relasi (Eager Loading)
        if ($request->query('include') === 'category') {
            $query->with('category');
        }

        // Search
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Pagination
        $products = $query->paginate(10);

        return response()->json(['success' => true, 'data' => $products]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'stock' => 'integer|min:0',
            'internal_note' => 'nullable|string'
        ]);

        $product = Product::create($validated);
        // Eager load category for response
        $product->load('category');

        return response()->json(['success' => true, 'message' => 'Product created', 'data' => $product], 201);
    }

    public function show(Request $request, string $id)
    {
        $query = Product::query();
        if ($request->query('include') === 'category') {
            $query->with('category');
        }
        
        $product = $query->findOrFail($id);

        return response()->json(['success' => true, 'data' => $product]);
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'category_id' => 'sometimes|exists:categories,id',
            'name' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|integer|min:0',
            'stock' => 'sometimes|integer|min:0',
            'internal_note' => 'nullable|string'
        ]);

        $product->update($validated);

        return response()->json(['success' => true, 'message' => 'Product updated', 'data' => $product]);
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['success' => true, 'message' => 'Product deleted']);
    }
}