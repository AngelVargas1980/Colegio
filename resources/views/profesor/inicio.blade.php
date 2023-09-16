@extends('layout.plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(\Session::has('warning'))
        <div class="alert alert-warning">
            <ul>
                <li>{!! \Session::get('warning') !!}</li>
            </ul>
        </div>
    @endif



    <div class="card" xmlns="http://www.w3.org/1999/html">
        <h5 class="card-header">Listado de profesores/inicio.blade</h5>
        <h7 class="card-header">Estoy en la vista inicio.blade</h7>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if($mensaje = \Illuminate\Support\Facades\Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>

                    @endif


                </div>
            </div>
            <h5 class="card-title text-center">Listado de profesores en el sistema/inicio.blade</h5>
            <p>
                <a href="{{ route("personas.create") }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nuevo profesor
                </a>

{{--                <a href="{{ route("transportes.createt") }}" class="btn btn-primary">--}}
{{--                    <span class="fas fa-user-plus"></span> Agregar nuevo sede--}}
{{--                </a>--}}

{{--                <a href="{{ route("camiones.createc") }}" class="btn btn-primary">--}}
{{--                    <span class="fas fa-user-plus"></span> Agregar nuevo camión--}}
{{--                </a>--}}

{{--                <a href="{{ route("predios.createp") }}" class="btn btn-primary">--}}
{{--                    <span class="fas fa-user-plus"></span> Agregar nuevo predio--}}
{{--                </a>--}}

            </p>
            <hr>

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Id_profesor</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Materia</th>
                    <th>Años de Experiencia</th>
                    <th>Codigo del curso</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->edad }}</td>
                            <td>{{ $item->materia }}</td>
                            <td>{{ $item->anos_experiencia }}</td>
                            <td>{{ $item->curso_codigo }}</td>

                            <td>
                                <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>


                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <hr>
                <br>
                <br>


            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
                <hr>
            </div>

            </p>

        </div>
    </div>



    {{--    <div class="row">--}}
    {{--        <h1>Hola usando Layouts</h1>--}}
    {{--        <i class="Fab fa-500px"></i>--}}
    {{--        <a href="{{ route('personas.create') }}">Agregar</a>--}}
    {{--    </div>--}}

@endsection


