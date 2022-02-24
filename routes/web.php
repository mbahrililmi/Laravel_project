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

Route::get('/', [AuthController::class, 'index'])->name('index');
Route::get('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/store', [AuthController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/book', [BookController::class, 'index']);


