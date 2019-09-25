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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('register', 'UserController@signUp')->name('register');
Route::post('login', 'UserController@signIn')->name('login');
// Route::post('logout', 'UserController@logOut')->name('logout');

Route::post('createclass', 'ClassroomController@createClass')->name('createclass');
Route::get('allcourses/{id}', 'ClassroomController@listAllCourseRooms')->name('allcourses');
Route::post('editcourse/{id}', 'ClassroomController@editCourseRoom')->name('editcourse');
Route::post('removecourse/{id}', 'ClassroomController@deleteCourseRoom')->name('removecourse');
Route::post('addcourseitems', 'ClassroomController@createCourseItem')->name('addcourseitems');

Route::post('joinclass', 'StudentController@studentJoinCourseRoom')->name('joinclass');
