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

// 画像転移する
Route::get('/home', 'HomeController@index');

Route::get('/info', 'InfoController@index');

Route::get('/schedule', 'ScheduleController@index');

Route::get('/first_time', 'First_timeController@index');

Route::get('/question', 'QuestionController@index');

Route::get('/contact', 'ContactController@index')->name('input');;



// 入力画面（input.blade.php）でsubmit押した時に実行
// Route::post('/contactshow','ContactController@show')->name('show');

Route::post('/contactshow','ContactController@add');
 
