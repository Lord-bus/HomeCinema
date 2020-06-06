<?php

//********************************* HOME *****************************
Route::get('/', function ()
{
return view('welcome');
});
Auth::routes();
Route::get('/home','HomeController@index');
Route::get('/admin', 'homeController@admin');
//************************* Acceso a Usuarios **********************************
Route::get('/listadoPeliculas', 'PeliculasController@index');
Route::get('/detallePelicula/{id}','PeliculasController@show');
Route::get('/buscar', 'peliculasController@buscar');
//************************* Acceso a Administrador **********************************
Route::get('/agregarPelicula', 'PeliculasController@create')->middleware('permiso');
Route::post('/agregarPelicula', 'PeliculasController@store')->middleware('permiso');
Route::get('/editarPelicula/{id}', 'peliculasController@edit')->middleware('permiso');
Route::put('/actualizarPelicula/{id}','PeliculasController@update')->middleware('permiso');
Route::get('/borrarPelicula/{id}', 'PeliculasController@destroy')->middleware('permiso');
//***************************************************************
