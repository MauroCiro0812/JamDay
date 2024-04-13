@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('js/password-toggle.js') }}"></script>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end"></label>
                                <div class="col-md-6">
                                    <button class="btn btn-primary w-100" onclick="window.location.href='/login-google'">
                                        <i class="bi bi-google"></i> Registrarse con Google
                                    </button>
                                </div>
                            </div>

                            <hr>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="surname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                        class="form-control @error('surname') is-invalid @enderror" name="surname"
                                        value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="typecard"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tipo de documento') }}</label>

                                <div class="col-md-6">

                                    <select class="form-select @error('typeid') is-invalid @enderror"
                                        aria-label="Default select example" id="typeid" name="typeid" required>
                                        <option selected disabled>Tipos de documento</option>
                                        <option value="T.I">Tarjeta de identidad</option>
                                        <option value="C.C">Cédula de ciudadania</option>
                                        <option value="C.E">Cédula de extranjeria</option>
                                        <option value="PPT">Pasaporte</option>
                                        <option value="NIT">NIT</option>
                                    </select>

                                    @error('typeid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="idnumber"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Número de documento') }}</label>

                                <div class="col-md-6">
                                    <input id="idnumber" type="text"
                                        class="form-control @error('idnumber') is-invalid @enderror" name="idnumber"
                                        value="{{ old('idnumber') }}" required autocomplete="idnumber" autofocus>

                                    @error('idnumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="bi bi-eye" id="togglePassword1"></i>
                                            </span>
                                        </div>
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="bi bi-eye" id="togglePassword2"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end"> </label>
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Terminos y condiciones
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Términos y
                                                            Condiciones
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <h5><b>JamDAY</b> te da la bienvenida a su tienda online. Al acceder
                                                            y
                                                            utilizar nuestro
                                                            sitio web, aceptas los siguientes términos y condiciones:</h5>

                                                        <hr>

                                                        <h6>1. Información personal:</h6>

                                                        Al registrarte en JamDAY, nos autorizas a recopilar y utilizar tu
                                                        información
                                                        personal, como nombre, dirección, correo electrónico y número de
                                                        teléfono. Esta
                                                        información se utilizará para procesar tus pedidos, enviarte
                                                        información
                                                        sobre
                                                        ofertas y promociones, y mejorar tu experiencia de compra.

                                                        <hr>

                                                        <h6>2. Seguridad de la información:</h6>

                                                        JamDAY se compromete a proteger la seguridad de tu información
                                                        personal.
                                                        Utilizamos medidas de seguridad físicas, electrónicas y
                                                        administrativas
                                                        para
                                                        proteger tus datos contra el acceso no autorizado, el uso indebido o
                                                        la
                                                        divulgación.

                                                        <hr>

                                                        <h6> 3. Cookies y Local Storage:</h6>

                                                        JamDAY utiliza cookies y local storage para mejorar tu experiencia
                                                        de
                                                        compra.
                                                        Las cookies son pequeños archivos de texto que se almacenan en tu
                                                        navegador y
                                                        nos permiten recordar tus preferencias y configuración. El local
                                                        storage
                                                        nos
                                                        permite almacenar datos localmente en tu dispositivo para mejorar el
                                                        rendimiento
                                                        y la velocidad de carga.

                                                        <hr>

                                                        <h6> 4. Marketing y comunicaciones:</h6>

                                                        Al aceptar estos términos, aceptas recibir correos electrónicos de
                                                        JamDAY con
                                                        información sobre ofertas, promociones y nuevos productos. Puedes
                                                        cancelar tu
                                                        suscripción a estas comunicaciones en cualquier momento.

                                                        <hr>

                                                        <h6> 5. Modificaciones a los términos y condiciones:</h6>

                                                        JamDAY se reserva el derecho de modificar estos términos y
                                                        condiciones
                                                        en
                                                        cualquier momento. Te notificaremos de cualquier cambio importante
                                                        por
                                                        correo
                                                        electrónico o mediante un anuncio en nuestro sitio web.

                                                        <hr>

                                                        <h6> 6. Aceptación:</h6>

                                                        Al utilizar el sitio web de JamDAY, aceptas los términos y
                                                        condiciones
                                                        mencionados anteriormente. Si no estás de acuerdo con estos
                                                        términos, no
                                                        debes
                                                        utilizar nuestro sitio web.

                                                        <hr>

                                                        <h6> 7. Otros:</h6>

                                                        Estos términos y condiciones se rigen por las leyes de Colombia.
                                                        Cualquier
                                                        disputa que surja de estos términos se resolverá mediante arbitraje
                                                        de
                                                        acuerdo
                                                        con las normas de la Cámara de Comercio de Bogotá.

                                                        <hr>

                                                        <h6> 8. Consentimiento:</h6>

                                                        Al registrarte en JamDAY, declaras que has leído y comprendido estos
                                                        términos y
                                                        condiciones y que otorgas tu consentimiento libre e informado para
                                                        el
                                                        tratamiento de tu información personal.

                                                        <hr>

                                                        <h6> 9. Derechos:</h6>

                                                        Tienes derecho a acceder, rectificar, cancelar y oponerte al
                                                        tratamiento
                                                        de tu
                                                        información personal. También puedes solicitar la limitación del
                                                        tratamiento o
                                                        la portabilidad de tus datos. Para ejercer cualquiera de estos
                                                        derechos,
                                                        puedes
                                                        contactarnos a través de nuestro sitio web o por correo electrónico.

                                                        <hr>

                                                        <h6> 10. Menores de edad:</h6>

                                                        JamDAY no vende productos a menores de edad. Si eres menor de edad,
                                                        no
                                                        debes
                                                        utilizar nuestro sitio web.

                                                        <hr>

                                                        <h6> 11. Propiedad intelectual:</h6>

                                                        El contenido de este sitio web, incluyendo textos, imágenes, marcas
                                                        comerciales
                                                        y logotipos, es propiedad de JamDAY. No puedes copiar, distribuir o
                                                        reproducir
                                                        este contenido sin nuestro consentimiento expreso.
                                                        <hr>

                                                        <h6> 12. Enlaces a otros sitios web:</h6>

                                                        Este sitio web puede contener enlaces a otros sitios web. JamDAY no
                                                        es
                                                        responsable del contenido de estos sitios web ni de las prácticas de
                                                        privacidad
                                                        que estos sitios web puedan tener.

                                                        <hr>

                                                        <h6> 13. Jurisdicción:</h6>


                                                        Estos términos y condiciones se rigen por las leyes de Colombia.
                                                        Cualquier
                                                        disputa que surja de estos términos se resolverá mediante arbitraje
                                                        de
                                                        acuerdo
                                                        con las normas de la Cámara de Comercio de Bogotá.

                                                        Al aceptar estos términos y condiciones, declaras que has leído y
                                                        comprendido
                                                        todas las disposiciones contenidas en este documento y que estás de
                                                        acuerdo con
                                                        ellas.

                                                        <hr>

                                                        <h5> ¡Gracias por elegir JamDAY!</h5>



                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Regresar
                                                        </button>
                                                        <button type="button" class="btn btn-primary terminos"
                                                            data-bs-dismiss="modal">Aceptar
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label> <b>Aceptar</b> términos y condiciones para poder
                                        registrarse</label>
                                </div>

                            </div>

                            <hr>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">

                                    <button type="submit" class="btn btn-primary register">
                                        {{ __('Register') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Inicialmente deshabilita el botón de registro
            var registerButton = $("button[type='submit']");
            registerButton.prop("disabled", true);

            // Añade un tooltip al botón de registro
            registerButton.attr("title", "Aceptar términos");
            registerButton.tooltip();

            // Habilita el botón de registro cuando se hace clic en "Aceptar"
            $(".btn.btn-primary").click(function() {
                registerButton.prop("disabled", false);
                registerButton.tooltip('dispose'); // Elimina el tooltip
            });
        });
    </script>

    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
                myInput.focus()
            }) <
            />


        @include('home.footer')
    @endsection
