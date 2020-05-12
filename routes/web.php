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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboardAdmin','PagesController@admin');
Route::get('/dashboardOwner','PagesController@Owner');
Route::resource('users','UsersController');
Route::resource('gyms','GymController');
Route::resource('memberships','MembershipsController');
Route::resource('feedback','FeedbacksController');
Route::resource('courses','CoursesController');
Route::get('/allGyms','PagesController@allgyms');
Route::get('/managers','PagesController@managers');
Route::get('/statistics','PagesController@statistics');

Route::get('/userprofile','PagesController@userprofile');

