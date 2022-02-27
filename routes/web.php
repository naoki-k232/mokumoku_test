<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//   return view('event.index');
// });

// もくもく会一覧画面
Route::get('/', [EventController::class, 'index'])->name('event.index');

// もくもく会登録画面
Route::get('/event/register', [EventController::class, 'register'])->name('event.register');

// もくもく会登録処理
Route::post('/event/create', [EventController::class, 'create'])->name('event.create');

// もくもく会詳細画面
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');

// もくもく会編集画面
Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');

// もくもく会更新処理
Route::post('/event/update', [EventController::class, 'update'])->name('event.update');

// カテゴリー一覧画面
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
