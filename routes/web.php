<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReverseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


//home "/"
Route::get('/', [HomeController::class, 'index'])->name('home');


//buat map
Route::get('/reverse', [ReverseController::class, 'reverse'])->name('reverse');

//buat halaman login 
Route::get('/login', [AdminController::class, 'login'])->name('login');
