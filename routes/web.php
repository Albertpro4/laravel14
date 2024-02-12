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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });


    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/review', function () {
        return view('review');
    });

   
    Route::get('/email', function () {
        return view('email');
    });

    Route::get('/boner', function () {
        return view('boner');
    });


    

    Route::get('praktika', 'PraktiksController@index');
    Route::post('selectprakrika', 'PraktiksController@selectpkartika')->name('selectpraktika');

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */

       
         
         Route::post('/review/check', 'ContactController@review_check')->name('review/check');

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });

    Route::get('/forget-password', 'ForgotPasswordController@getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');

Route::get('/reset-password/{token}', 'ResetPasswordContForgotPasswordControllerroller@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');

});
