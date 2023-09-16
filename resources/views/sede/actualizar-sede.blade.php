@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidos')
    <div class="card">
        <h5 class="card-header">Actualizar nueva sede</h5>
        <h7>Plantilla de actualizar-sede/edits</h7>

        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('sedes.updates', $sedes->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">id</label>
                <input type="text" name="id" class="form-control" required value="{{$sedes->id}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$sedes->nombre}}">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" required value="{{$sedes->direccion}}">
                <label for="">Telefono</label>
                <input type="text" name="telefono" class="form-control" required value="{{$sedes->telefono}}">
                <label for="">Correo</label>
                <input type="text" name="correo" class="form-control" required value="{{$sedes->correo}}">

                <br>
                <a href="{{ route("sedes.indexs") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span>  Actualizar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection


