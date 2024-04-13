<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura de Venta - Empresa XYZ</title>
    <style>
        .container {
            /* max-width: 800px; */
            margin: 0 auto;
        }

        .header,
        .footer {
            background-color: #0A0A3C;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header h1 img {
            max-width: 100px;
            margin-right: 20px;
        }

        .content {
            margin-top: 20px;
        }

        .company-info {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .company-info div {
            width: 45%;
        }

        .details {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total-row td {
            border-top: 2px solid #333;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>
                {{-- <img src="{{ asset('images/Logo mobile pdf.png') }}" alt="Descripción de la imagen" /> --}}
                Factura de Venta
            </h1>
        </div>

        <div class="company-info">
            <div>
                <p><strong>JamDAY Shop</strong></p>
                <p>Dirección: Av. Principal, Ciudad springfield</p>
                <p>Teléfono: (+57) 551-4747</p>
                <p>Email: jamday.shop@gmail.com</p>
            </div>
            <div>
                <p><strong>Fecha:</strong> {{ $datosEnvio['fecha'] }}</p>
                <p><strong>Número de Factura:</strong> #123456</p>
            </div>
        </div>

        <div class="content">
            <div class="details">
                <p><strong>Cliente:</strong> {{ Auth::user()->name }}</p>
                <p><strong>Número de Identificación:</strong> {{ Auth::user()->idnumber }}</p>

            </div>

            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio Unitario</th>
                        <th>Talla</th>
                        <th>Cantidad</th>
                        <th>Imparte</th>
                        <th>Total por Producto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detallesCarrito as $producto)
                        <tr>
                            <td class="text-center">{{ $producto->name }}</td>
                            <td class="text-center">{{ number_format($producto->price, 2) }}</td>
                            <td class="text-center">
                                {{ DB::table('tallas')->where('id', $producto->options['talla_id'])->value('tallas') }}
                            </td>
                            <td class="text-center">{{ $producto->qty }}</td>
                            <td class="text-center">{{ number_format($producto->tax, 2) }}
                            <td class="text-center">{{ number_format($producto->total, 2) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    @php
                        $subtotal = $detallesCarrito->sum(function ($producto) {
                            return $producto->qty * $producto->price;
                        });
                        $iva = $detallesCarrito->sum(function ($producto) {
                            return $producto->qty * $producto->price * 0.19;
                        });
                        $total = $subtotal + $iva;

                    @endphp
                    <tr>
                        <td colspan="5">Subtotal</td>
                        <td>{{ number_format($subtotal, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="5">IVA (19%)</td>
                        <td>{{ number_format($iva, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="5">Total</td>
                        <td>{{ number_format($total, 2) }}</td>
                    </tr>
                </tfoot>
            </table>

            <div class="details">
                <p><strong>Detalles de Envío</strong></p>
                <p><strong>Nombre del destinatario:</strong> {{ $datosEnvio['nombre_destinatario'] }}</p>
                <p><strong>Dirección de Envío:</strong>{{ $datosEnvio['direccion'] }}</p>
                <p><strong>Instrucciones para la entrega:</strong>{{ $datosEnvio['instrucciones_entrega'] }}</p>
                <p><strong>Teléfono de Contacto:</strong> {{ $datosEnvio['telefono'] }}</p>
                <p><strong>Método de Pago:</strong> {{ $datosEnvio['metodo_pago'] }}</p>
            </div>

        </div>

        <div class="footer">
            <p>¡Gracias por tu compra!</p>
        </div>
    </div>
</body>

</html>
