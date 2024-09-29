<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->input(('product-id'));
        $quantity = $request->input('quantity');

        $request->session()->put("cart.{$productId}", $quantity);

        return redirect()->route('cart.index');
    }

    public function index(Request $request)
    {
        $cartItems = [];

        $sessions = $request->session()->get('cart');

        foreach ($sessions as $id => $quantity) {
            $product = Product::find($id);

            $cartItems[] = [
                'product' => $product,
                'quantity' => $quantity,
            ];
        }

        return view('cart', [
            'cartItems' => $cartItems,
        ]);
    }
}
