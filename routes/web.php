<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


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


Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});
Route::get('/drink', function () {
    return view('drink', [
        'title' => 'Drink',
        'drinks' => Product::where('category', 'minuman')->get(),
    ]);
});
Route::get('/snack', function () {
    return view('snack', [
        'title' => 'Snack',
        'snacks' => Product::where('category', 'snack')->get(),
    ]);
});
Route::get('/shop', function () {
    return view('shop', [
        'title' => 'Shop',
        'others' => Product::where('category', 'other')->get(),
    ]);
});



// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::get('/login', [Authcontroller::class, 'login'])->name('login');

// Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
// Route::post('/login', [AuthController::class, 'loginPost'])->name('login');


// ADD TO CHART
Route::get('/shopping-cart', [ChartController::class, 'index'])->name('shopping.cart');
Route::get('/drink/{id}', [ChartController::class, 'addproduct'])->name('addproduct');
Route::get('/snack/{id}', [ChartController::class, 'addproductsnack'])->name('addproductsnack');
Route::get('/other/{id}', [ChartController::class, 'addproductother'])->name('addproductother');
Route::delete('/delete-cart-product', [ChartController::class, 'deleteproduct'])->name('delete.cart.product');
// Route::resource('/shopping-cart', ChartController::class, 'jumlahPrice');
