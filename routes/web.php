<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductDatatablesController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('products.list');
});
Route::get('/products/table', [ProductDatatablesController::class, 'index'])
    ->name('products.index');

Route::get('/products/{productId}', function ($productId) {
    return view('products.item');
});
