@extends('layouts.app')

@section('content')

<div class="container">
    <h2 style="margin-top: 12px; color:blue" class=" text-center" >Modo Administrador</h2><br>
    <div class="row">
        <div class="col-12">
          <a href="/agregarPelicula" class="btn btn-success" style="margin-left:85%">Agregar Pelicula</a>
          <table class="table table-striped">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Imagen</th>
                 <th>Titulo</th>
                 <th>Fecha de Estreno</th>
                 <th>Raiting</th>
                 <th ></th>
                 <th ></th>
                 <th ></th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody id="pelis-abm">
              @foreach($peliculas as $pelicula)
              <tr id="user_id_{{ $pelicula->id }}">
                 <td>{{ $pelicula->id  }}</td>
                 <td><a href="#"><img src="/storage/{{$pelicula->avatar}}" style="width:100px;height:80px; border-radius:5px;"></a></td>
                 <td>{{ $pelicula->title }}</td>
                 <td>{{ $pelicula->release_date }}</td>
                 <td>{{ $pelicula->rating }}</td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>
                 <a href="/detallePelicula/{{$pelicula->id}}"  class="btn btn-warning" value="Edit">Ver</a>
                 <a href="/editarPelicula/{{ $pelicula->id }}" class="btn btn-info" value="Edit">Editar</a>
                  <a href="/borrarPelicula/{{ $pelicula->id }}" class="btn btn-danger delete-user" value="Delete">Borrar</a></td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {{ $peliculas->links() }}
       </div>
    </div>
</div>
@endsection
