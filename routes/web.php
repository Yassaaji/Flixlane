<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//     ]);
// });
// Landing Page
Route::get('/', [App\Http\Controllers\HomeController::class, 'landing'])->name('landing');

// Grup Middleware 'auth' untuk rute yang memerlukan otentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
    Route::get('/season', [App\Http\Controllers\HomeController::class, 'season'])->name('season');
    Route::get('/single', [App\Http\Controllers\HomeController::class, 'single'])->name('single');
    Route::get('/favorite', [App\Http\Controllers\HomeController::class, 'favorite'])->name('favorite');
    Route::get('/video', [App\Http\Controllers\HomeController::class, 'video'])->name('video');
    // Route::resource('home' ,\App\Http\Controllers\HomeController::class);
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>'admin'],function(){

});

// Auth::routes();

//login
Route::get('/sesi', [SessionController::class, 'index'])->name('sesi-index');
Route::post('login', [SessionController::class, 'login'])->name('sesi-login');

//register
Route::get('/sesi-register', [SessionController::class, 'register'])->name('sesi-register');
Route::post('/create', [SessionController::class, 'create'])->name('submit.register');

//logout
Route::get('/sesi/logout', [SessionController::class,'logout']);


// Auth::routes();

// Route::group(['middleware'=>['auth']], function(){
//     Route::get('/home', [HomeController::class, 'home'])->name('home');
// });
