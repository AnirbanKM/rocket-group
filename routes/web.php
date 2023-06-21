<?php

use App\Http\Controllers\Frontend\HomeController;
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


Route::controller(HomeController::class)->group(function () {

    Route::get('', 'index')->name('index');
    Route::get('/register', 'register')->name('register');
    Route::post('/createUser', 'createUser')->name('createUser');
    Route::get('/login', 'login')->name('login');
    Route::post('/checkCredentials', 'checkCredentials')->name('checkCredentials');

    Route::middleware(['auth'])->group(function () {

        Route::get('/userLogout', 'userLogout')->name('userLogout');
    });
});
