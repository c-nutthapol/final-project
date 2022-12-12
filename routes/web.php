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

    // คอร์สทั้งหมด
    Route::prefix('courses')->name('courses.')->group(function () {
        Route::view('/', 'client.courses.index')->name('all');
        Route::view('/detail', 'client.courses.detail')->name('detail');
    });

    Route::prefix('auth')->name('auth.')->group(function () {
        Route::get('/login', 'Client\AuthController@login')->name('login');
        Route::get('/register', 'Client\AuthController@register')->name('register');
        Route::get('{provider}/callback', 'Client\AuthController@callback')->name('callback');
        Route::middleware('auth')->group(function () {
            Route::get('/account', 'Client\AuthController@account')->name('account');
            Route::get('/logout', 'Client\AuthController@logout')->name('logout');

            // คอร์สเรียนของฉัน
            Route::prefix('courses')->name('courses.')->group(function () {
                Route::view('/', 'client.auth.mycourses.index')->name('all');
                Route::view('/view', 'client.auth.mycourses.view')->name('view');
            });
            Route::prefix('teacher')->name('teacher.')->group(function () {
                // คอร์สเรียนทั้งหมดของผู้สอน
                Route::view('/', 'client.teacher.index')->name('all');

                // จัดการคอร์สเรียน
                Route::prefix('course')->name('course.')->group(function () {
                    Route::prefix('manage')->name('manage.')->group(function () {
                        Route::view('/overview', 'client.teacher.course.manage.overview')->name('overview');
                        Route::view('/learn', 'client.teacher.course.manage.learn')->name('learn');
                        Route::view('/requirements', 'client.teacher.course.manage.requirements')->name('requirements');
                    });
                    // จัดการเนื้อหาของคอร์สเรียน
                    Route::prefix('content')->name('content.')->group(function () {
                        Route::view('/', 'client.teacher.course.content.index')->name('index');
                        Route::view('/form', 'client.teacher.course.content.form')->name('form');
                    });
                    // ตั้งค่าคอร์สเรียน
                    Route::view('/settings', 'client.teacher.course.settings')->name('settings');
                });
            });
        });
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
