<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductSearchRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductSearchRequest $request)
    {
        $query = Product::query();

        if ($request->filled('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        $products = $query->get();

        return view('_admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product;
        return view('_admin.products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $fields = $request->validated();

        $product = new Product;
        $product->fill($fields);
        $product->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('products', $imageName, 'public');
            $product->image = $imageName;
            $product->save();
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Produto criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('_admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('_admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $fields = $request->validated();

        $product->fill($fields);
        $product->save();

        return redirect()->route('admin.products.index')
            ->with('success', 'Produto alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Produto eliminado com sucesso');
    }
}