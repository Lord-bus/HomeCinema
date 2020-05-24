@extends('layouts.app')
@section('content')
   <div class="container">
              <div class="row">
                <div class="col-md-12 mt-2 mb-2">
                  <h3 class="text-center"><b> Agregar Pelicula </b></h3>
                </div>
                <div class="col-md-6">
                 <section class="container-fluid perfil">
                    <form method="POST" action="" enctype="multipart/form-data">
                       @csrf
                       @method('GET')
                     <div class="form-group">
                      <label for="exampleInputEmail1">Titulo</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Texto">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Raiting</label>
                      <input type="float" class="form-control" id="exampleInputEmail1" placeholder="decimal">
                      </div>
                      <div class="form-group">
                       <label for="exampleInputEmail1">Premios</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entero">
                       </div>
                       <div class="form-group">
                       <label for="exampleInputEmail1">Fecha de Estreno</label>
                       <input type="date" class="form-control" id="exampleInputEmail1" placeholder="fecha">
                       </div>
                       <div class="form-group">
                       <label for="exampleInputEmail1">Duración</label>
                       <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Entero">
                       </div>
                       <div class="form-group">
                       <label for="exampleInputEmail1">Genero:</label><br>
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
                     <input type="file" name="imagen" value="imagen">
                  </div>
                  Interests:<br>

                  </div>
                <div>
                 <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-danger float-right">Actualizar</button>
                 </div>
                  <a href="/user" class="btn btn-lg btn-warning float-left">Volver</a>
               </div>
             </form>
            </section>
              </div>

            </div>

   </div>
@endsection
