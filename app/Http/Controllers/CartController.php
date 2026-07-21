<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function addOne(Product $product) {
        $cart = Cart::ensureExists();

        $cart->incrementItem($product);

        return back();
    }
}
