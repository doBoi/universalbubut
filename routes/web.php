<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.pages.home');
})->name('home');

Route::get('/project', function () {
    return view('components.pages.project');
})->name('project');

Route::get('/contact', function () {
    return view('components.pages.contact');
})->name('contact');
