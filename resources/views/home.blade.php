@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column">
          <h2 ><b>Peliculas Random </b></h2>
          <br>
          @foreach ($peliculas as $pelicula)
            <ul>
              <h5><img src="/img/cine.png" alt="" height="40px"> {{$pelicula->title}}</h5>
              <form method="post" action="/detallePelicula/{{ $pelicula->id }}" enctype="multipart/form-data">
                 @csrf
                 @method('GET')
               <div class="form-group">
                 <input type="hidden" name="id" value="{{ $pelicula->id }}">
                 <input type="submit" name="" value="Ver">
                </div>
              </form>
            </ul>
            <hr>
          @endforeach

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card flex-md-row box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <h2 ><b> Ultimas Peliculas !! </b></h2>
          <br>
          @foreach ($peliculas2 as $pelicula)
            <ul>
              <h5><img src="/img/cine.png" alt="" height="40px"> {{$pelicula->title}}</h5>
              <form method="post" action="/detallePelicula/{{ $pelicula->id }}" enctype="multipart/form-data">
                 @csrf
                 @method('GET')
               <div class="form-group">
                 <input type="hidden" name="id" value="{{ $pelicula->id }}">
                 <input type="submit" name="" value="Ver">
                </div>
              </form>
            </ul>
            <hr>
          @endforeach
          {{$peliculas2->links()}}
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

@endsection
