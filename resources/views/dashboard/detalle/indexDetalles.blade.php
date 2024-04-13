@extends('adminlte::page')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <b>Control de detalles de pedido</b>
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">N° Pedido</th>
                                        <th class="text-center">N° Producto</th>
                                        <th class="text-center">Precio producto</th>
                                        <th class="text-center">Cantidad</th>
                                        <th class="text-center">Importe</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalles as $detalle)
                                        <tr>
                                            <td class="text-center">{{ $detalle->id }}</td>
                                            <td class="text-center">{{ $detalle->pedido_id }}</td>
                                            <td class="text-center">{{ $detalle->producto_id }}</td>
                                            <td class="text-center">{{ number_format($detalle->precio) }}</td>
                                            <td class="text-center">{{ $detalle->cantidad }}</td>
                                            <td class="text-center">{{ number_format($detalle->importe) }}</td>
                                            <td class="text-center">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{ $detalles->render() }}
                </div>
            </div>
        </div>
    </div>

    <style>
        .centrar-formulario {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>


@stop
