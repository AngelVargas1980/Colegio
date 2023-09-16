@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidoa')

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


        <div class="card">
            <h5 class="card-header">Agregar nuevo alumno</h5>
            <h7 class="card-header">Aqui estoy en storea</h7>
            <div class="card-body">
            <p class="card-text">
            <form action="{{ route('alumnos.storea') }}" class="xx" method="POST">
                @csrf
                <label for="">Id</label>
                <input type="number" name="id" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Edad</label>
                <input type="number" name="edad" class="form-control" required>
                <label for="">Grado</label>
                <input type="text" name="grado" class="form-control" required>
                <label for="">Promedio</label>
                <input type="number" name="promedio" class="form-control" required>
                <label for="">Dirección</label>
                <input type="text" name="direccion" class="form-control" required>
                <label for="">Telefono</label>
                <input type="number" name="telefono" class="form-control" required>
                <label for="">Correo</label>
                <input type="email" name="correo" class="form-control" required>
                <label for="">Sede_codigo</label>
                <input type="number" name="sede_codigo" class="form-control" required>

                <br>
                <a href="{{ route("alumnos.indexa") }}" class="btn btn-info">
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


{{--SweetAlert--}}
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{--    @if(session('agregar') == 'ok')--}}
{{--        <script>--}}
{{--            Swal.fire('Saved!', '', 'success')--}}
{{--            } else if (result.isDenied) {--}}
{{--                Swal.fire('Changes are not saved', '', 'info')--}}

{{--        </script>--}}

{{--) @endif--}}


    <script>
        $('.xx').submit(function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('save!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                    this.submit();


                }
            })
        });

</script>

@endsection
