<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Fronts routes
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/articles',[ArticleController::class,'index'])->name('articles');
Route::get('/articles/{id}',[ArticleController::class,'show'])->name('article');
Route::get('/tag/{id}',[TagController::class,'show'])->name('tags');

//User routes
Route::get('/register',[UserController::class,'create'])->name('register');
Route::post('/register',[UserController::class,'store'])->name('register.store');
Route::get('/login',[UserController::class,'show'])->name('loginForm');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
