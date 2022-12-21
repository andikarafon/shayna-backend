<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// jika menggunakan Laravel 8 atau 9. maka penulisan route nya ada perubahan
Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');


// penambahan register false adalah supaya halaman register tidak bisa diakses, karena admin hanya kita saja, tidak ada yang lain.
Auth::routes(['register' => false]);

Route::get('products/{id}/gallery', 'App\Http\Controllers\ProductController@gallery')
    ->name('products.gallery');
Route::resource('products', 'App\Http\Controllers\ProductController');

Route::resource('product-galleries', 'App\Http\Controllers\ProductGalleryController');


Route::get('transactions/{id}/set-status', 'App\Http\Controllers\TransactionController@setStatus')
    ->name('transactions.status');
Route::resource('transactions', 'App\Http\Controllers\TransactionController');

