@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear categorias</title>

        <!-- link para sweetalert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <h2 class="text-center mb-5">Crear una nueva categorias</h2>


        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <form id="formulario_crear" method="POST" action="{{ route('categoria.store') }}" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre de la categoria</label>
                        <input type="text" name="nombre" class="form-control  @error('nombre') is-invalid  @enderror"
                            id="nombre" placeholder="Hombre..." value="{{ old('nombre') }}">

                        @error('nombre')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="button" class="btn btn-primary" value="Agregar categoria" onclick="agregar()">
                        <a href="{{ route('categoria.indexCa') }}" class="btn btn-primary ">Volver</a>
                    </div>


                </form>
            </div>
        </div>
        <script>
            function agregar() {
                Swal.fire({
                    title: "¡Estas seguro!",
                    text: "¿Deseas agregar esta categoria?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, agregar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "!Categoria agregada!",
                            text: "La categoria se agrego correctamente",
                            icon: "success"
                        });

                        // Prevent the form from submitting automatically
                        event.preventDefault();

                        // Manually submit the form
                        document.getElementById('formulario_crear').submit();
                    }
                });
            }
        </script>
    </body>

    </html>

@stop
