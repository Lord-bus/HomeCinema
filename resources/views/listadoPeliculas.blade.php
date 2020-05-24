@extends('layouts.app')
@section('content')

<!-- Container -->
<div class="container">
  <div class="row" >
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
      <i class="fas fa-film"></i>
      <h4>x</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
      <i class="fas fa-video"></i>
      <h4>y</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
      <i class="fas fa-film"></i>
      <h4>z</h4>
    </div>
  </div>
</div>
<hr>
<hr>
<h2 class="text-center">LISTADO DE PELICULAS</h2>
<br>
<div class="album">
   <div class="container">
      <div class="row" >
         @foreach ($peliculas as $pelicula)
         <div class="col-lg-3 col-md-6 d-flex py-3 justify-content-center">
            <div class="card mb-2 box-shadow" style="">
              <img class="card-img-top img-fluid rounded mx-auto d-block" src="img/cine.png" alt="Card image cap" style="width: 80%; ">
               <div class="card-body">
                 {{-- ******** ETIQUETA ************* --}}
                  <h5 class="card-title">{{ ($pelicula->title) }}</h5>
                  <form method="post" action="/detallePelicula/{{$pelicula->id}}" enctype="multipart/form-data">
                     @csrf
                     @method('GET')
                   <div class="form-group">
                     <input type="hidden" name="id" value="{{ $pelicula->id }}">
                     <input type="submit" name="" value="Ver">
                    </div>
                  </form>
                {{-- ******** ETIQUETA ************* --}}
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection
