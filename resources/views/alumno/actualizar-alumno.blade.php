@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidoa')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo alumno</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('alumnos.updatea', $alumnos->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required value="{{$alumnos->id}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$alumnos->nombre}}">
                <label for="">Edad</label>
                <input type="number" name="edad" class="form-control" required value="{{$alumnos->edad}}">
                <label for="">Grado</label>
                <input type="text" name="grado" class="form-control" required value="{{$alumnos->grado}}">
                <label for="">Promedio</label>
                <input type="text" name="promedio" class="form-control" required value="{{$alumnos->promedio}}">
                <label for="">Dirección</label>
                <input type="text" name="direccion" class="form-control" required value="{{$alumnos->direccion}}">
                <label for="">Telefono</label>
                <input type="text" name="telefono" class="form-control" required value="{{$alumnos->telefono}}">
                <label for="">Correo</label>
                <input type="email" name="correo" class="form-control" required value="{{$alumnos->correo}}">
                <label for="">Sede_codigo</label>
                <input type="text" name="sede_codigo" class="form-control" required value="{{$alumnos->sede_codigo}}">

                <br>
                <a href="{{ route("alumnos.indexa") }}" class="btn btn-info">
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


