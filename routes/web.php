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
Use App\Http\Controllers\ContactusController;

Route::get('/', function () {
    return view('home');
});

//Route prefix
Route::prefix('product')->group(function () {
    Route::get('product', function () {
        return view ('product');
    });
});

//Route param
Route::get('news/{id}', function ($id) {
    return view('news',compact('id'));
});

//Route prefix
Route::prefix('program')->group(function () {
    Route::get('program', function () {
        return view('program');
    });
});

// Route biasa
Route::get('about-us', function () {
    return view('about-us');
});

// Route resource
Route::resource('contact-us', ContactusController::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
