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

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontController@index');
    Route::get('/disciplines', 'FrontController@disciplines');
    Route::get('/teacher/{id}', 'FrontController@teacher');

    Route::get('/user-init', 'HomeController@init');


});

Auth::routes();




Route::group(['prefix' => '/home'], function () {
    Route::get('/', 'HomeController@index');

    Route::group(['prefix' => '/profile'], function () {
        Route::post('/update', 'HomeController@userUpdate');
        Route::post('/avatar', 'HomeController@userAvatar');
    });


    Route::group(['prefix' => '/discipline'], function () {
        Route::get('/', 'DisciplineController@index');
        Route::get('/new', 'DisciplineController@new');
        Route::post('/create', 'DisciplineController@create');
        Route::get('/edit', 'DisciplineController@edit');
        Route::post('/update', 'DisciplineController@update');
    });

    Route::group(['prefix' => '/discipline'], function () {
        Route::get('/', 'DisciplineController@index');
        Route::get('/create', 'DisciplineController@new');
        Route::post('/create', 'DisciplineController@create');
        Route::get('/edit', 'DisciplineController@edit');
        Route::post('/update', 'DisciplineController@update');
    });

    Route::group(['prefix' => '/teacher'], function () {
        Route::get('/', 'TeacherController@index');
        Route::get('/create', 'TeacherController@new');
        Route::post('/create', 'TeacherController@create');
        Route::get('/edit', 'TeacherController@edit');
        Route::post('/update', 'TeacherController@update');
    });

    Route::group(['prefix' => '/teacherDocs'], function () {
        Route::get('/', 'TeacherDocsController@index');
        Route::get('/create', 'TeacherDocsController@new');
        Route::post('/create', 'TeacherDocsController@create');
        Route::get('/edit', 'TeacherDocsController@edit');
        Route::post('/update', 'TeacherDocsController@update');
    });


});



