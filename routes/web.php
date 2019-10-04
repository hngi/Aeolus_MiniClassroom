<?php

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

Route::get('/', function () {
    if (!auth()->user()) {
        return view('welcome');
    } else {
        if (auth()->user()->type === 1) {
            return redirect('teacher');
        } elseif (auth()->user()->type === 2) {
            return redirect('student');
        }
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq', function (){
    return view('faq');
});

Route::get('/faq1', function (){
    return view('faq1');
});


Route::group(['prefix' => 'student', 'middleware' => ['auth']], function () {
    Route::get('/', 'StudentController@index')->name('student.index');
    Route::post('/', 'StudentController@index')->name('student.index');
    Route::post('/enroll', 'CourseController@enroll')->name('student.enroll');
    Route::get('/profile', 'StudentController@profile')->name('student.profile');
});

Route::group(['prefix' => 'courses', 'middleware' => ['auth']], function () {
    Route::get('/', 'CourseController@index')->name('courses.index');
    Route::get('/{course}', 'CourseController@show')->name('course.show');
    Route::get('/{course}/resources/{document}', 'CourseController@document')->name('document.show');
    Route::post('/', 'CourseController@save')->name('course.add');
    Route::post('/{course}/document', 'CourseController@addDocument')->name('document.add');
    Route::get('/{course}/students', 'CourseController@students')->name('course.students');
    Route::post('/{document}/completed', 'CourseController@completed')->name('document.completed');
});


Route::group(['prefix' => 'teacher', 'middleware' => ['auth']], function () {
    Route::get('/', 'TeacherController@index')->name('teacher.index');
    Route::get('/courses/{course}', 'TeacherController@course')->name('teacher.course');
    Route::get('/profile', 'StudentController@profile')->name('teacher.profile');
    Route::get('/courses/{course}/resources/{document}', 'TeacherController@document')->name('teacher.document');
});


Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');