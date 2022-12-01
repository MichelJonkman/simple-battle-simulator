<?php

use App\Modules\Auth\Http\Controllers\LoginFormController;
use App\Modules\Auth\Http\Controllers\RegisterFormController;
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

Route::middleware('auth')->get('/', function () {
    return view('app');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', LoginFormController::class)->name('login');
    Route::get('/register', RegisterFormController::class)->name('register');
});
