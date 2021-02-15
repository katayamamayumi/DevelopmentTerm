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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/calendar', 'calendar');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::view('/', 'admin.index');
    Route::get('user/edit', 'Admin\UsersController@edit');
    Route::post('user/edit', 'Admin\UsersController@update');
    Route::get('goal/edit', 'Admin\GoalController@edit');
    Route::post('goal/edit', 'Admin\GoalController@update');
    Route::get('usermessage/edit', 'Admin\UsermessageController@edit');
    Route::post('usermessage/edit', 'Admin\UsermessageController@update');
    Route::get('userfollow/edit', 'Admin\UserfollowController@edit');
    Route::post('userfollow/edit', 'Admin\UserfollowController@update');
    Route::get('task/edit', 'Admin\TaskController@edit');
    Route::post('task/edit', 'Admin\TaskController@update');
    Route::get('wisewords/edit', 'Admin\WisewordsController@edit');
    Route::post('wisewords/edit', 'Admin\WisewordsController@update');
    Route::post('postevent', 'Admin\WisewordsController@postEvent');
});
