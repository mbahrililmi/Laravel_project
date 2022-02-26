<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/auth', [AuthController::class, 'autentification'])->name('autentification');
Route::get('/auth/register', [AuthController::class, 'register'])->middleware('guest')->name('register');
Route::post('/auth/store', [AuthController::class, 'store'])->middleware('guest')->name('store');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'role:1'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');

        Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
        Route::get('/category/show/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/category/delete/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');

        Route::get('/book', [BookController::class, 'index'])->name('admin.book');
        Route::get('/book/create', [BookController::class, 'create'])->name('admin.book.create');
        Route::post('/book/store', [BookController::class, 'store'])->name('admin.book.store');
        Route::get('/book/edit/{book}', [BookController::class, 'edit'])->name('admin.book.edit');
        Route::put('/book/update/{book}', [BookController::class, 'update'])->name('admin.book.update');
        Route::delete('/book/delete/{book}', [BookController::class, 'delete'])->name('admin.book.delete');
    });
});

Route::group(['middleware' => 'role:0'], function () {
    Route::prefix('member')->group(function () {
        Route::get('/category', [CategoryController::class, 'index'])->name('member.category');
        Route::get('/category/show/{category}', [CategoryController::class, 'show'])->name('member.category.show');
        Route::get('/book', [BookController::class, 'index'])->name('member.book');
    });
});
