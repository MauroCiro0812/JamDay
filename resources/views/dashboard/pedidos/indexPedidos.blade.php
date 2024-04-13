@extends('adminlte::page')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <b>Control de pedidos</b>
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

                                        <th class="text-center">Usuario</th>
                                        <th class="text-center">N° Documento</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Origen</th>
                                        <th class="text-center">Total </th>
                                        <th class="text-center">Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td class="text-center">{{ $pedido->id }}</td>
                                            <td class="text-center">{{ $pedido->user->name }}</td>
                                            <td class="text-center">{{ $pedido->user->idnumber }}</td>
                                            <td class="text-center">{{ $pedido->fechapedido }}</td>
                                            <td class="text-center">{{ $pedido->procedencia }}</td>
                                            <td class="text-center">{{ number_format($pedido->total, 3) }}</td>
                                            <td class="text-center">{{ $pedido->estado }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{ $pedidos->render() }}
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
