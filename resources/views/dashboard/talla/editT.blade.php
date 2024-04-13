@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar talla</title>

        <!-- link para sweetalert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<h2 class="text-center mb-5">Editar Talla</h2>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
    <form id="formulario_editar" method="POST" action="{{ route('tallas.update', ['id' => $talla->id]) }}" novalidate>
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="tallas">Tallas</label>
        <input type="text" name="tallas" class="form-control @error('tallas') is-invalid @enderror" id="tallas" placeholder="m,s,l,xl,30,31,32" value="{{ old('tallas', $talla->tallas) }}">
        @error('tallas')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Editar Talla</button>
        <a href="{{ route('tallas.indexT') }}" class="btn btn-primary">Volver</a>
    </div>
</form>


    </div>
</div>

<script>
    function editar() {
        Swal.fire({
            title: "¡Estas seguro!",
            text: "¿Deseas editar esta talla?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, Editar"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "!Talla Editada!",
                    text: "La talla se edito correctamente",
                    icon: "success"
                });

                // Submit the form after SweetAlert confirmation
                document.getElementById('formulario_editar').submit();
            }
        });
    }
</script>

    
</body>
</html>

@stop
