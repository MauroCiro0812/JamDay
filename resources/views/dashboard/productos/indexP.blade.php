@extends('adminlte::page')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap4.css">


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <b> Control de productos </b>
                            </span>

                            <div class="float-right">
                                <a href="{{ route('productos.createP') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Registrar producto') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id= "productos_search">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-center">No</th>

                                        <th class="text-center">Nombre</th>
                                        <th class="text-center">Foto</th>
                                        <th class="text-center">Categoria </th>
                                        <th class="text-center">Sub Categoria</th>
                                        <th class="text-center">Color</th>
                                        <th class="text-center">Precio</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td class="text-center">{{ $producto->id }}</td>

                                            <td class="text-center">{{ $producto->nombre }}</td>
                                            <td class="text-center">
                                                @if (filter_var($producto->foto, FILTER_VALIDATE_URL))
                                                    <img src="{{ $producto->foto }}" alt="Foto del producto" width="100">
                                                @else
                                                    <img src="{{ Storage::disk('s3')->url($producto->foto) }}"
                                                        alt="Foto del producto" width="100">
                                                @endif
                                            </td class="text-center">
                                            <td class="text-center">{{ $producto->categoria->nombre }}</td>
                                            <td class="text-center">{{ $producto->categoria->nombre }}</td>
                                            <td class="text-center">{{ $producto->color->nombre }}</td>
                                            <td class="text-center">{{ number_format($producto->precio) }}</td>

                                            <td>
                                                <div class="centrar-formulario">
                                                    <form id="formulario_eliminar_{{ $producto->id }}"
                                                        action="{{ route('productos.destroy', ['id' => $producto->id]) }}"
                                                        method="POST">
                                                        <a class="btn btn-sm btn-primary "
                                                            href="{{ route('productos.show', ['id' => $producto->id]) }}"><i
                                                                class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('productos.editP', ['id' => $producto->id]) }}"><i
                                                                class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="eliminar({{ $producto->id }})"><i
                                                                class="fa fa-fw fa-trash"></i>
                                                            {{ __('Eliminar') }}</button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-body">
                    {{ $productos->render() }}
                </div> --}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function eliminar(id) {
            event.preventDefault(); // Agrega esta línea para prevenir el comportamiento predeterminado del formulario

            Swal.fire({
                title: "¡Estas seguro!",
                text: "¿Deseas eliminar este producto?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, Eliminar"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "!Producto eliminado!",
                        text: "El producto se eliminó correctamente",
                        icon: "success"
                    });

                    var formId = 'formulario_eliminar_' + id;

                    // Envía el formulario
                    document.getElementById(formId).submit();
                }
            });
        }
    </script>

    <style>
        .centrar-formulario {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap4.js"></script>
    <script>
        $('#productos_search').DataTable({

            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - disculpa",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de  _MAX_ registros totales)",
                "search": "Buscar:",
            }

        });
    </script>
@endsection
