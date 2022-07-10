<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::prefix('admin')->group(function () {
    Route::get('', function () {
        return redirect(route('admin.home'));
    });
    Route::get('home', [AdminController::class, 'Index'])->name('admin.home');
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('product', [AdminController::class, 'Product']);
    Route::post('product/{id}', [AdminController::class, 'ProductSave']);
    Route::get('product/{id}', [AdminController::class, 'ProductDetail']);
    Route::get('product-detail', [AdminController::class, 'ProductDetails']);
    Route::get('category', [AdminController::class, 'Category']);
    Route::get('invoice', [AdminController::class, 'Invoices']);
    Route::get('invoice/create', [AdminController::class, 'InvoiceCreate']);
});


Route::get('', [HomeController::class, 'Index']);
Route::get('/checkout', [CheckoutController::class, 'Index']);
Route::get('/products', [HomeController::class, 'Shop']);
Route::get('/products/{id}', [HomeController::class, 'DetailProduct']);
Route::get('/cart', [HomeController::class, 'Cart']);
Route::get('/checkout', [HomeController::class, 'Checkout']);
Route::get('/contact', [HomeController::class, 'Contact']);
Route::get('/track-order', [HomeController::class, 'Invoice']);