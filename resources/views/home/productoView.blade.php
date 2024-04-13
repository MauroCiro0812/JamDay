@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/profile-card.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Información de producto') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between;">
                                <div class="card-body">

                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <div class="container-profile">
                                        <article class="card-image">
                                            <div class="background">
                                                <img src="{{ $producto->foto }}">
                                            </div>
                                            <div class="content">
                                                <h2>{{ $producto->nombre }}</h2>
                                                <div id="rating_avg" class="my-3"> <strong>Valoración: :</strong>
                                                    @for ($i = 0; $i < $rating_avg; $i++)
                                                        <i class="fas fa-star text-warning"></i>
                                                    @endfor
                                                    @for ($i = $rating_avg; $i < 5; $i++)
                                                        <i class="far fa-star text-warning"></i>
                                                    @endfor
                                                </div>
                                                <ul class="chips"style="display: flex; align-items: center;">
                                                    <h6> <strong>Categoria:</strong>{{ $producto->categoria->nombre }}</h6>
                                                    <h6> <strong>Marca:</strong> {{ $producto->marca->nombre }} </h6>
                                                    <h6> <strong>Color: </strong>{{ $producto->color->nombre }}</h6>
                                                </ul>

                                                <div class="form-group">
                                                    <strong>Descripción:</strong>
                                                    {{ $producto->descripcion }}
                                                </div>
                                                <div class="form-group">
                                                    <strong>Cantidad en stock:</strong>
                                                    {{ $cantidadTotal }} unidades
                                                </div>
                                                <div>
                                                    <!-- Crea una lista desplegable para las tallas -->
                                                    <select id="selectTallas" name="talla" onchange="updateTalla(this);"
                                                        required>
                                                        <option value="" disabled selected>Selecciona una talla
                                                        </option>
                                                        @foreach ($tallasNombres as $id_talla => $talla)
                                                            @if ($tallas->contains('id_talla', $id_talla))
                                                                <option
                                                                    value="/producto/{{ $producto->id }}/{{ $id_talla }}">
                                                                    {{ $talla }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                        <option value="/producto/{{ $producto->id }}/limpiar">Limpiar
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <ul class="chips"style="display: flex; align-items: center;">
                                                        <strong>Cantidad en stock de la talla:</strong>
                                                        <div id="cantidadEnStock">Seleccione una talla</div>
                                                    </ul>
                                                </div>

                                                <div class="action-buttons">
                                                    <a> Precio: {{ number_format($producto->precio, 0) }} </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <script>
                                document.getElementById('selectTallas').addEventListener('change', function() {
                                    var id_producto = {{ $producto->id }};
                                    var id_talla = this.value;

                                    fetch(id_talla)
                                        .then(response => response.json())
                                        .then(data => {
                                            document.getElementById('cantidadEnStock').textContent = data.cantidad;
                                        });
                                });
                            </script>

                        </div>
                    </div>

                    <hr>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <form action="{{ route('seguircomprando') }}" method="get">
                                    <button type="submit" class="btn btn-primary w-100">Seguir comprando</button>
                                </form>
                            </div>

                            <div class="col-md-6 mb-3">
                                <form action="{{ route('agregaritem') }}" method="post" id="agregarItemForm">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                    <input type="hidden" name="talla_id" id="talla_id_input" value="">
                                    <input type="hidden" name="nombre" value="{{ $producto->nombre }}">
                                    <input type="hidden" name="precio" value="{{ $producto->precio }}">


                                    @if (is_object($inventario) && $inventario->cantidad > 0)
                                        <button type="button" class="btn btn-success w-100"
                                            onclick="agregarAlCarrito()">Agregar al carrito</button>
                                    @else
                                        <button type="button" class="btn btn-secondary w-100" disabled>Agregar al
                                            carrito</button>
                                        <p class="text-muted text-center">Producto agotado</p>
                                    @endif
                                </form>

                            </div>

                            <div>
                                <hr>
                                @include('home.calificacionProucto')
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                @if (count(Cart::content()))
                    <div class="col-sm-15">
                        <h5 class="text-center">Resumen carrito</h5>
                        <table class="table table-striped">
                            <tbody>
                                @foreach (Cart::content() as $producto)
                                    <tr>
                                        <td>{{ $producto->name }}</td>
                                        <td class="text-center">
                                            {{ DB::table('tallas')->where('id', $producto->options['talla_id'])->value('tallas') }}
                                        </td>
                                        <td>{{ $producto->qty }} x {{ $producto->price }}</td>
                                        <td>{{ number_format($producto->qty * $producto->price, 0) }}</td>
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
                        <p class="text-center"><a href="{{ route('carrito.index') }}"
                                class="btn btn-outline-info btn-sm">Ver carrito</a></p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function updateTalla(select) {
            var selectedValue = select.value;

            // Extraer solo el número de la talla
            var tallaNumero = selectedValue.split('/').pop();

            // Asignar el valor al campo oculto utilizando el nuevo id
            document.getElementById('talla_id_input').value = tallaNumero;
        }

        function agregarAlCarrito() {
            // Obtener los valores antes de enviar el formulario
            var metodoPago = $("#metodo_pago").val();
            var tallaSeleccionada = $("#selectTallas").val();

            // Realiza la validación
            if (tallaSeleccionada === null || tallaSeleccionada === '') {
                // Muestra una alerta si el método de pago no está seleccionado
                Swal.fire({
                    title: 'Error',
                    text: 'Por favor, selecciona un talla ',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
                return false; // Evita que se envíe el formulario
            }

            // Cambiar el id del formulario y enviarlo después de la validación
            document.getElementById('agregarItemForm').submit();

            // Mostrar SweetAlert después de enviar el formulario
            Swal.fire({
                icon: 'success',
                title: 'El producto se agregó correctamente al carrito',
                showConfirmButton: false,
                timer: 1600 // 1.6 segundos
            });

            // Permitir el envío del formulario después de mostrar el mensaje de éxito
            return true;
        }
    </script>

@endsection

@section('footer')
    @include('home.footer')
@endsection
