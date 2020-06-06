@extends('layouts.app')
@section('content')

<div class="container-fluid">
  <div class="row justify-content-md-center">
    <div class="col-md-6">
      <form action="/buscar" method="get">
        <div class="input-group">
          <input type="text" name="title" class="form-control" placeholder="buscar pelicula">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">Buscar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Container -->
<div class="container">
  <div class="row justify-content-md-center">
  <h1>Ultimas !!</h1>
  </div>
  <div class="row justify-content-md-center">
    @foreach ($peliculas as $pelicula)
      <div class="col-md-2 col-sm-6">
        <div class="card">
          <img src="/storage/{{$pelicula->avatar}}" clas="card-img-top" alt="Card image">
          <div class="card-body">
            <p class="card-text"><b>{{$pelicula->title}}</b></p>
            <div class="">
              <a href="/detallePelicula/{{$pelicula->id}}" class="btn btn-info btn-left btn-sm" onclick="return confirm('seguro?');">Detalle</a><a href="/detallePeliculas/{{$pelicula->id}}" class="btn btn-success btn-right btn-sm">Trailer</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <br>
</div>
@endsection
