<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

Route::post('/cart/add/{id}', function ($id) {
    $product = App\Models\Product::findOrFail($id);
    $cart = Session::get('cart', []);
    $cart[$id] = ($cart[$id] ?? 0) + 1;
    Session::put('cart', $cart);
    return redirect()->back()->with('success', 'Product added to cart!');
});

Route::get('/cart', function () {
    $cart = Session::get('cart', []);
    $products = App\Models\Product::findMany(array_keys($cart));
    return view('cart', compact('products', 'cart'));
});

Route::get('/', function () {
    $products = Product::with('category')->latest()->get();
    return view('welcome', compact('products'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
