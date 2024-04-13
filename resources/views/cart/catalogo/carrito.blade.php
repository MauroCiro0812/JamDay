@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 ">
                @include('cart.front.partials.mensaje')
                <h1 class="text-center fs-4 p-3">Carrito</h1>

                @if (Cart::content()->count())
                    <table class="table table-striped">
                    <thead>
                        <th class="text-center">Imagen</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Talla</th> 
                        <th class="text-center">Cantidad</th>
                        <th class="text-center">Importe</th>
                        <th class="text-center">Acción</th>
                    </thead>
                    <tbody>
                    @foreach (Cart::content() as $producto)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ $producto->options['image'] }}" alt="imagen no disponible" width="100">
                                </td>
                                <td class="text-center">{{ $producto->name }}</td>
                                <td class="text-center">{{ number_format($producto->price, 0) }}</td>
                                <td class="text-center">{{ DB::table('tallas')->where('id', $producto->options['talla_id'])->value('tallas') }}</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm" role="group" aria-label="small button group">
                                            <a href="{{ route('decrementarCantidad', ['id' => $producto->rowId]) }}"
                                                class="btn btn-success efecto">-</a>

                                            <button type="button" class="btn">{{ $producto->qty }}</button>

                                            <a href="{{ route('incrementarCantidad', ['id' => $producto->rowId]) }}"
                                                class="btn btn-success efecto">+</a>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ number_format($producto->qty * $producto->price, 0) }}</td>
                                    <td class="text-center">
                                    <a href="{{ route('eliminaritem', ['id' => $producto->rowId]) }}" class="btn btn-sm text-danger">
                                        <i class="fa fa-trash fa-lg hover-scale"></i>
                                    </a>
                                    </td>

                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="6">
                                    <p class="text-end m-0 p-0">Subtotal: {{ Cart::subtotal() }}</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p class="text-end m-0 p-0">Impuesto 19% : {{ Cart::tax() }}</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p class="text-end m-0 p-0">Total: {{ Cart::total() }}</p>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row justify-content-center mt-5 mb-5 text-center">

                        <div class="col-sm-4">
                            <a href="{{ route('eliminarCarrito') }}" class="btn btn-danger efecto-botones">Vaciar carrito</a>
                        </div>

                        <div class="col-sm-4">
                            <a href="{{ route('seguircomprando') }}" class="btn btn-primary efecto-botones">Seguir Comprando</a>
                        </div>

                        @if(session('error'))
                        <script>
                            alert("{{ session('error') }}");
                        </script>
                        @endif

                        <div class="col-sm-4">
                            @auth
                                <a href="{{ route('detallesFactura') }}" class="btn btn-success efecto-botones">Procesar Pedido</a>
                                
                            @else
                                <a href="/login" class="btn btn-danger efecto-botones">Regístrate primero</a>
                            @endauth
                        </div>

                    </div>
                @else
                    <p class="text-center">Carrito vacio</p>
                @endif
            </div>
        </div>
    </div>
   
    
<style>
    .hover-scale:hover {
        transform: scale(1.3); 
        transition: transform 0.5s ease; 
    }
    .efecto:hover{
        transform: scale(1.2); 
        transition: transform 0.5s ease;
    }
    .efecto-botones{
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8)
    
    }
    .efecto-botones:hover{
        transform: scale(1.2); 
        transition: transform 0.5s ease;
    }
</style>
@include('home.footer') 
@endsection
