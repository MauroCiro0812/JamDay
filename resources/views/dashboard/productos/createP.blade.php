@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">{{ __('Crear producto') }} </span>
                        </div>

                        <div class="card-body">

                            <div class="row justify-content-center mt-5">
                                <div class="col-md-8">
                                    <form id="formulario_crear" method="POST" action="{{ route('productos.store') }}"
                                        novalidate enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" name="nombre"
                                                class="form-control  @error('') is-invalid  @enderror" id="nombre"
                                                placeholder="" value="{{ old('nombre') }}">

                                            @error('nombre')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="nombre">categoria</label>
                                            <input type="text" name="id_categoria"
                                                class="form-control  @error('id_categoria') is-invalid  @enderror"
                                                id="id_categoria" placeholder="1:Hombre. 2:Mujer"
                                                value="{{ old('id_categoria') }}">

                                            @error('id_categoria')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="id_sub_categoria">Sub_categoria</label>
                                            <select name="id_sub_categoria" id="id_sub_categoria"
                                                class="form-control @error('id_sub_categoria') is-invalid  @enderror">
                                                <option selected disabled>Seleccione una opción</option>
                                                @foreach ($sub_categoria as $id => $nombre)
                                                    <option value="{{ $id }}"
                                                        {{ old('id_sub_categoria') == $id ? 'selected' : '' }}>
                                                        {{ $nombre }} </option>
                                                @endforeach
                                            </select>

                                            @error('id_sub_categoria')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="id_color">marca</label>
                                            <select name="id_marca" id="id_color"
                                                class="form-control @error('id_marca') is-invalid  @enderror">
                                                <option selected disabled>Seleccione una opción</option>
                                                @foreach ($marcas as $id => $nombre)
                                                    <option value="{{ $id }}"
                                                        {{ old('id_marca') == $id ? 'selected' : '' }}>
                                                        {{ $nombre }} </option>
                                                @endforeach
                                            </select>

                                            @error('id_color')
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
                                                    <option value="{{ $id }}"
                                                        {{ old('id_talla') == $id ? 'selected' : '' }}>
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
                                            <label for="id_color">Colores</label>
                                            <select name="id_color" id="id_color"
                                                class="form-control @error('id_color') is-invalid  @enderror">
                                                <option selected disabled>Seleccione una opción</option>
                                                @foreach ($colores as $id => $nombre)
                                                    <option value="{{ $id }}"
                                                        {{ old('id_color') == $id ? 'selected' : '' }}>
                                                        {{ $nombre }} </option>
                                                @endforeach
                                            </select>

                                            @error('id_color')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="nombre">Precio</label>
                                            <input type="text" name="precio"
                                                class="form-control  @error('precio') is-invalid  @enderror" id="precio"
                                                placeholder="75.000" value="{{ old('precio') }}">

                                            @error('precio')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="descripcion">Descripcion</label>
                                            <input type="text" name="descripcion"
                                                class="form-control  @error('descripcion') is-invalid  @enderror"
                                                id="descripcion" placeholder="camisa..." value="{{ old('descripcion') }}">

                                            @error('descripcion')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="foto">Imagen</label>
                                            <input type="file" name="foto"
                                                class="form-control  @error('foto') is-invalid  @enderror" id="foto"
                                                value="{{ old('foto') }}">

                                            @error('foto')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="button" class="btn btn-primary" value="agregar producto"
                                                onclick="agregar()">
                                            <a href="{{ route('productos.indexP') }}" class="btn btn-primary ">Volver</a>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </section>

        <script>
            function agregar() {
                Swal.fire({
                    title: "¡Estas seguro!",
                    text: "¿Deseas agregar este producto?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, agregar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "!Producto agregado!",
                            text: "El producto se agrego correctamente",
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
@endsection
