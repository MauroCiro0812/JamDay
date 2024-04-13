@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear producto en inventario</title>

        <!-- link para sweetalert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <h2 class="text-center mb-5">Crear nuevo producto en inventario</h2>


        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <form id="formulario_crear" method="POST" action="{{ route('inventario.store') }}" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="id_producto">Productos</label>
                        <select name="id_producto" id="id_producto"
                            class="form-control @error('id_producto') is-invalid  @enderror">
                            <option selected disabled>Seleccione una opción</option>
                            @foreach ($productos as $id => $nombre)
                                <option value="{{ $id }}" {{ old('id_producto') == $id ? 'selected' : '' }}>
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
                            @foreach ($tallas as $id => $nombre)
                                <option value="{{ $id }}" {{ old('id_talla') == $id ? 'selected' : '' }}>
                                    {{ $nombre }} </option>
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
                        <input type="text" name="cantidad" class="form-control  @error('cantidad') is-invalid  @enderror"
                            id="cantidad" placeholder="100" value="{{ old('cantidad') }}">

                        @error('cantidad')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="button" class="btn btn-primary" value="agregar producto" onclick="agregar()">
                        <a href="{{ route('inventario.index') }}" class="btn btn-primary ">Volver</a>
                    </div>
                </form>
            </div>
        </div>

        <hr>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">

                <div class="form-group">
                    <label id="categoria">Informacion del producto selecionado</label>
                </div>

                <div id="product-info-nombre">
                </div>

                <div id="product-info-categoria">
                </div>

                <div id="product-info-subCategoria">
                </div>

                <div id="product-info-color">
                </div>

                <div id="product-info-precio">
                </div>

                <div>
                    <img id="product-image" src="" alt="Imagen selcionada" width="200">
                </div>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="{{ asset('js/product-selected.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        <script>
            function agregar() {
                Swal.fire({
                    title: "¡Estas seguro!",
                    text: "¿Deseas agregar este producto en el inventario?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, agregar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "!Producto agregado !",
                            text: "El producto se agrego correctamente en el inventario",
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
