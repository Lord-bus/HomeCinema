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
      $peliculas=Pelicula::orderBy('id','desc')->paginate(12);
      // $peliculas = Pelicula::all();
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
      $generos=Genero::all();
      return view("agregarPelicula",compact('generos'));
    }
    //**************** Guardar Pelicula ******************************
    public function store(Request $request)
    {
      // $request->validate([
      //      'title'       =>  'required',
      //      'rating'      =>  'required',
      //      'awards'      =>  'required',
      //      'release_date'=>  'required|min:1',
      //      'length'      =>  'required',
      //      'avatar'      =>  'required'
      //  ]);
      $reglas=[
        'title'=>"string|min:3|unique:movies,title",
        'rating'=>"numeric|min:0|max:9",
        'awards'=>"integer|min:0",
        'release_date'=>"date",
        'length'=>"integer",
        "avatar"=>"file"
      ];
      $mensaje=[
        "string"=>"El campo :attribute debe ser un texto",
        "min"=> " El campo debe tener un minimo de 3 caracteres",
        "max"=> " debe tener un maximo de max:9",
        "date"=> "El campo :attribute debe ser del tipo fecha",
        "numeric"=> "El campo :attribute debe ser un número decimal con (.)",
        "unique"=> "El campo :attribute está repetido",
        "integer"=>"El campo :attribute debe ser un entero"
      ];

      $this->validate($request, $reglas, $mensaje);

      $peliculaNueva = new Pelicula();

      $ruta = $request->file("avatar")->store("public");
      $nomArchivo = basename($ruta);

      $peliculaNueva->title = $request["title"];
      $peliculaNueva->rating = $request["rating"];
      $peliculaNueva->awards = $request["awards"];
      $peliculaNueva->release_date = $request["release_date"];
      $peliculaNueva->length = $request ["length"];
      $peliculaNueva->genre_id = $request ["genre_id"];
      $peliculaNueva->avatar = $nomArchivo;
      $peliculaNueva->save();

      return redirect("/admin");
    }
    //**************** Actualizar Pelicula ******************************
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
        $peliculaNueva->genre_id = $request ["genre_id"];
        $peliculaNueva->save();
        return redirect("/admin");
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
    public function listadoAPI()
    {
      $peliculas=Pelicula::all();
      return json_encode($peliculas);
    }

}
