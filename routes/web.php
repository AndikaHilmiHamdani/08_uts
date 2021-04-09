<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/gallery', function () {
    return view('galery');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about-us');
});
Route::resource('users',UserController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('user');
// Route::get('/users/detail{id}', [App\Http\Controllers\UserController::class, 'show'])->name('detail');
// Route::put('/users/edit{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
// Route::put('/users/update{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update');
// Route::delete('/delete{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user');