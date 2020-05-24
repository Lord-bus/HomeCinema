<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculasController extends Controller
{
  //***************** Listado de Peliculas*******************
    public function index()
    {
      $peliculas = Pelicula::all();
      return view('listadoPeliculas',compact('peliculas'));
    }
    public function index2()
    {
      $peliculas = Pelicula::all();
      return view('index',compact('peliculas'));
    }
    //**************** Detalle Pelicula ******************************
      public function show(Request $request)
      {
        $id=$request['id'];
        $peliculas=Pelicula::find($id);
        return view("detallePelicula",compact('peliculas'));

      }
    //**************** Agregar Pelicula ******************************
    public function create()
    {
      return view('agregarPelicula');
    }
    //**************** Guardar Pelicula ******************************
    public function update(Request $request)
    {
        $peliculaNueva = new Pelicula();
        $peliculaNueva->title = $request["title"];
        $peliculaNueva->rating = $request["rating"];
        $peliculaNueva->awards = $request["awards"];
        $peliculaNueva->release_date = $request["release_date"];
        $peliculaNueva->length = $request ["length"];

        $peliculaNueva->save();


    }
    //**************** Borrar Pelicula ******************************
    public function destroy($id)
    {
        //
    }
    //**************** Editar Pelicula ******************************
    public function edit($id)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

}
