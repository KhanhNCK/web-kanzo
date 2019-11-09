<?php

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

// ỉntro
Route::get('/intro', function () {
    return view('pages.intro');
})->name('intro');

//product
Route::get('/product', function () {
    return view('pages.product');
})->name('product');
Route::get('/product_detail', function () {
    return view('pages.product_detail');
})->name('product_detail');

//new
Route::get('/new', function () {
    return view('pages.new');
})->name('new');
Route::get('/new_detail', function () {
    return view('pages.new_detail');
})->name('new_detail');

//policy
Route::get('/policy', function () {
    return view('pages.policy');
})->name('policy');
Route::get('/policy_detail', function () {
    return view('pages.policy_detail');
})->name('policy_detail');

//contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

