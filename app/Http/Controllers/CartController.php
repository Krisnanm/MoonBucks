<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function addToCart($product_id)
    {
        try {
            $product = Product::findOrFail($product_id);

            $cart = session()->get('cart', []);

            // Jika produk sudah ada di dalam keranjang, tambahkan jumlahnya
            if (isset($cart[$product_id])) {
                $cart[$product_id]['quantity']++;
            } else {
                // Jika belum ada, tambahkan produk baru ke dalam keranjang
                $cart[$product_id] = [
                    "name" => $product->name,
                    "description" => $product->description,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                ];
            }

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product has been added to the cart.');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi, dan kirim pesan ke view
            return redirect()->back()->with('error', 'Failed to add product to the cart.');
        }
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}
