<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $peliculas=Pelicula::all()->random(5);
        $peliculas2=Pelicula::paginate(5);
        return view('home',compact('peliculas','peliculas2'));
    }
    public function admin()
    {
        $peliculas=Pelicula::paginate(5);
        return view('administrador',compact('peliculas'));
    }
}
