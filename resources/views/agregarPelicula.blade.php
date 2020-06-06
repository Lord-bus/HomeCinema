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
                       <div class="form-group">
                       <label for="#">Poster</label>
                       <input type="file" name="avatar" class="form-control" id="#" placeholder="">
                       </div>
                       <div class="">
                         <input type="submit" name="" value="AgregarPelicula">
                       </div>
             </form>
            </section>
              </div>
            </div>
   </div>
@endsection
