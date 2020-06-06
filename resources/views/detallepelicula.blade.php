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
                      <div class="card">
                        <div class="card-body mb-2">
                          <h1 class="card-text text-center"><b>{{$pelicula->title}}</b></1>
                        </div>
                        <div class="text-center mb-5" >
                          <img src="/storage/{{$pelicula->avatar}}" clas="card-img-top" alt="Card image" width="250">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                       <div class="card shadow" style="border:0px;">
                          <div class="card-header bg-white border-0" >
                             <div class="row align-items-center">
                                <div class="col-8">
                                   <h3 class="mb-0 ">Detalle de Pelicula</h3>
                                </div>
                             </div>
                          </div>
                          <div class="card-body" >
                             <h6 class="heading-small text-muted mb-4">Detalle de la Pelicula</h6>
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
                       <hr class="my-4">
                    </div>
                 </div>
                 <div>
                   <div class="form-group">
                      <button type="submit" class="btn btn-lg btn-danger float-right">Actualizar</button>
                   </div>
                    <a href="/listadoPeliculas" class="btn btn-lg btn-warning float-left">Volver</a>
                 </div>
               </form>
              </section>
           </div>
        </div>
     </div>
  </div>
@endsection
