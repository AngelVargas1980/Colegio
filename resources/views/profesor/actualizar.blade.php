@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo profesor</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('personas.update', $personas->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required value="{{$personas->id}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
                <label for="">Edad</label>
                <input type="number" name="edad" class="form-control" required value="{{$personas->edad}}">
                <label for="">Materia</label>
                <input type="text" name="materia" class="form-control" required value="{{$personas->materia}}">
                <label for="">Años de experiencia</label>
                <input type="number" name="anos_experiencia" class="form-control" required value="{{$personas->anos_experiencia}}">
                <label for="">Codigo del curso</label>
                <input type="text" name="curso_codigo" class="form-control" required value="{{$personas->curso_codigo}}">
                <br>

                <a href="{{ route("personas.index") }}" class="btn btn-info">
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

