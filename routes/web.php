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
Route::get('logout', [UsersController::class, 'logout'])->name('users.logout');
Route::get('/login', [UsersController::class, 'login'])->name('users.login');

Route::get('/register', [UsersController::class, 'create'])->name('users.register');
Route::post('register', [UsersController::class, 'store'])->name('users.store');

Route::post('/credit-create/{application}', 'App\Http\Controllers\CreditsController@store')->name('credits.store');

Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::post('/users/{user}/update', [UsersController::class, 'update'])->name('users.update');

Route::get('/apply', 'App\Http\Controllers\CreditApplicationsController@creditApply')->name('credit.apply');
Route::get('/apply-store', 'App\Http\Controllers\CreditApplicationsController@creditApplyStore')->name('credit.apply.store');

Route::get('/calculator', [UsersController::class, 'showCalculator'])->name('users.calculator');
