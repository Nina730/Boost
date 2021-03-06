<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\AdminController::class, 'store'])->name('store');
Route::get('/show/{id}',  [App\Http\Controllers\AdminController::class, 'show'])->name('show');
Route::post('/getdate',  [App\Http\Controllers\AdminController::class, 'getDate']);
Route::delete('/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('destroy');