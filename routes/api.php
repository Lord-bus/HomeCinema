<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listadoPeliculas', 'PeliculasController@listadoAPI');
Route::get('/covid', 'covidController@index');
