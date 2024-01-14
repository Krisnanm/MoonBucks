<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function show($product_id)
    {
        $product = Product::find($product_id);
        if (!$product) {
            abort(404); // Ubah sesuai dengan logika atau tindakan yang Anda inginkan jika produk tidak ditemukan
        }


        $categories = Category::all();
        $categorySlug = null; // Tidak ada kategori yang aktif

        return view('cart', compact('product', 'categorySlug', 'categories'));
    }
}
