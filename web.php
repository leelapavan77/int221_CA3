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

Route::get('/h', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/forgot', function () {
    return view('forgot');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/sign-out', function () {
    return view('sign-up');
});