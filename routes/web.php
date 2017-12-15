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
    return '梁裕鑫D1044181021';
});

Route::get('/teachers', 'TeachersController@allteacher');

Route::get('/teachers/{id}', 'TeachersController@show')->where(['id'=>'[0-9]+'])->name('teachers.show');

Route::get('/teachers/create', 'TeachersController@create')->name('teachers.create');

Route::post('/teachers/store', 'TeachersController@store');