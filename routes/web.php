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
    return view('index');
});


Route::get('dashboard', 'Backend\DashboardController@dashboard')->name('dashboard');
Route::resource('slider', 'Backend\SliderController');
Route::resource('service', 'Backend\ServiceController');
Route::resource('team', 'Backend\TeamController');
Route::get('index', 'FrontendController@index')->name('index');
Route::get('about_us', 'FrontendController@about')->name('about');
Route::get('causes', 'FrontendController@causes')->name('causes');
Route::get('blog', 'FrontendController@blog')->name('blog');
Route::get('contact', 'FrontendController@contact')->name('contact');