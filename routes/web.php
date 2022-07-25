<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/createProduct', [App\Http\Controllers\ProductController::class, 'index'])->name('createProduct');
Route::get('/createCategory', [App\Http\Controllers\CategoryController::class, 'index'])->name('createCategory');
Route::get('/createSeller', [App\Http\Controllers\SellerController::class, 'index'])->name('createSeller');

//product
Route::post('/store-product',[ProductController::class,'storeProduct'])
->name('products.store');

//category
Route::post('/store-category',[CategoryController::class,'storeCategory'])
->name('categories.store');

//seller
Route::post('/store-seller',[SellerController::class,'storeSeller'])
->name('sellers.store');