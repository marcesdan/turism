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
//Auth::routes();

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

// Turismo auth routes
Route::prefix('turismo')->group(function () {
    Route::get('/login', 'Auth\LoginController@showTurismoLoginForm');
    Route::post('/login', 'Auth\LoginController@turismoLogin');
    Route::get('/register', 'Auth\RegisterController@showTurismoRegisterForm');
    Route::post('/register', 'Auth\RegisterController@createTurismo');
    Route::view('/', 'turismo')->middleware('auth:turismo');
});

// Mayoristas auth routes
Route::prefix('mayoristas')->group(function () {
    Route::get('/login', 'Auth\LoginController@showMayoristaLoginForm');
    Route::post('/login', 'Auth\LoginController@mayoristaLogin');
    Route::get('/register', 'Auth\RegisterController@showMayoristaRegisterForm');
    Route::post('/register', 'Auth\RegisterController@createMayorista');
    Route::view('/', 'mayorista')->middleware('auth:mayorista');
});
