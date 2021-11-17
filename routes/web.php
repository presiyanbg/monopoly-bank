<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [PagesController::class, 'index']);

Route::get('/home', [PagesController::class, 'index'])->name('home');

Route::post('authenticate', [UsersController::class, 'authenticate'])->name('users.authenticate');
Route::get('/login', [UsersController::class, 'login'])->name('users.login');

Route::get('/register', [UsersController::class, 'create'])->name('users.register');
Route::post('register', [UsersController::class, 'store'])->name('users.store');
