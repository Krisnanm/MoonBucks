<?php

// File: app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category; // Import model Category
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function showByCategory(Request $request, $categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $products = $category->products();

        // Proses pencarian jika ada input 'search' dari form
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $products->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%');
            });
        }

        $products = $products->get();

        return view('show', compact('category', 'products', 'categorySlug'));
    }

    
}
