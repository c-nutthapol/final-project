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

    Route::view('/instructor', 'client.instructor-form')->name('instructor-form');

    // คอร์สทั้งหมด
    Route::prefix('courses')->name('courses.')->group(function () {
        Route::view('/', 'client.courses.index')->name('all');
        Route::view('/detail', 'client.courses.detail')->name('detail');
    });

    Route::prefix('auth')->name('auth.')->group(function () {
        Route::get('/login', 'Client\AuthController@login')->name('login');
        Route::get('/register', 'Client\AuthController@register')->name('register');
        Route::get('{provider}/callback', 'Client\AuthController@callback')->name('callback');
        Route::middleware('auth:web')->group(function () {
            Route::get('/account', 'Client\AuthController@account')->name('account');
            Route::get('/logout', 'Client\AuthController@logout')->name('logout');

            // คอร์สเรียนของฉัน
            Route::prefix('courses')->name('courses.')->group(function () {
                Route::view('/', 'client.auth.mycourses.index')->name('all');
                Route::view('/view', 'client.auth.mycourses.view')->name('view');
                Route::view('/lecture', 'client.courses.lecture.index')->name('lecture');
            });
        });
    });

    Route::prefix('teacher')->name('teacher.')->middleware(['auth:web', 'role:lecturer'])->group(function () {
        // คอร์สเรียนทั้งหมดของผู้สอน
        Route::get('/', 'Client\TeacherController@courses')->name('all');

        // จัดการคอร์สเรียน
        Route::prefix('course')->name('course.')->group(function () {
            Route::prefix('manage')->name('manage.')->group(function () {
                Route::any('/overview/{id}', 'Client\TeacherController@courseManageOverview')->name('overview');
                Route::get('/learn/{id}', 'Client\TeacherController@courseManageLearn')->name('learn');
                Route::get('/requirements/{id}', 'Client\TeacherController@courseManageRequirements')->name('requirements');
            });
            // จัดการเนื้อหาของคอร์สเรียน
            Route::prefix('content')->name('content.')->group(function () {
                Route::get('/{id}', 'Client\TeacherController@courseContent')->name('index');
                Route::any('/{id}/form', 'Client\TeacherController@courseContenFrom')->name('form');
                Route::any('/{id}/ep', 'Client\TeacherController@courseContenEditEP')->name('edit-ep');
                Route::get('/{id}/quiz', 'Client\TeacherController@courseContenEditQuiz')->name('edit-quiz');
            });
            // ผู้ลงเรียน
            Route::get('/students/{id}', 'Client\TeacherController@courseStudents')->name('students');
            // รีวิว
            Route::get('/reviews/{id}', 'Client\TeacherController@courseReviews')->name('reviews');
            // ตั้งค่าคอร์สเรียน
            Route::get('/settings/{id}', 'Client\TeacherController@courseSetting')->name('settings');
        });
    });
});

// Route::prefix('admin')->middleware(['auth:web', 'role:administrator'])->name('admin-')->group(function () {
//     // Route::get('/', function () {
//     //     return view('admin.home');
//     // })->name('home');
//     Route::view('/', 'admin.home')->name('home');
// });

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.home')->name('home');
    Route::view('/instructor', 'admin.instructor')->name('instructor');
    Route::view('/courses', 'admin.courses')->name('courses');
});
