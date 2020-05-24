@extends('layouts.app')

@section('content')
  <br>
  <main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="/img/cine1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Bienvenido</h1>
              <p>En HOME CINEMA podrás Ver los Ultimós Estrenos y un Listado de peliculas</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="/img/cine2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h5></h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="/img/cine3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>REGISTARCIÓN GRATIS</h1>
              <p>Crea una cuenta y podrás accede a todo los beneficios de la página </p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </main>
@endsection
