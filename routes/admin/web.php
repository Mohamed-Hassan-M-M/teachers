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
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('admin');

        Route::resource('cities', CityController::class)->middleware('admin');

        Route::resource('areas', AreaController::class)->middleware('admin');

        Route::resource('sectors', SectorController::class)->middleware('admin');

        Route::resource('classes', ClassesController::class)->middleware('admin');

        Route::resource('subjects', SubjectController::class)->middleware('admin');

        Route::resource('teachers', TeacherController::class)->middleware('admin');

        Route::resource('students', StudentController::class)->middleware('admin');

        Route::resource('blogs', BlogController::class)->middleware('admin');

        Route::resource('events', EventController::class)->middleware('admin');

        Route::resource('cat_events', CategoryEventController::class)->middleware('admin');

        Route::resource('contacts', ContactUsController::class)->middleware('admin');

    });
});


