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




//\Illuminate\Routing\Route::ge
    Route::get('/', function () {
        return view('dashboard');
    });


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/clubs', 'Clubs\clubController@index');
Route::get('/addClub', 'Clubs\clubController@create');
Route::DELETE('/deleteClub/{id}', 'Clubs\clubController@destroy');
Route::POST('/addClubs', 'Clubs\clubController@store');
Route::get('/editClub/{id}', 'Clubs\clubController@edit');



Route::get('/matches', 'Matches\matchController@index');
Route::get('/addMatch', 'Matches\matchController@create');
Route::DELETE('/deleteMatch/{id}', 'Matches\matchController@destroy');
Route::POST('/addMatches', 'Matches\matchController@store');
Route::get('/editMatch/{id}', 'Matches\matchController@edit');








