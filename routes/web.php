<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});

// Nomor 1
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Nomor 2
Route::prefix('/category')->group(function () {
    Route::get('/p1', [ProductController::class, 'p1']);
    Route::get('/p2', [ProductController::class, 'p2']);
});

// Nomor 3
Route::get('/news/{news?}', [NewsController::class,'news']);

// Nomor 4
Route::prefix('/program')->group(function () {
    Route::get('/pr1', [ProgramController::class, 'pr1']);
    Route::get('/pr2', [ProgramController::class, 'pr2']);
});

// Nomor 5
Route::get('/about-us', function(){
    return view("about");
});

// Nomor 6
Route::resource('/contact-us', ContactController::class);