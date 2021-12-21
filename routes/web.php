<?php

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
Route::get('/hello',function(){
    return ('hello');
});
Auth::routes();
Route::get('/',[App\Http\Controllers\startup::class, 'welcome'])->name('welcome');
Route::get('/home/', [App\Http\Controllers\HomeController::class, 'index'])->name('profile.index');
Route::get('/books/create',   [App\Http\Controllers\BooksController::class,'create'])->name('books.create');
Route::post('/books',[App\Http\Controllers\BooksController::class,'store']);
Route::get('/profile/create',   [App\Http\Controllers\ProfileController::class,'create'])->name('profile.create');
Route::post('/profile',[App\Http\Controllers\ProfileController::class,'store']);