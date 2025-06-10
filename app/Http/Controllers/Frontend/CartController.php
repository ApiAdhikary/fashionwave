<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
class CartController extends  Controller
{
   public function index()  
   {
    return view('front.cart.index');
   }

   public function addToCart(Request $request)
   {
       $productId = $request->input('product_id');
       $quantity = $request->input('quantity', 1);

       $product = Product::find($productId);

       if (!$product) {
           return response()->json(['status' => 'error', 'message' => 'Product not found.']);
       }

       $cart = session()->get('cart', []);

       if (isset($cart[$productId])) {
           $cart[$productId]['quantity'] += $quantity;
       } else {
           $cart[$productId] = [
               'id' => $product->id,
               'name' => $product->name,
               'regularPrice' => $product->price,
               'discountedPrice' => $product->discounted_price,
               'image' => $product->thumb,
               'quantity' => $quantity

              
           ];
       }

       session()->put('cart', $cart);

       // Calculate cart totals
       $totalItems = 0;
       $totalAmount = 0;

       foreach ($cart as $item) {
           $totalItems += $item['quantity'];
           $totalAmount += $item['discounted_price'] * $item['quantity'];
       }

       return response()->json([
           'status' => 'success',
           'message' => $product->name . ' added to cart.',
           'totalItems' => $totalItems,
           'totalAmount' => number_format($totalAmount, 2)
       ]);
   }
   
}

