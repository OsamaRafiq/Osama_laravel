<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('product', function () {
    return view('product');
});

Route::get('/create',[StudentController::class,'create'])->name('create');
Route::post('/store',[StudentController::class,'store'])->name('store');
Route::get('/show',[StudentController::class,'show'])->name('show');
