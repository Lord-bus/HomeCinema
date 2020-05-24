<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Actor;

class ActoresController extends Controller
{
    public function index()
    {
      $actores = Actor::all();
       return view('listadoActores',compact('actores'));
   }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
