<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/', [PageController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [PageController::class, 'login'])->name('login.process');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');



