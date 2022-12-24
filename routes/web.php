<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// movies
Route::redirect('/', '/movies');
Route::get('/movies', [MovieController::class, 'index'])->name('home');
Route::resource('/movies', MovieController::class)->except(['index', 'show'])->middleware('admin');
Route::get('/movies/{movie:id}', [MovieController::class, 'show']);


// actors
Route::get('/actors', [ActorController::class, 'index']);
Route::resource('/actors', ActorController::class)->except(['index', 'show'])->middleware('admin');
Route::get('/actors/{actor:id}', [ActorController::class, 'show']);


// user's profile
Route::resource('/users', UserController::class)->only(['edit', 'update'])->middleware('auth');
Route::put('/users/{id}/avatar', [UserController::class, 'updateAvatar'])->middleware('auth');


// watchlist
Route::resource('/watchlists', WatchlistController::class)->only(['index', 'store', 'update', 'destroy'])->middleware('auth');