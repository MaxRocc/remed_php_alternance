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
Route::get('/viewAccount', 'AccountController@viewAccount')->middleware('auth');

Route::get('/viewProject', 'ProjectController@viewProject')->name('viewAll');
Route::get('/viewProjectDetails/{id}', 'ProjectController@viewProjectDetails')->name('details');
Route::get('/viewAllProjects', 'ProjectController@viewAllProjects')->name('viewAllProjects');

Route::post('/createProject', 'ProjectController@createProject')->name('create');
Route::get('/beforeCreateProject', 'ProjectController@beforeCreateProject')->name('beforeCreate');
Route::get('/editProject/{id}', 'ProjectController@editProject')->name('edit');
Route::put('/updateProject/{id}', 'ProjectController@updateProject')->name('update');