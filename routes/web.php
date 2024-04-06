<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products' , [ProductController::class , 'getAllProducts']);

Route::post('product' , [ProductController::class , 'addProduct'])->name('product.add');


Route::delete('/product/{id}', [ProductController::class  , 'deleteProduct'])->name('product.delete');
