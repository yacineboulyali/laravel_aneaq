<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('accueil',function (){
    return view('accueil');
});
Route::get('service',function (){
    return view('service');
});
Route::get('contact',function (){
    return view('contact');
});

Route::get('/cvs', 'CvController@index');
Route::get('/cvs/create', 'CvController@create');
Route::post('/cvs', 'CvController@store');
Route::get('/cvs/{id}/edit', 'CvController@edit');
Route::put('/cvs/{id}', 'CvController@update');
Route::delete('/cvs/{id}', 'CvController@destroy');
