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
    return view('website/offers');
});
Route::get('/news', function () {
    return view('website/news');
});
Route::get('/contact', function () {
    return view('website/contact');
});
Route::get('/menu', function () {
    return view('website/MENUKAART');
});
Route::get('/order', function () {
    return view('website/offers');
});
Route::get('/kassa', function () {
    return view('cashdesk/index');
});
