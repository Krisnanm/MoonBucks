<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ice Americano',
            'description' => 'Deskripsi produk...',
            'image' => 'coffee1.png',
            'price' => 1700,
            'category_id' => 1,
        ]);


    }
}
