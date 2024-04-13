@extends('layouts.app')

@section('content')

    @if (count(Cart::content()))
        <div class="col-sm-3">
            <p class="text-center">Resumen carrito</p>
            <table class="table table-striped">
                <tbody>
                    @foreach (Cart::content() as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->qty }} x {{ $producto->precio }}</td>
                            <td>{{ number_format($producto->qty * $producto->price, 2) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">
                            <p class="text-end m-0 p-0">Subtotal {{ Cart::subtotal() }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p class="text-end m-0 p-0">Impuesto 19% {{ Cart::tax() }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p class="text-end m-0 p-0">Total {{ Cart::total() }}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="text-center"><a href="/vercarrito" class="btn btn-outline-success btn-sm">Ver carrito</a></p>
        </div>
    @endif

@endsection
