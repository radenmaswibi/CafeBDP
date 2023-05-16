<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangController;
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
    return view('welcome');
});

//route memanggil 
Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang.io');


Route::get('/keranjang2', [KeranjangController::class, 'index']);
Route::get('cart', [KeranjangController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [KeranjangController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [KeranjangController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [KeranjangController::class, 'remove'])->name('remove_from_cart');




