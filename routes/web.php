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

    Auth::routes();

    // home
    Route::get('/', 'HomeController@index')->name('home');

    // home search
    Route::post('/home-search', 'HomeController@search')->name('home.search');
    Route::get('/class-search/{id}', 'HomeController@getClasses');
    Route::get('/subject-search/{id}', 'HomeController@getSubjects');

    // teacher
    Route::get('/teacher-grid/{id?}', 'TeacherController@index')->name('teacher.grid');
    Route::get('/get-area/{id}', 'TeacherController@getAreas');
    Route::get('/get-sector/{id}', 'TeacherController@getSectors');
    Route::get('/get-class/{id}', 'TeacherController@getClasses');
    Route::get('/get-subject/{id}', 'TeacherController@getSubjects');
    Route::get('/get-teacher/{area?}/{subject?}', 'TeacherController@getTeachers');

    //teacher page
    Route::get('/teacher/{id?}', 'TeacherController@teacherPage')->name('teacher.page');

    //event page
    Route::get('/event-grid/{id?}', 'EventController@index')->name('event.grid');
    Route::get('/event/{id}', 'EventController@eventPage')->name('event.page');

    //contact page
    Route::get('/contact-us', 'TeacherController@contactPage')->name('teacher.contact.page');
    Route::post('/contact-us', 'TeacherController@contact')->name('teacher.contact');

    //review
    Route::post('/review', 'TeacherController@review')->name('review');

    //about page
    Route::get('/about-us', 'TeacherController@about')->name('teacher.about');


});
