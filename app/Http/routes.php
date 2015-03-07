<?php

Route::get('/', 'WelcomeController@index');
Route::get('/dolon', 'WelcomeController@dolon');
Route::get('home', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::resource('voters', 'VotersController');
Route::resource('candidate', 'CandidatesController');




