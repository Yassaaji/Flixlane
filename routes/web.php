<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//     ]);
// });
// Landing Page
Route::get('/', [App\Http\Controllers\HomeController::class, 'landing'])->name('landing');
Route::post('/logout',[SessionController::class, 'logout'])->name('logout');

// Grup Middleware 'auth' untuk rute yang memerlukan otentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
    Route::get('/season', [App\Http\Controllers\HomeController::class, 'season'])->name('season');
    Route::get('/single', [App\Http\Controllers\HomeController::class, 'single'])->name('single');
    Route::get('/favorite', [App\Http\Controllers\HomeController::class, 'favorite'])->name('favorite');
    Route::get('/detail', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
    Route::get('/video/{id}', [App\Http\Controllers\FilmController::class, 'index'])->name('video');

    Route::put('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.edit');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);

});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/tambahfilm',[FilmController::class,'create'])->name('tambahfilm');
    Route::get('/daftarfilm',[FilmController::class, 'daftarFilm'])->name('daftarfilm');
    Route::post('/tambahfilm',[FilmController::class,'store'])->name('createfilm');
    Route::get('/edit-film/{id}',[FilmController::class,'edit'])->name('edit-film');
    Route::resource('film', FilmController::class);
    Route::put('/proseseditfilm/{id}', [FilmController::class, 'update']);


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
