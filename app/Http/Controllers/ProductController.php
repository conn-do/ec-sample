<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();

        return view('top-page', [
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', [
            'product' => $product,
        ]);
    }
}
