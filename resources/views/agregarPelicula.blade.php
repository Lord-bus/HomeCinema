@extends('layouts.app')
@section('content')
   <div class="container">
              <div class="row">
                <div class="col-md-12 mt-2 mb-2">
                  <h3 class="text-center"><b> Agregar Pelicula </b></h3>
                </div>
                <div class="col-md-6">
                 <section class="container-fluid perfil">
                    <form method="post" action="/agregarPelicula" enctype="multipart/form-data">
                      {{csrf_field()}}
                     <div class="form-group">
                      <label for="#">Titulo</label>
                      <input type="text" name="title" class="form-control" id="#" placeholder="Texto">
                      </div>
                      <div class="form-group">
                      <label for="#">Raiting</label>
                      <input type="float" name="rating" class="form-control" id="#" placeholder="decimal">
                      </div>
                      <div class="form-group">
                       <label for="#">Premios</label>
                       <input type="text" name="awards" class="form-control" id="#" placeholder="Entero">
                       </div>
                       <div class="form-group">
                       <label for="#">Fecha de Estreno</label>
                       <input type="date" name="release_date" class="form-control" id="#" placeholder="fecha">
                       </div>
                       <div class="form-group">
                       <label for="#">Duración</label>
                       <input type="number" name="length" class="form-control" id="#" placeholder="Entero">
                       </div>
                       <div class="">
                         <input type="submit" name="" value="AgregarPelicula">
                       </div>
                       {{-- <div class="form-group">
                       <label for="#">Genero:</label><br>
                       <input type="radio" id="male" name="gender" value="male">
                       <label for="male">Comedia</label>
                       <input type="radio" id="female" name="gender" value="female">
                       <label for="female">Suspenso</label>
                       <input type="radio" id="other" name="gender" value="other">
                       <label for="other">Drama</label>
                       <input type="radio" id="other" name="gender" value="other">
                       <label for="other">Ciencia Ficción</label>
                       <input type="radio" id="other" name="gender" value="other">
                       <label for="other">Anime</label>
                       </div>
               </div>
              <div class="col-md-6">
                <div class="container-fluid">
                  <div class="card shadow" >
                     <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="/img/cine.png" style=" height:200px ;width: 200px;" id="imagen">
                     <input type="file" name="imagen" value="imagen"> --}}

             </form>
            </section>
              </div>
            </div>
   </div>
@endsection
