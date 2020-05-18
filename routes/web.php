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

Route::get('/english', function () {
    return view('english');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/assignment', function () {
    return view('assignment');
});

Route::get('/allassignment', function () {
    return view('allassignment');
});

Route::get('/questions', function () {
    return view('questions');
});

Route::get('/livestreaming', function () {
    return view('livestreaming');
});

Route::get('/analysis', function () {
    return view('analysis');
});

Route::get('/videolesson', function () {
    return view('videolesson');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
