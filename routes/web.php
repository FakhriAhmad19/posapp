<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduksController;


Route::get('/', [ProduksController::class, 'index']);

Route::get('/shop', [ProduksController::class, 'shop']);

Route::get('/shop-detail{id}', [ProduksController::class, 'detail']);


Route::get('/shop-detail', function () {
    return view('shop-detail');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/properties', function () {
    return view('properties');
});

Route::get('/property-single', function () {
    return view('property-single');
});


Route::get('/pembuka-halaman/{name}', function ($name) {
    return "hello " . $name;
})->name('greeting');

Route::put('/user', 'UserController@updateUser');

route::view('/welcome2', 'welcome2');

Route::get ('/admin/(name)', function ($name) {
    return "ini halaman admin page".$name;
});

Route::get('/base',function () {
    return view('layout.base');
});

Route::get('/page/home',function () {
    return view('page.home');
});
Route::get('/page/about',function () {
    return view('page.about');
});

