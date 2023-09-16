@extends('layout.plantilla')

@section('tituloPagina', 'Crud de alumnos')

@section('contenidoa')

    <div class="card" xmlns="http://www.w3.org/1999/html">
        <h5 class="card-header">ALUMNOS</h5>
        <h7 class="card-header">Estoy en la vista ALUMNO/inicio-alumno</h7>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if($mensaje = \Illuminate\Support\Facades\Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>

                    @endif



                    {{--                    @if (session('success'))--}}
                    {{--                        <div class="alert alert-success">--}}
                    {{--                            {{ session('success') }}--}}
                    {{--                        </div>--}}
                    {{--                    @endif--}}

                    {{--                    @if (session('error'))--}}
                    {{--                        <div class="alert alert-danger">--}}
                    {{--                            {{ session('error') }}--}}
                    {{--                        </div>--}}
                    {{--                    @endif--}}


                </div>
            </div>
            <h5 class="card-title text-center">Listado de alumnos en el sistema</h5>
            <h7 class="card-title text-center">inicio/indexa</h7>
            <p>
                <a href="{{ route("alumnos.createa") }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nuevo alumno
                </a>



            </p>
            <hr>

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Grado</th>
                    <th>Promedio</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Sede_codigo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->edad }}</td>
                            <td>{{ $item->grado }}</td>
                            <td>{{ $item->promedio }}</td>
                            <td>{{ $item->direccion }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->correo }}</td>
                            <td>{{ $item->sede_codigo }}</td>

                            <td>
                                <form action="{{ route("alumnos.edita", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route("alumnos.showa", $item->id) }}" method="GET">
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

@endsection



