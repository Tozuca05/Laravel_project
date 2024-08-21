<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...Yes, this is ";
    $author = "Developed by: Tomas Zuleta ";
    return view('home.about')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("description", $description)
      ->with("author", $author);
})->name("home.about");
Route::get('/contact', function(){
    $data1 = "Contact us - Online Store";
    $data2 = "Contact us";
    $mail="Elzule@nose.com";
    $phone="1236859490";
    return view('home.contact')->with("title", $data1)
    ->with("subtitle", $data2)
    ->with("mail", $mail)
    ->with("phone", $phone);
})->name("home.contact");
Route::get('/products', [ProductController::class, 'index'])->name("product.index");
Route::get('/products/create', [ProductController::class, 'create'])->name("product.create");
Route::post('/products/save', [ProductController::class, 'save'])->name("product.save");
Route::get('/products/{id}', [ProductController::class, 'show'])->name("product.show");
Route::get('/product/message', function () {
    return view('product.message')->with('message', session('success'));
})->name('product.message');

