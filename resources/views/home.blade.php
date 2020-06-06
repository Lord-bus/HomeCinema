@extends('layouts.app')
@section('content')

<div class="container-fluid" bg-color="dark">
  <div class="row justify-content-md-center">
  <h1>Ultimas !!</h1>
  </div>
  <div class="row justify-content-md-center">
    @foreach ($peliculas2 as $pelicula)
      <div class="col-md-2 col-sm-6">
        <div class="card">
          <img src="/storage/{{$pelicula->avatar}}"  class="card-img-top" alt="Card image">
        
          <div class="card-body">
            <p class="card-text"><b>{{$pelicula->title}}</b></p>
            <div class="">
              <a href="/detallePelicula/{{$pelicula->id}}" class="btn btn-info btn-left btn-sm">Ver Detalles</a>
              {{-- <a href="/detallePeliculas/{{$pelicula->id}}" class="btn btn-success btn-right btn-sm">Trailer</a> --}}
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <br>
  <div class="row justify-content-md-center">
  <h1>Random !!</h1>
  </div>
  <div class="row justify-content-md-center">
    @foreach ($peliculas as $pelicula)
      <div class="col-md-2 col-sm-6">
        <div class="card">
          <img src="/storage/{{$pelicula->avatar}}" class="card-img-top" alt="Card image">
          <div class="card-body">
            <p class="card-text">Premios: {{$pelicula->title}}</p>
            <div class="">
              <a href="/detallePeliculas/{{$pelicula->id}}" class="btn btn-info btn-left btn-sm">Detalle</a>
              {{-- <a href="/detallePeliculas/{{$pelicula->id}}" class="btn btn-success btn-right btn-sm">Trailer</a> --}}
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection
