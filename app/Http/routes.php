Route::get('google', function (){
    return view('googleAuth');
});

Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback','Auth\LoginController@handleGoogleCallback');