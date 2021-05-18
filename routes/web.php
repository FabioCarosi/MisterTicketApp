<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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


Route::view('/profile', 'profile.user_profile')
        ->name('profile');



Route::view('/user', 'profile.user.user')
        ->name('user');
        
Route::view('/user/history', 'profile.user.history')
        ->name('user_history');

Route::view('/user/modify', 'profile.user.modify')
        ->name('user_modify');




Route::view('/promoter', 'profile.promoter.promoter')
        ->name('promoter');
        
Route::view('/promoter/create_events', 'profile.promoter.create_events')
        ->name('create_events');

Route::view('/promoter/manage_events', 'profile.promoter.manage_events')
        ->name('manage_events');

Route::view('/promoter/show_events', 'profile.promoter.show_events')
        ->name('show_events');



Route::view('/admin', 'profile.admin.admin')
        ->name('admin');
        
Route::view('/admin/delete_users', 'profile.admin.delete_users')
        ->name('delete_users');

Route::view('/admin/manage_promoters', 'profile.admin.manage_promoters')
        ->name('manage_promoters');

Route::view('/admin/show_promoters', 'profile.admin.show_promoters')
        ->name('show_promoters');

Route::view('/admin/manage_faq', 'profile.admin.manage_faq')
        ->name('manage_faq');


Route::get('/event', [Controllers\PublicController::class, 'showEvent'])
        ->name('event');