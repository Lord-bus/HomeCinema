<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <script>
$(document).ready(function(){
  $('.carousel').carousel({
    interval: 60
  });
});
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- **************************************************** -->
    <link rel="icon" href="/favicon.ico">

    <title>home</title>
    <!-- Bootstrap core CSS -->
    <link href="/dist/css/carousel.css" rel="stylesheet">
    <!-- **************************************************** -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/boostrap.min.js"></script>
    <script src="https://kit.fontawesome.com/3b98d2cca3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
  <!--  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-s"> -->
            <div class="container">
                <a class="navbar-default text-danger " href="{{ url('/') }}" align="center">
                  <img style="max-width: 30px;" src="/img/cine.png" alt=""><span class="ml-3 font-Bold"><h4>Home Cinema</h4></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse pb-2 pt-2" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if(Auth::user()!=null)
                      <ul>
                      </ul>
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/home"><h5>Recomendadas</h5></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="/listadoPeliculas"><h5>Listado Peliculas</h5></a>
                        </li>

                      </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="welcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                          <li>
                             <img src="/img/emoji.png" alt="" class="img-responsive img-fluid img-thumbnail rounded mx-auto d-block" style="height:40px;width:40px;margin-left:15px;">
                          </li>
                           {{-- && (Auth::user()->role == "1")) --}}
                          @if (Auth::user()!= null && (Auth::user()->role == "1"))
                          <li style="margin:8px;"><a href="{{url('/admin')}}"><i class="fas fa-tools" style="color:gray;"> Admin</i></a></li>
                          @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<!-- ************************** SECCIONES **********************************-->
        <main class="py-4">
          <section class="container mt-3 pt-2">
              @yield('content')
          </section>
        </main> {{-- <hr> --}}
        <br>
<!-- ************************** FOOTER **********************************-->
        <footer class="container-fluid pt-2 bg-dark text-white">
          <div class="container-fluid ">
            <div class="row">
                <div class="text-center col-sm-4 col-md-3">
                  <div>
                    <ul class="list-unstyled"><hr>
                    <strong>Información de la Página</strong>
                    <p><h6>
                    En HOME CINEMA podrás visualizar:<br><br>
                    los últimos estrenos de peliculas y <br>
                    un listado de peliculas disponibles<br>
                    para ver on-line y descargar.
                    </h6></p>
                    </ul>
                    </ul>
                  </div>
                </div>
                <div class="text-center col-sm-6 col-md-3">
                  <div>
                    <ul class="list-unstyled"><hr>
                      <strong>Siguenos en las Redes Sociales</strong><br>
                      <li><i class="fab fa-facebook-square"></i><a href="http://www.facebook.com" class="text-white"> Facebook</a></li>
                      <li><i class="fab fa-twitter-square"></i><a href="http://www.twitter.com" class="text-white"> Twitter </a></li>
                      <li><i class="fab fa-instagram-square"></i><a href="http://www.instegram.com" class="text-white"> Instegram</a></li>
                      <li><i class="fab fa-youtube"></i><a href="http://www.youtube.com" class="text-white"> YouTube  </a></li>
                    </ul>
                  </div>
                </div>
                <div class="text-center col-sm-6 col-md-3">
                  <div>
                    <ul class="list-unstyled"><hr>
                      <strong>Preguntas Frecuentes</strong><br>
                      <li><a href="" class="text-white">Registración</a></li>
                      <li><a href="" class="text-white">Alquilar Peliculas </a></li>
                      <li><a href="" class="text-white">Descargar Peliculas</a></li>
                      <li><a href="" class="text-white">Medios de Pagos</a></li>
                    </ul>
                  </div>
                </div>
                <div class="text-center col-sm-6 col-md-3"><hr>
                <img src="\img\cine.pnG" alt="" height="40px" class=""><br>
                <strong>HOME CINEMA</strong>
                By Raul Bustamante<br>
                San Miguel de Tucuman<br>
                <strong>E-mail</strong><br>
                  <a href="homecinema2020@gmail.com">contactositio2020@gmail.com</a>
              </div>
              </div>
          </div>
          <br><hr>
          <div class="container bg-black text-center">
          <p>&copy; 2020-2021 Home Cinema, Cia. &middot; <a href="#" class="text-white">Privacy</a> &middot; <a href="#" class="text-white">Terms</a></p><br>
          </div>
        </footer>
    </div>
</body>
</html>
