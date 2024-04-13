@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <b>Control de colores</b>
                            </span>

                            <div class="float-right">
                                <a href="{{ route('color.createC') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Registrar color') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nombre</th>
                                        <th class="text-center">Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($colores as $color)
                                        <tr>
                                            <td class="text-center">{{ $color->id }}</td>
                                            <td class="text-center">{{ $color->nombre }}</td>
                                            </td>

                                            <td>
                                                <div class="centrar-formulario">
                                                    <form id="formulario_eliminar_{{ $color->id }}"
                                                        action="{{ route('color.destroy', ['id' => $color->id]) }}"
                                                        method="POST">
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('color.editC', ['id' => $color->id]) }}"><i
                                                                class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="eliminar({{ $color->id }})"><i
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
                <div class="card-body">
                    {{ $colores->render() }}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function eliminar(id) {
            event.preventDefault(); // Agrega esta línea para prevenir el comportamiento predeterminado del formulario

            Swal.fire({
                title: "¡Estas seguro!",
                text: "¿Deseas eliminar este color?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, Eliminar"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "!Color eliminado!",
                        text: "El color se eliminó correctamente",
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
@endsection
