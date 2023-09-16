@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidom')
    <div class="card">
        <h5 class="card-header">Agregar nuevo curso</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('cursos.storem') }}" method="POST">
                @csrf
                <label for="">Codigo</label>
                <input type="text" name="codigo" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Creditos</label>
                <input type="number" name="credito" class="form-control" required>
                <label for="">Requisitos</label>
                <input type="number" name="requisito" class="form-control" required>

                <br>
                <a href="{{ route("cursos.indexm") }}" class="btn btn-info">
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


