<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Blog;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'PagesController@contact');

# Blogs routes
// Route::get('/blogs', 'PagesController@blogs');
// Route::get('/blogs', ['as' => 'blogs.index', 'uses' => 'PagesController@blogs']);

// Route::get('/blogs/create', 'PagesController@blogsCreate');

// Route::get('/blogs/{id}', 'PagesController@blogsShow');

#Blogs new routes
Route::resource('blogs', 'BlogsController');


// Authentication routes..
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes..
Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');




// API ROUTES

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('blogs', 'BlogsController@all');
});

