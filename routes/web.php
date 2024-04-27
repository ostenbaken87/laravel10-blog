<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/articles',[ArticleController::class,'index'])->name('articles');
Route::get('/articles/{id}',[ArticleController::class,'show'])->name('article');
Route::get('/tag/{id}',[TagController::class,'show'])->name('tags');
