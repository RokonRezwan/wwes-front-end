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

Route::get('/', function () {
    $products = Http::get('http://127.0.0.1:8000/api/products')->json();
    return view('welcome', ['products'=>$products['product']]);
})->name('welcome');


Auth::routes();

Route::get('/home', function(){
    return view('admin');
})->name('dashboard');

Route::get('details/{id}', function($id){
    $product = Http::get('http://127.0.0.1:8000/api/products/'.$id)->json();
    return view('products.details', ['product'=>$product['product']]);
})->name('products.details');