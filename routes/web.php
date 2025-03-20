<?php

use Illuminate\Support\Facades\Route;

// Trang Chủ: resources/views/layout/app.blade.php
Route::get('/', function () {
    return view('layout.app');
})->name('home');

// Trang Menu: resources/views/layout/menu.blade.php
Route::get('/menu', function () {
    return view('layout.menu');
})->name('menu');

// Trang Ăn Trưa: resources/views/layout/lunch.blade.php
Route::get('/bua-an/an-trua', function () {
    return view('layout.lunch');
})->name('lunch');

// Trang Đặt Món: resources/views/layout/order.blade.php
Route::get('/dat-mon', function () {
    return view('layout.order');
})->name('order');

// Trang Giới Thiệu: resources/views/layout/about.blade.php
Route::get('/gioi-thieu', function () {
    return view('layout.about');
})->name('about');

// Trang Liên Hệ: resources/views/layout/contact.blade.php
Route::get('/lien-he', function () {
    return view('layout.contact');
})->name('contact');
