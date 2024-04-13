@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar color</title>

        <!-- link para sweetalert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <h2 class="text-center mb-5">Editar color</h2>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <form id="formulario_editar" method="POST" action="{{ route('color.update', ['id' => $color->id]) }}"
                    novalidate enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Nombre del color</label>
                        <input type="text" name="nombre" class="form-control  @error('nombre') is-invalid  @enderror"
                            id="nombre" placeholder="camisa..." value="{{ old('nombre', $color->nombre) }}">
                        @error('nombre')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="button" class="btn btn-primary" value="Editar color" onclick="editar()">
                        <a href="{{ route('color.indexC') }}" class="btn btn-primary ">Volver</a>
                    </div>
                </form>
            </div>
        </div>
        <script>
            function editar() {
                Swal.fire({
                    title: "¡Estas seguro!",
                    text: "¿Deseas editar este color?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, Editar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "!Color Editado!",
                            text: "El color se edito correctamente",
                            icon: "success"
                        });

                        // Prevent the form from submitting automatically
                        event.preventDefault();

                        // Manually submit the form
                        document.getElementById('formulario_editar').submit();
                    }
                });
            }
        </script>

    </body>

    </html>

@stop
