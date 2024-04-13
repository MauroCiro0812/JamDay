@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Preguntas frecuentes') }}</div>

                    <div class="card-body">
                        <h5>¿Cómo puedo actualizar mi información personal en JamDAY?</h5>

                        Puedes actualizar tu información personal iniciando sesión en tu cuenta de JamDAY y accediendo a la
                        sección de configuración de la cuenta. Desde allí, podrás editar y guardar los cambios necesarios en
                        tu información personal.

                        <hr>

                        <h5>¿Qué medidas de seguridad implementa JamDAY para proteger mi información personal?</h5>

                        JamDAY implementa medidas de seguridad electrónicas y administrativas para proteger tu
                        información personal contra el acceso no autorizado, el uso indebido o la divulgación. Estas medidas
                        incluyen encriptación de datos, firewalls, controles de acceso y políticas de privacidad.

                        <hr>

                        <h5>¿Cómo puedo cancelar la suscripción a los correos electrónicos de promociones y ofertas?</h5>

                        Puedes cancelar la suscripción a los correos electrónicos de promociones y ofertas de JamDAY
                        utilizando el enlace de cancelación de suscripción que se proporciona en cada correo
                        electrónico.
                        También puedes gestionar tus preferencias de correo electrónico iniciando sesión en tu cuenta de
                        JamDAY y modificando la configuración de notificaciones.

                        <hr>

                        </h5>¿Qué debo hacer si no estoy de acuerdo con alguna modificación en los términos y condiciones?
                        </h5>

                        Si no estás de acuerdo con alguna modificación en los términos y condiciones de JamDAY, puedes optar
                        por dejar de utilizar el sitio web. Sin embargo, ten en cuenta que el uso continuado del sitio web
                        después de la modificación constituirá la aceptación de los nuevos términos y condiciones.

                        <hr>

                        <h5>¿Cómo puedo ejercer mis derechos de acceso, rectificación, cancelación u oposición sobre mis
                            datos
                            personales?</h5>

                        Puedes ejercer tus derechos de acceso, rectificación, cancelación u oposición sobre tus datos
                        personales contactando al equipo de atención al cliente de JamDAY a través del formulario de
                        contacto en el sitio web o enviando un correo electrónico a la dirección proporcionada en la sección
                        de contacto.

                        <hr>

                        <h5>¿Qué pasa si soy menor de edad pero quiero realizar una compra en JamDAY?</h5>

                        JamDAY no vende productos a menores de edad. Si eres menor de edad y deseas realizar una compra en
                        JamDAY, deberás obtener el consentimiento y la supervisión de tus padres o tutores legales.

                        <hr>

                        <h5>¿Cuál es el proceso de arbitraje en caso de disputas según los términos y condiciones?</h5>

                        En caso de disputas que surjan de los términos y condiciones de JamDAY, se seguirá el proceso de
                        arbitraje de acuerdo con las normas de la Cámara de Comercio de Bogotá, conforme a lo establecido en
                        los términos y condiciones.

                        <hr>

                        <h5>¿Cómo puedo obtener consentimiento expreso para reproducir contenido propiedad de JamDAY?</h5>

                        Para obtener consentimiento expreso para reproducir contenido propiedad de JamDAY, debes contactar
                        al equipo legal de JamDAY a través del formulario de contacto en el sitio web o enviando un correo
                        electrónico a la dirección proporcionada en la sección de contacto.

                        <hr>

                        <h5>¿Qué debo hacer si encuentro un enlace roto o inactivo en el sitio web de JamDAY?</h5>

                        Si encuentras un enlace roto o inactivo en el sitio web de JamDAY, te agradeceríamos que nos lo
                        notifiques para que podamos corregirlo. Puedes informarnos sobre el enlace roto utilizando el
                        formulario de contacto en el sitio web o enviando un correo electrónico a la dirección proporcionada
                        en la sección de contacto.

                        <hr>

                        <h5>¿Cuál es el proceso para solicitar la limitación del tratamiento o la portabilidad de mis datos
                            personales?</h5>

                        Para solicitar la limitación del tratamiento o la portabilidad de tus datos personales, puedes
                        contactar al equipo de atención al cliente de JamDAY a través del formulario de contacto en el sitio
                        web o enviando un correo electrónico a la dirección proporcionada en la sección de contacto. Un
                        representante de JamDAY te guiará a través del proceso correspondiente

                        <hr>

                        <a href="{{ url('/welcome') }}" class="btn btn-primary">Volver al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('home.footer')
@endsection
