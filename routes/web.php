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
Route::get('/', 'App\Http\Controllers\DashboardController@index');


