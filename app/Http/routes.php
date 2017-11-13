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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'PagesController@contact');

Route::get('/blogs', 'PagesController@blogs');

Route::get('/blogs/{id}', 'PagesController@blogsShow');
=======
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PagesController@index');
>>>>>>> 09477b30104124f1c96934b8ba767b8760e3bbd8
