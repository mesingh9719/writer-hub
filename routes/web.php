<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Pages\Dashboard\Dashboard;
use App\Livewire\Pages\Posts\Create;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::middleware('auth')->group(function(){
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
Route::get('/profile',function(){})->name('profile');
Route::get('/posts/create',Create::class)->name('posts.create');
Route::get('/settings',function(){})->name('settings');
Route::get('/logout',function(){})->name('logout');
});


Route::get('/about',function(){

})->name('about');

Route::get('/contact',function(){

})->name('contact');

Route::get('/register',Register::class)->name('register');

Route::get('/login',Login::class)->name('login');
Route::get('/password-request',Login::class)->name('password.request');


Route::get('/home',function(){

})->name('home');

Route::get('/posts',function(){

})->name('posts.index');

Route::get('/posts/{id}',function(){

})->name('posts.show');



Route::get('/posts/trending',function(){

})->name('posts.trending');


Route::get('/posts/featured',function(){

})->name('posts.featured');


Route::get('/categories',function(){

})->name('categories.index');

Route::get('/categories/{id}',function(){

})->name('categories.show');

Route::get('/tags',function(){

})->name('tags.index');

Route::get('/tags/{id}',function(){

})->name('tags.show');

Route::get('/careers',function(){

})->name('careers');

Route::get('/privacy',function(){

})->name('privacy');

Route::get('/terms',function(){

})->name('terms');

Route::get('/cookies',function(){

})->name('cookies');


Route::get('/sitemap',function(){

})->name('sitemap');

