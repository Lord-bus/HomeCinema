@extends('layouts.app')
@section('content')
  <div class="row justify-content-center">
     <div class="col-md-12">
        <div class="card">
           <div class="card-body">
              <section class="container-fluid perfil">
                {{-- {{ route('updateUser', $pelicula->id) }} --}}
                <form method="POST" action="" enctype="multipart/form-data">
                  @csrf
                  @method('GET')
                 <div class="row">
                    <div class="col-md-6">
                      <div class="card shadow" style="border:1px;">
                        <div class="card-body mb-2">
                          <h1 class="card-text text-center"><b>{{$pelicula->title}}</b></1>
                        </div>
                        <div class="text-center mb-5" >
                          <img src="/storage/{{$pelicula->avatar}}" clas="card-img-top" alt="Card image" width="250">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                       <div class="card shadow" style="border:1px;">
                          <div class="card-header bg-black border-0" >
                             <div class="text-center">
                                   <h4 class="mb-2 "><b>DETALLES</b></h4>
                             </div>
                          </div>
                          <div class="card-body" >
                             <div class="pl-lg-4">
                                <div class="row">
                                   <div class="col-lg-6">
                                      <strong>Titulo:</strong><br>
                                      {{ $pelicula->title }}
                                   </div>
                                   <div class="col-lg-6">
                                      <strong>Raiting:</strong><br>
                                      {{ $pelicula->rating }}
                                   </div>
                                </div>
                                <br>
                                <div class="row">
                                   <div class="col-lg-6">
                                      <strong>Premios:</strong><br>
                                      {{ $pelicula->awards }}
                                   </div>
                                   <div class="col-lg-6">
                                      <strong>Fecha de Estreno:</strong><br>
                                      {{ $pelicula->release_date }}
                                   </div>
                                </div>
                                <br>
                                <div class="row">
                                   <div class="col-lg-6">
                                      <strong>Duración:</strong><br>
                                      {{ $pelicula->length}}
                                   </div>
                                   <div class="col-lg-6">
                                      <strong>Genero:</strong><br>
                                      @if($pelicula->genero)
                                      {{$pelicula->genero->name}}
                                      @else No Especificado!
                                      @endif
                                   </div>
                                </div><br>
                                <div class="row">
                                   <div class="col-lg-6">
                                    <strong>Actores:</strong><br>
                                    <ul>
                                       @foreach ($pelicula->actores as $actor)
                                         <li>
                                           {{ $actor->getname()}}
                                         </li>
                                       @endforeach
                                     </ul>
                                   </div>
                                   <div class="col-lg-6">

                                   </div>
                                </div><br>

                              </div>
                             </div>
                       </div>
                    </div>
                 </div>
               </form>
              </section>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                </div>
                <div class="card-body d-flex justify-content-between align-items-center col-md-6">
                   <a href="/listadoPeliculas" class="btn btn-lg btn-warning float-right">Volver</a>
                </div>
              </div>

           </div>
        </div>
     </div>
  </div>
@endsection
