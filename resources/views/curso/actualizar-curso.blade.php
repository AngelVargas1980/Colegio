@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidom')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo curso</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('cursos.updatem', $cursos->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Codigo</label>
                <input type="text" name="codigo" class="form-control" required value="{{$cursos->codigo}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$cursos->nombre}}">
                <label for="">Creditos</label>
                <input type="number" name="credito" class="form-control" required value="{{$cursos->credito}}">
                <label for="">Requisitos</label>
                <input type="number" name="requisito" class="form-control" required value="{{$cursos->requisito}}">

                <br>
                <a href="{{ route("cursos.indexm") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection




