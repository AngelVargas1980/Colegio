@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Agregar nuevo profesor</h5>
        <div class="card-body">

            <p class="card-text">
                <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Edad</label>
                <input type="number" name="edad" class="form-control" required>
                <label for="">Materia</label>
                <input type="text" name="materia" class="form-control" required>
                <label for="">Años de experiencia</label>
                <input type="number" name="anos_experiencia" class="form-control" required>
                <label for="">Codigo del curso</label>
                <input type="text" name="curso_codigo" class="form-control" required>
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-info">
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
