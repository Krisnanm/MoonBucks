<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Coffee']);
        Category::create(['name' => 'Non Coffee']);
        Category::create(['name' => 'Snacks']);
        Category::create(['name' => 'Main Course']);
    }
}