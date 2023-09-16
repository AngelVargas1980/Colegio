@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidos')



    <div class="card">
        <h5 class="card-header">Agregar nueva sede</h5>
        <h7>Plantilla de agregar-sede/creates</h7>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('sedes.stores') }}" method="POST">
                @csrf
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Dirección</label>
                <input type="text" name="direccion" class="form-control" required>
                <label for="">Telefono</label>
                <input type="text" name="telefono" class="form-control" required>
                <label for="">Correo</label>
                <input type="email" name="correo" class="form-control" required>
{{--                <label for="">Fecha</label>--}}
{{--                <input type="date" name="fecha" class="form-control" required>--}}
                <br>
                <a href="{{ route("sedes.indexs") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Agregar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection

