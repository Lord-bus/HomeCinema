<?php

Auth::routes();
//********************************* HOME *****************************
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','HomeController@index')->name('home');

//************************* Sobre Peliculas**********************************
Route::get('/listadoPeliculas', 'PeliculasController@index');
Route::get('/index','PeliculasController@index2');
Route::get('/detallePelicula/{id}','PeliculasController@show')->name('detallePelicula');


Route::get('/admin', 'homeController@admin');

Route::post('/agregarPelicula', 'PeliculasController@update');
Route::get('/borrarPelicula', 'PeliculasController@destroy');
Route::get('/editarPelicula', 'PeliculasController@edit');

//***************************************************************
