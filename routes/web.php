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
    return view('welcome');
});


Route::get('/test', function () {
    return view('index');
});

Route::view('/catalog', 'catalog')
        ->name('catalog');


Route::view('/login', 'login')
        ->name('login');

Route::view('/logout', 'logout')
        ->name('logout');

Route::view('/', 'layouts.public')
        ->name('public');         

Route::view('/register', 'register')
        ->name('register');

Route::view('/event', 'event')
        ->name('event');

Route::view('/faq', 'faq')
        ->name('faq');

Route::view('/index', 'index')
        ->name('index');

Route::view('/welcome', 'welcome')
        ->name('welcome');

Route::view('/checkout', 'checkout')
        ->name('checkout');

Route::view('/contact', 'contact')
        ->name('contact');

Route::view('/create_event', 'event.create_event')
        ->name('create_event');

Route::view('/contact', 'contact')
        ->name('contact');




