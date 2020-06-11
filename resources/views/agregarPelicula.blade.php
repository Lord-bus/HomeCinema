@extends('layouts.app')
@section('content')
  @if($errors->any())
  <div class="alert alert-danger alert-dismissible fade in show" role="alert">
     <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
     </ul>
  </div>
  @endif
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
                      <input type="text" name="title" class="form-control" id="#" placeholder="Texto" value="{{old('title')}}">
                      </div>
                      <div class="form-group">
                      <label for="#">Raiting</label>
                      <input type="float" name="rating" class="form-control" id="#" placeholder="Decimal con punto" value="{{old('rating')}}">
                      </div>
                      <div class="form-group">
                       <label for="#">Premios</label>
                       <input type="text" name="awards" class="form-control" id="#" placeholder="Número Entero" value="{{old('awards')}}">
                       </div>
                       <div class="form-group">
                       <label for="#">Fecha de Estreno</label>
                       <input type="date" name="release_date" class="form-control" id="#" placeholder="" value="{{old('release_date')}}">
                       </div>
                       <div class="form-group">
                       <label for="#">Duración</label>
                       <input type="int" name="length" class="form-control" id="#" placeholder="Número Entero - Cantidad de Minutos" value="{{old('length')}}">
                       </div>
                       <div class="form-group">
                       <label for="#">Poster</label>
                       <input type="file" name="avatar" class="form-control" id="#" placeholder="" value="{{old('avatar')}}">
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
