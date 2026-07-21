<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;

class CartController extends Controller
{
    public function addOne(Product $product)
    {
        $cart = Cart::ensureExists();

        $cart->incrementItem($product);

        return back();
    }

    public function removeOne(Product $product)
    {
        Cart::ifExists()?->decrementItem($product);

        return back();
    }

    public function removeAll(CartItem $cartItem) {
        $cartItem->delete();

        return back();
    }

    public function emptyCart()
    {
        Cart::ifExists()?->items()->delete();

        return back();
    }
}
