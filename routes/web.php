<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/students', StudentController::class);

Route::get('/register', [UserController::class, 'register'])->name('auth.register');
Route::post('/store', [UserController::class, 'store'])->name('auth.store');
Route::get('/login', [UserController::class, 'login'])->name('auth.login');
