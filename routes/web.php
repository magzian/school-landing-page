<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/event', function () {
    return view('event');
})->name('event');

Route::get('/event-detail', function () {
    return view('event-detail');
})->name('event-detail');

Route::get('/teacher', function () {
    return view('teacher');
})->name('teacher');

Route::get('/blog-list', function () {
    return view('listblog');
})->name('listblog');

Route::get('/blog-detail', function () {
    return view('index');
})->name('blog-detail');
