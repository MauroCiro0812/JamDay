@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar sub_categoria</title>

        <!-- link para sweetalert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <h2 class="text-center mb-5">Editar una sub_categoria</h2>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <form id="formulario_editar" method="POST"
                    action="{{ route('sub_categoria.update', ['id' => $sub_categoria->id]) }}" novalidate
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Nombre de la sub_categoria</label>
                        <input type="text" name="nombre" class="form-control  @error('nombre') is-invalid  @enderror"
                            id="nombre" placeholder="camisa..." value="{{ old('nombre', $sub_categoria->nombre) }}">
                        @error('nombre')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="button" class="btn btn-primary" value="Editar sub_categoria" onclick="editar()">
                        <a href="{{ route('sub_categoria.indexS') }}" class="btn btn-primary ">Volver</a>
                    </div>
                </form>
            </div>
        </div>
        <script>
            function editar() {
                Swal.fire({
                    title: "¡Estas seguro!",
                    text: "¿Deseas editar esta sub_categoria?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, Editar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "!Sub_categoria Editada!",
                            text: "La sub_categoria se edito correctamente",
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
