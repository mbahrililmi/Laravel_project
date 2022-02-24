<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryControler;
use App\Http\Controllers\DashboardControler;
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

Route::get('/', [DashboardControler::class, 'index' ]);
Route::get('/category', [CategoryControler::class, 'index']);
Route::get('/book', [BookController::class, 'index']);
