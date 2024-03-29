<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

{{--    Esto es para los botones de agregar, eliminar, etc.--}}
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>



    <title>@yield('tituloPagina')</title>


</head>
<body>

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        {{--<a class="nav-link" href="#">#Z</a>--}}
                    </li>
                    <li class="nav-item">
                        {{--<a class="nav-link" href="#">Pricing</a>--}}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Enlace desplegable
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route("sedes.indexs") }}">Sedes</a></li>
                            <li><a class="dropdown-item" href="{{ route("alumnos.indexa") }}">Alumnos</a></li>
                            <li><a class="dropdown-item" href="{{ route("personas.index") }}">Profesores</a></li>
                            {{--<li><a class="dropdown-item" href="{{ route("predios.indexp") }}">Predios</a></li>--}}
                            {{--<li><a class="dropdown-item" href="{{ route("tmercancias.indextm") }}">Tipo_mercancia</a></li>--}}
                            <li><a class="dropdown-item" href="{{ route("cursos.indexm") }}">Cursos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>



@section('sidebar')
    @parent
   <h3><div class="text-center" >
            Sistema para el registro de transacciones
        </div>
    </h3>
@endsection




    <div class="container">
        <br><br>
        @yield('error402')
    </div>


    <div class="container">
        <br><br>
        @yield('error404')
    </div>

    <div class="container">
        @yield('sidebar')
    </div>

{{--Personas/Profesor--}}
    <div class="container">
        @yield('contenido')
        @yield('alertp')
    </div>

{{--Sede--}}
    <div class="container">
        <br>
        @yield('contenidos')
        @yield('alerts')
    </div>

{{--Alumno--}}
    <div class="container">
        <br>
        @yield('contenidoa')
        @yield('alerta')

    </div>

{{--  De la vista auth-register  --}}
<div class="container">
    <br>
    @yield('contenidoreg')
</div>


    <div class="container">
        <br>
        @yield('contenidop')
        @yield('alertp')
    </div>

    <div class="container">
        <br>
        @yield('contenidotm')
        @yield('alerttm')
    </div>

    <div class="container">
        <br>
        @yield('contenidom')
        @yield('alertm')
    </div>



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>--}}

{{--SweetAlert--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>
