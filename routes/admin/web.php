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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::group(['prefix'=>'admin', 'as'=>'admin.'], function (){

        Route::get('/', 'HomeController@index')->name('home');

        Route::get('/login', 'Auth\LoginController@showLogin')->name('login');
        Route::post('/login', 'Auth\LoginController@login')->name('doLogin');
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

        Route::resource('cities', CityController::class);

        Route::resource('areas', AreaController::class);

        Route::resource('sectors', SectorController::class);

        Route::resource('classes', ClassesController::class);

        Route::resource('subjects', SubjectController::class);

        Route::resource('teachers', TeacherController::class);

        Route::resource('students', StudentController::class);
    });
});

