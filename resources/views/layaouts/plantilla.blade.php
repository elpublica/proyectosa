<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>@yield('titulo')</title>
  </head>
  <body>
    @section('header')
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7b08b4">
        
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TRANSPORTES SAAVEDRA</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                                                                         <!--Correciones para la ligas al index-->
              <a class="nav-link active" aria-current="page" href="{{route('index')}}">Incio</a>
              <a class="nav-link" href="#">Contacto</a>
							<!--Correciones para la ligas al Login-->
              @guest
              <a class="nav-link" href="{{route('login')}}">Login</a>
              @else
              

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{route('admin.index')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Administrador
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" name="usuario"  href="{{route('admin.index')}}">Ingresar Usuario</a></li>
                    <li><a class="dropdown-item" name="camion" href="{{route('adminc.index')}}">Ingresar Camion</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.create')}}">Asignacion De Usuarios A Camiones</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{route('admin.index')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Usuario: {{Auth::user()->name}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('docente.index')}}">Registrar Datos De Llegada</a></li>
                    <li><a class="dropdown-item" href="{{route('docente.create')}}">Registrar Datos De Salida</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>

              <a class="nav-link" href="{{route('logout')}}">Salir</a>
              @endguest
              
            </div>
          </div>
        </div>
      </nav>
    @show
      <div class="container">
          @yield('contenido')
      </div>
  
      @section('footer')
      Pie de pagina 
      @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>