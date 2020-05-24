@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <h1>seccion 1</h1>
    </div>
    <div class="row justify-content-md-center">
      @foreach ($peliculas as $pelicula)
        <div class="col-md-2">
          <div class="card">
            <img class="card-img-top" src="\img\cine.png" alt="" width="100">
            <div class="card-body">
              <h4 class="card-title">{{ $pelicula->title }}</h4>
              <p class="card-text">{{ $pelicula->rating }}</p>
              <a href="#">ver</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <div class="row justify-content-md-center">
    <h1>seccion 2</h1>
  </div>
  <div class="row justify-content-md-center">
    @foreach ($peliculas as $pelicula)
      <div class="col-md-2">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{ $pelicula->title }}</h4>
            <p class="card-text">{{ $pelicula->title }}</p>
            <a href="/detallePelicula" class="btn btn-dark">ver</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
