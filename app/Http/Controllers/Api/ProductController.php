<?php

namespace CodeShopping\Http\Controllers\Api;

use CodeShopping\Http\Controllers\Controller;
use CodeShopping\Http\Requests\ProductRequest;
use CodeShopping\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return Product::all();
    }

    public function store(ProductRequest $request)
    {
        $product = Product::created($request->all());

        return $product;
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->fill($request->all());
        $product->save();

        return $product;

//        return response([],204);
    }

    public function destroy(Product $product)
    {
        $category->delete();

        return response([],204);
    }
}
