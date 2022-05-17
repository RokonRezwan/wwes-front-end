<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $products = Http::get('http://127.0.0.1:8000/api/products')->json();
    return view('welcome', ['products'=>$products['product']]);
})->name('welcome');

Route::get('details/{id}', function($id){
    $product = Http::get('http://127.0.0.1:8000/api/products/'.$id)->json();
    return view('details', ['product'=>$product['product']]);
})->name('details');

Auth::routes();

Route::get('/home', function(){
    return view('admin-panel.admin-dashboard');
})->name('dashboard');

/* Products */
Route::get('/products/index', function(){
    $products = Http::get('http://127.0.0.1:8000/api/products/')->json();
    return view('admin-panel.products.index', ['products'=>$products['product']]);
})->name('products.index');

Route::get('/products/create', function(){
    $categories = Http::get('http://127.0.0.1:8000/api/categories/')->json();
    return view('admin-panel.products.create', ['categories'=>$categories['categories']]);
})->name('products.create');

Route::get('/products/edit/{id}', function($id){
    $categories = Http::get('http://127.0.0.1:8000/api/categories/')->json();
    $product = Http::get('http://127.0.0.1:8000/api/products/'.$id)->json();
    return view('admin-panel.products.edit', ['categories'=>$categories['categories'], 'product'=>$product['product']]);

})->name('products.edit');
