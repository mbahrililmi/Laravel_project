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
Route::post('/auth', [AuthController::class, 'autentification']);
Route::get('/auth/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/auth/store', [AuthController::class, 'store']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/category', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/category/show/{category}', [CategoryController::class, 'show'])->middleware('auth');
Route::get('/category/create', [CategoryController::class, 'create'])->middleware('auth');
Route::post('/category/store', [CategoryController::class, 'store'])->middleware('auth');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->middleware('auth');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->middleware('auth');
Route::delete('/category/delete/{category}', [CategoryController::class, 'delete'])->middleware('auth');

Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::get('/book/create', [BookController::class, 'create'])->middleware('auth');
Route::post('/book/store', [BookController::class, 'store'])->middleware('auth');
Route::get('/book/edit/{book}', [BookController::class, 'edit'])->middleware('auth');
Route::put('/book/update/{book}', [BookController::class, 'update'])->middleware('auth');

Route::delete('/book/delete/{book}', [BookController::class, 'delete'])->middleware('auth');
