<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});
Route::get('/about', function () {
    return view('website.about');
});
Route::get('/category', function () {
    return view('website.category');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/post', function () {
    return view('website.post');
});


// // admin pannel//
Route::get('/', function () {
    return view('layout.admin');
});
