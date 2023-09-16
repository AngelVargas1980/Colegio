@extends('layout.plantilla')

@section('tituloPagina', 'Crud de sedes')

@section('contenidos')

    <div class="card" xmlns="http://www.w3.org/1999/html">
        <h5 class="card-header">SEDES</h5>
        <h7>Plantilla de inicio/indexs</h7>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">


                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif


                </div>
            </div>
            <h5 class="card-title text-center">Listado de sedes en el sistema</h5>
            <p>
                <a href="{{ route("sedes.creates") }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nueva sede
                </a>


            </p>
            <hr>

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Id</th>
                    <th>Nombre de sede</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    {{--                    <th>Fecha</th>--}}
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->direccion }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->correo }}</td>
                            {{--                            <td>{{ $item->fecha }}</td>--}}

                            <td>
                                <form action="{{ route("sedes.edits", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route("sedes.shows", $item->id) }}" method="GET">
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



