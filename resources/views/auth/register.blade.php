@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidoreg')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

{{--<form action="/register" method="POST">
    @csrf--}}


<form action="{{ route('/register') }}" method="POST">
    @csrf
    <label for="">Usuario</label>
    <input type="text" name="username" class="form-control" required>
    <label for="">Correo</label>
    <input type="text" name="email" class="form-control" required>
    <label for="">Contraseña</label>
    <input type="text" name="password" class="form-control" required>
    <label for="">Confirmacion Contraseña</label>
    <input type="text" name="password_confirmation" class="form-control" required>

{{--
        <input type="text" name="username">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="password_confirmation">
        <input type="submit" value="Registrarse">--}}


    <br>
    <a href="{{ route("registros.showregis") }}" class="btn btn-info">
        <span class="fas fa-undo-alt"></span> Regresar
    </a>
    <button class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Agregar
    </button>




    </form>
</body>
</html>

@endsection
