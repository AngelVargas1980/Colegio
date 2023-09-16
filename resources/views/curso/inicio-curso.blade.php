@extends('layout.plantilla')

@section('tituloPagina', 'Crud de cursos')

@section('contenidom')

    <div class="card" xmlns="http://www.w3.org/1999/html">
        <h5 class="card-header">CURSOS</h5>
        <h7 class="card-header">Estoy en la vista curso/inicio-curso</h7>
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
            <h5 class="card-title text-center">Listado de cursos en el sistema</h5>
            <p>


                <a href="{{ route("cursos.createm") }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nuevo curso
                </a>

            </p>
            <hr>

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Creditos</th>
                    <th>Requisitos</th>
                    {{--                    <th>Fecha</th>--}}
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{ $item->codigo }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->credito }}</td>
                            <td>{{ $item->requisito }}</td>
                            {{--                            <td>{{ $item->fecha }}</td>--}}

                            <td>
                                <form action="{{ route("cursos.editm", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route("cursos.showm", $item->id) }}" method="GET">
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





