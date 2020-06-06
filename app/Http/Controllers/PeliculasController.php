<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;
class PeliculasController extends Controller
{
  //***************** Listado de Peliculas*******************
    public function index()
    {
      $peliculas = Pelicula::all();
      return view('listadoPeliculas',compact('peliculas'));
    }
    //**************** Detalle Pelicula ******************************
      public function show($id)
      {
        $pelicula=Pelicula::findOrFail($id);
        return view("detallePelicula",compact('pelicula'));
      }
    //**************** Agregar Pelicula ******************************
    public function create()
    {
      return view('agregarPelicula');
    }
    //**************** Guardar Pelicula ******************************
    public function store(Request $request)
    {
      $peliculaNueva = new Pelicula();

      $ruta = $request->file("avatar")->store("public");
      $nomArchivo = basename($ruta);

      $peliculaNueva->title = $request["title"];
      $peliculaNueva->rating = $request["rating"];
      $peliculaNueva->awards = $request["awards"];
      $peliculaNueva->release_date = $request["release_date"];
      $peliculaNueva->length = $request ["length"];
      $peliculaNueva->avatar = $nomArchivo;
      $peliculaNueva->save();

      return redirect("/admin");
    }

    public function update(Request $request, $id)
    {
        $peliculaNueva = Pelicula::findOrFail($id);

        if($request->hasFile('avatar'))
        {
        $ruta = $request->file("avatar")->store("public");
        $nomArchivo = basename($ruta);
        $peliculaNueva->avatar = $nomArchivo;
        }
        $peliculaNueva->title = $request["title"];
        $peliculaNueva->rating = $request["rating"];
        $peliculaNueva->awards = $request["awards"];
        $peliculaNueva->release_date = $request["release_date"];
        $peliculaNueva->length = $request ["length"];
        // $peliculaNueva->genre_id = $request ["genre"];
        $peliculaNueva->save();
        return redirect("/listadoPeliculas");
    }
    //**************** Editar Pelicula ******************************
    public function edit($id)
    {
      $peliculas=Pelicula::findOrFail($id);
      $generos=Genero::all();
      return view('editarPelicula',compact('peliculas','generos'));
    }
    //**************** Borrar Pelicula ******************************
    public function destroy($id)
    {
      $peliculas=Pelicula::find($id);
      $peliculas->delete();
      return redirect("/admin");
    }
    //**************** Buscar Pelicula ******************************
    public function buscar(Request $form)
    {
      $peliculas=Pelicula::where('title','LIKE',"%{$form->input('title')}%")->paginate(3);
      return view('listadoPeliculas',compact('peliculas'));
    }
}
