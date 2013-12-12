<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/** non-controller routing 
Route::get('test/info', function()
{
	return View::make('testinfo');
});
*/

Route::get('test/info', 'SonartestController@getIndex');
//Route::get('test/info', 'SonartestController');



Route::get('/users', function()
{
	return View::make('users');
    //return 'Users!';
});

Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});

Route::get('authors', function()
{
    $authors = Author::all();

    return View::make('authors')->with('authors', $authors);
});

