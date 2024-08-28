<?php

use Illuminate\Support\Facades\Route;

// Rutas para HomeController
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name("home.contact");

// Rutas para ProductController
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/product/message', 'App\Http\Controllers\ProductController@showMessage')->name('product.message');

