@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                @include('cart.front.partials.mensaje')
                <h1 class="text-center fs-4 p-3">Detalles de compra</h1>

                @if (Cart::content()->count())
                    <table class="table table-striped">
                        <thead>
                            <th class="text-center">Imagen</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Talla</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Importe</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $producto)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ $producto->options['image'] }}" alt="imagen no disponible"
                                            width="100">
                                    </td>
                                    <td class="text-center">{{ $producto->name }}</td>
                                    <td class="text-center">{{ number_format($producto->price, 0) }}</td>
                                    <td class="text-center">
                                        {{ DB::table('tallas')->where('id', $producto->options['talla_id'])->value('tallas') }}
                                    </td>
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
                                    <td></td>
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

                    <div class="container mt-5">
                        <h1 class="text-center fs-4 p-3">Detalles de envío</h1>
                        <form method="get" action="{{ route('confirmarCarrito') }}" id="formularioEnvio">
                            @csrf
                            <div class="form-group">
                                <label for="nombre_destinatario">Nombre del destinatario:</label>
                                <input type="text" class="form-control" id="nombre_destinatario"
                                    name="nombre_destinatario" placeholder="Ingresa el nombre del destinatario">
                                <br>
                                <label for="nombre_destinatario">Fecha:</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" readonly>
                                <br>
                                <label for="direccion">Dirección:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion">
                                <br>
                                <label for="instrucciones_entrega">Instrucciones para la entrega:</label>
                                <textarea class="form-control" id="instrucciones_entrega" name="instrucciones_entrega"
                                    placeholder="Dejar en recepcion o en la puerta"></textarea>
                                <br>
                                <label for="telefono">Telefono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono"
                                    placeholder="999-999-9999">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="metodo_pago">Método de Pago:</label>
                                <select class="form-control" id="metodo_pago" name="metodo_pago">
                                    <option>Seleccione una opción</option>
                                    <option value="contraentrega">Contra Entrega</option>
                                    <option value="debito">Débito</option>
                                    <option value="credito">Crédito</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                            </div>

                            <!-- contraentrega -->
                            <div class="form-group camposAdicionales" id="contraentrega" style="display: none;">
                                <label for="infocontraentrega">Pago contra entrega:</label>
                                <p>realiza el pago cuando recibas tu pedido.</p>
                            </div>


                            <!-- debito -->
                            <div class="form-group camposAdicionales" id="debito" style="display: none;">
                                <label for="infoCredito">Numero de tarjeta:</label>
                                <input type="number" class="form-control" id="infoCredito"
                                    placeholder="1234-5678-9101-1213">

                                <br>

                                <label for="infoCredito">Fecha de vencimiento:</label>
                                <input type="date" class="form-control" id="infoCredito">

                                <br>

                                <label for="infoCredito">Codigo de verificacion de tarjeta(CVV):</label>
                                <input type="number" class="form-control" id="infoCredito" placeholder="881">
                            </div>

                            <!-- credito -->
                            <div class="form-group camposAdicionales" id="credito" style="display: none;">
                                <label for="infoCredito">Numero de tarjeta:</label>
                                <input type="number" class="form-control" id="infoCredito"
                                    placeholder="1234-5678-9101-1213">

                                <br>

                                <label for="infoCredito">Fecha de vencimiento:</label>
                                <input type="date" class="form-control" id="infoCredito">

                                <br>

                                <label for="infoCredito">Codigo de verificacion de tarjeta(CVV):</label>
                                <input type="number" class="form-control" id="infoCredito" placeholder="881">
                            </div>

                            <!-- paypal -->
                            <div class="form-group camposAdicionales" id="paypal" style="display: none;">
                                <label for="infoPaypal">Correo electronico de paypal:</label>
                                <input type="text" class="form-control" id="infoPaypal"
                                    placeholder="Ingresa tu correo de paypal">
                            </div>

                            <div class="row justify-content-center mt-5 mb-5 text-center">
                                <div class="col-sm-4">
                                    <a href="/welcome" class="btn btn-primary efecto-botones">Regresar al inicio</a>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-success efecto-botones"
                                        onclick="validarEnvio()">Comprar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="row justify-content-center mt-5 mb-5 text-center">
                        <div class="col-sm-4">
                            <a href="/generar/pdf" class="btn btn-success efecto-botones">Descargar factura</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/welcome" class="btn btn-primary efecto-botones">Regresar al inicio</a>
                        </div>
                    </div>
                    <p class="text-center">Carrito vacio</p>
                @endif
            </div>
        </div>
    </div>
    @include('home.footer')


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#metodo_pago").change(function() {
                // Oculta todos los campos adicionales
                $(".camposAdicionales").hide();

                // Muestra el campo adicional correspondiente al método de pago seleccionado
                var metodo_seleccionado = $(this).val();
                $("#" + metodo_seleccionado).show();
            });
        });

        function validarEnvio() {
        // Obtén los valores de los campos de envío
        var nombreDestinatario = $("#nombre_destinatario").val();
        var direccion = $("#direccion").val();
        var instruccionesEntrega = $("#instrucciones_entrega").val();
        var telefono = $("#telefono").val();
        var metodoPago = $("#metodo_pago").val();

        // Realiza la validación
        if ( nombreDestinatario.trim() === '' || direccion.trim() === '' || instruccionesEntrega.trim() === '' ||telefono.trim() === '' || metodoPago === 'Seleccione una opción') {
            Swal.fire({
                title: 'Error',
                text: 'Por favor, completa todos los campos de envío.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
            return false; // Evita que se envíe el formulario
        }

        if (!nombreDestinatario.match(/^[a-zA-Z\s]+$/)) {
                Swal.fire({
                    title: 'Error',
                    text: 'Por favor, ingresa un nombre de destinatario válido.',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
                return false;

        }else if (!direccion.match(/^.{10,}$/)) {
                Swal.fire({
                    title: 'Error',
                    text: 'Ingresa direccion válida de al menos 10 caracteres.',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });            
                return false;
        }else if (!instruccionesEntrega.match(/^.{10,}$/)) {
                Swal.fire({
                    title: 'Error',
                    text: 'Ingresa instrucciones válida de al menos 10 caracteres.',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });            
                return false;
        }
        // Si todos los campos están llenos, procede con la compra
        mostrarConfirmacion();
    }

    function mostrarConfirmacion() {
        // Utiliza SweetAlert2 para mostrar la ventana emergente
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success swal-btn',
                cancelButton: 'btn btn-danger swal-btn'
            },
            buttonsStyling: false
        });

        swalWithBootstrapButtons.fire({
            title: "¿Estás seguro de adquirir este producto?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, Comprar!",
            cancelButtonText: "No, cancelar",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Si se confirma la compra, haz submit del formulario
                document.getElementById("formularioEnvio").submit();

                // Muestra el mensaje de éxito después de confirmar la compra
                swalWithBootstrapButtons.fire({
                    title: "¡Producto comprado con éxito!",
                    text: "Gracias por comprar en JamDay",
                    icon: "success"
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // Si se cancela la compra, muestra un mensaje de cancelación
                swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    icon: "error"
                });
            }
        });
    }
    </script>

    <script>
        window.onload = function() {
            var fecha = new Date();
            var dia = fecha.getDate();
            var mes = fecha.getMonth() + 1; // Los meses en JavaScript comienzan desde 0
            var ano = fecha.getFullYear();

            if (dia < 10) {
                dia = '0' + dia;
            }

            if (mes < 10) {
                mes = '0' + mes;
            }

            fecha = ano + '-' + mes + '-' + dia;

            document.getElementById('fecha').value = fecha;
        }
    </script>

    <style>
        .efecto:hover {
            transform: scale(1.2);
            transition: transform 0.5s ease;
        }

        .efecto-botones {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8)
        }

        .efecto-botones:hover {
            transform: scale(1.2);
            transition: transform 0.5s ease;
        }
    </style>


@endsection
