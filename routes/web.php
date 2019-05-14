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

Route::get('/', 'DailyController@index');

Auth::routes();

Route::get('weekmenu', 'WeekmenuController@index');
Route::get('dailydish', 'DailyController@index');

Route::group(['middleware' => ['auth'] ], function(){

    Route::get('/adminviews/createDish', 'CreateDishController@index');
    Route::post('/adminviews/createdish', ['as'=> 'createdish.store', 'uses'=> 'createDishController@store']);
    Route::get('/adminviews/createSideDish', 'CreateSideDishController@index');
    Route::post('/adminviews/createSideDish', ['as'=> 'createsidedish.store', 'uses'=> 'CreateSideDishController@store']);
    Route::get('/adminviews/setDaily', 'SetDailyController@index');
    Route::post('/adminviews/setDaily', ['as'=> '/setdaily.store', 'uses'=> 'SetDailyController@store']);
    Route::get('/adminviews/setWeekMenu', 'SetWeekMenuController@index');
    Route::post('/adminviews/setWeekMenu', 'SetWeekMenuController@store')->name('weekMenuPost');
});