@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar producto en inventario</title>

        <!-- link para sweetalert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <h2 class="text-center mb-5">Editar producto en inventario</h2>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <form id="formulario_editar" method="POST"
                    action="{{ route('inventario.update', ['id' => $inventario->id]) }}" novalidate>
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="id_producto">producto</label>
                        <select name="id_producto" id="id_producto"
                            class="form-control @error('id_producto') is-invalid  @enderror">
                            <option selected disabled>Seleccione una opción</option>
                            @foreach ($producto as $id => $nombre)
                                <option value="{{ $id }}"
                                    {{ old('id_producto', $inventario->id_producto) == $id ? 'selected' : '' }}>
                                    {{ $nombre }} </option>
                            @endforeach
                        </select>

                        @error('id_producto')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="id_talla">Talla</label>
                        <select name="id_talla" id="id_talla"
                            class="form-control @error('id_talla') is-invalid  @enderror">
                            <option selected disabled>Seleccione una opción</option>
                            @foreach ($talla as $id => $nombre)
                                <option value="{{ $id }}"
                                    {{ old('id_talla', $inventario->id_talla) == $id ? 'selected' : '' }}>
                                    {{ $nombre }}
                                </option>
                            @endforeach
                        </select>

                        @error('id_talla')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror"
                            id="cantidad" placeholder="75"
                            value="{{ old('cantidad', number_format($inventario->cantidad, 0, '', '')) }}">
                        @error('cantidad')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="button" class="btn btn-primary" value="Editar producto" onclick="editar()">
                        <a href="{{ route('inventario.index') }}" class="btn btn-primary ">Volver</a>
                    </div>
                </form>
            </div>
        </div>


        <script>
            function editar() {
                Swal.fire({
                    title: "¡Estas seguro!",
                    text: "¿Deseas editar este producto?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, Editar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "!Producto Editado!",
                            text: "El producto se edito correctamente",
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
