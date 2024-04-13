@extends('adminlte::page')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} producto</span>
                        </div>

                        <div class="float-right">

                            @if (Auth::user()->type == 'admin')
                                <a class="btn btn-primary" href="{{ route('productos.indexP') }}"> {{ __('Regresar') }}</a>
                            @elseif(Auth::user()->type == 'manager')
                                <a class="btn btn-primary" href="{{ route('productos.indexP') }}">
                                    {{ __('Regresar') }}</a>
                            @endif

                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>

                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $producto->categoria->nombre }}
                        </div>

                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>

                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $producto->marca->nombre }}
                        </div>

                        <div class="form-group">
                            <strong>Talla:</strong>
                            {{ $producto->talla->tallas }}
                        </div>

                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $producto->descripcion }}
                        </div>

                        <div class="form-group">
                            <strong>sub-categoria:</strong>
                            {{ $producto->sub_categoria->nombre }}
                        </div>

                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $producto->color->nombre }}
                        </div>

                        <div class="form-group">
                            <strong>Foto de perfil:</strong>
                        </div>
                        <div class="form-group">

                            <img src="{{ $producto->foto }}" width="200px">

                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection
