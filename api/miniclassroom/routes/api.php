<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
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
