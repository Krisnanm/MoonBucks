<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Display products for a specific category
Route::get('/category/{slug}', [CategoryController::class, 'showByCategory'])
    ->name('category.show');

Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');


Route::get('/', function () {
    return view('welcome');
});
