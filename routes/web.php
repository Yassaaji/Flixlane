<?php


use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//     ]);
// });
// Landing Page
Route::get('/', [App\Http\Controllers\HomeController::class, 'landing'])->name('landing');
Route::post('/logout',[SessionController::class, 'logout'])->name('logout');

// Grup Middleware 'auth' untuk rute yang memerlukan otentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
    Route::get('/Anime/{id}', [App\Http\Controllers\HomeController::class, 'Anime'])->name('Anime');
    Route::get('/single', [App\Http\Controllers\HomeController::class, 'single'])->name('single');
    Route::get('/detail', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
    Route::get('/video/{id}', [App\Http\Controllers\FilmController::class, 'index'])->name('video');
    Route::post('/komentar/create', [KomentarController::class, 'create'])->name('komentar.create');
    Route::get('/komentar/{id}', [KomentarController::class, 'index'])->name('komentar.index');
    Route::delete('/komentar/delete/{komentar}', [KomentarController::class, 'destroy'])->name('komentar.delete');

    Route::get('/add-to-bookmarks/{id}', [BookmarkController::class, 'create']);
    Route::get('bookmark', [BookmarkController::class, 'index']);

    Route::put('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'apa'])->name('profile.edit');
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


// //verify
// Route::get('/sesi-login', function(){
//     return'ini halaman login';
// });
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/sesi');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::get('verify-email',function(){
//     return 'test';

// })->middleware(['auth','verified']);

// Auth::routes();

// Route::group(['middleware'=>['auth']], function(){
//     Route::get('/home', [HomeController::class, 'home'])->name('home');
// });
