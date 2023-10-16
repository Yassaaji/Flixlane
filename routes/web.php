<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//     ]);
// });
// Route::middleware(['auth.custom'])->group(function () {
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// // Route::resource('home' ,\App\Http\Controllers\HomeController::class);
// });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

//login
Route::get('/sesi', [SessionController::class, 'index'])->name('sesi-index');
Route::post('/sesi/login', [SessionController::class, 'login'])->name('sesi-login');

//register
Route::get('/sesi-register', [SessionController::class, 'register'])->name('sesi-register');
Route::post('/create', [SessionController::class, 'create'])->name('sesi-register2');

//logout
Route::get('/sesi/logout', [SessionController::class,'logout']);


// Auth::routes();

// Route::group(['middleware'=>['auth']], function(){
//     Route::get('/home', [HomeController::class, 'home'])->name('home');
// });
