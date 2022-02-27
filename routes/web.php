<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//   return view('event.index');
// });

// もくもく会一覧画面
Route::get('/', [EventController::class, 'index'])->name('event.index');

// カテゴリー一覧画面
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');

// もくもく会登録画面
Route::get('/event/register', [EventController::class, 'register'])->name('event.register');
