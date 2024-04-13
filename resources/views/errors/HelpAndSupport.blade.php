@extends('layouts.app')


@section('content')

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Ayuda y Soporte Técnico') }}</div>

                        <div class="card-body">
                            <h2>Ayuda</h2>
                            <p>Si tienes alguna pregunta sobre nuestros productos, puedes consultar nuestras <a
                                    href="/preguntas/frecuentes">Preguntas Frecuentes</a>.</p>

                            <h2>Soporte Técnico</h2>
                            <p>Si tienes problemas con tu cuenta o con una compra, puesdes Chatear con uno
                                de
                                nuestros administradores</a>.
                            </p>

                            @guest
                                <h6> <a href="/login">Inicia sesion </a> para chatear con uno de los asesores</h6>
                            @else
                                lista de asesores
                                <!-- Tu elemento <select> -->
                                <select name="asesores" id="asesores">
                                    @foreach ($lista_asesores as $asesor)
                                        <option value="{{ $asesor->id }}">{{ $asesor->name }}</option>
                                    @endforeach
                                </select>

                                <!-- Botón para enviar la solicitud al JavaScript -->
                                <button onclick="redirectToSelectedChat()">Ir al Chat</button>

                                <!-- JavaScript para redireccionar -->
                                <script>
                                    function redirectToSelectedChat() {
                                        // Obtener el valor seleccionado del <select>
                                        var selectedAsesorId = document.getElementById("asesores").value;

                                        // Construir la URL de redirección
                                        var url = "/chat/with/" + selectedAsesorId;

                                        // Redirigir a la nueva URL
                                        window.location.href = url;
                                    }
                                </script>



                                Salas activas
                                <!-- Tu elemento <select> para salas -->
                                <select name="salas_activas" id="salas_activas">
                                    @foreach ($salas_activas as $sala)
                                        <option value="{{ $sala->chat_id }}">{{ $sala->chat_id }}</option>
                                    @endforeach
                                </select>

                                <!-- Botón para enviar la solicitud al JavaScript -->
                                <button onclick="redirectToSelectedRoom()">Ir a la Sala</button>

                                <!-- JavaScript para redireccionar a la sala seleccionada -->
                                <script>
                                    function redirectToSelectedRoom() {
                                        // Obtener el valor seleccionado del <select> para salas
                                        var selectedRoomId = document.getElementById("salas_activas").value;

                                        // Construir la URL de redirección
                                        var url = "/chat/" + selectedRoomId; // Ajusta la URL según tus necesidades

                                        // Redirigir a la nueva URL
                                        window.location.href = url;
                                    }
                                </script>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

@section('footer')
    @include('home.footer')
@endsection
