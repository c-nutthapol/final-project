<?php

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

Route::name('client.')->group(function () {
    Route::get('/', function () {
        return view('client.home');
    })->name('home');
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::get('/login', function () {
            return view('client.auth.login');
        })->name('login');
        Route::get('/register', function () {
            return view('client.auth.register');
        })->name('register');
        Route::get('/account', function () {
            return view('client.auth.account');
        })->name('account');
    });
});

Route::prefix('admin')->name('admin-')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('home');
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::get('/login', function () {
            return view('admin.auth.login');
        })->name('login');
    });
});
