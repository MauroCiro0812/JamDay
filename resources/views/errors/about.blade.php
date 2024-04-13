@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Acerca de ') }}</div>

                    <div class="card-body">
                        <p>El sistema de gestión de tienda para la marca de ropa JamDAY es el resultado del desafío de
                            compras propuesto por Intersoftaware a través de
                            Digital School. El reto se planteó con la premisa de ayudar a una empresa emergente llamada
                            JamDAY Clothing for Everyday, ubicada
                            en Colombia y especializada en la venta de productos a través de internet,
                            a expandir su negocio y fortalecer su canal de venta digital. El objetivo
                            principal era la construcci ́on de un portal transaccional que permitiera la
                            venta de camisetas de moda para adultos.
                        </p>
                        <p>
                            Para abordar este desafío, se propuso el desarrollo de una aplicaci ́on web
                            responsive que pudiera satisfacer las necesidades de expansión de JamDAY. Se identificaron 13
                            historias de usuario que se enfocaron en mejorar las funcionalidades tanto para los
                            administradores como para los
                            compradores. El proceso de desarrollo se llevó a cabo bajo la dirección
                            de tutorías y mentorías, con un plazo total de 20 semanas, seguido de
                            una semana dedicada a la presentación de los resultados.
                        </p>
                        <p>
                            El sistema de gesti on de tienda para JamDAY se desarrolló utilizando la
                            metodología ́agil Scrum. Esta elección se basó en la necesidad de agilidad, colaboración
                            constante y entregas incrementales. Durante el proceso
                            de 20 semanas, se cumplió con 13 historias de usuario, mejorando las funcionalidades para
                            administradores y compradores. Se utilizó Laravel con
                            Blade como framework principal, y se implementó una infraestructura
                            en AWS. A futuro, se busca optimizar el rendimiento, añadir nuevas funcionalidades, integrar
                            tecnologías emergentes, mejorar la experiencia del
                            usuario y fortalecer la seguridad, manteniendo un enfoque ́agil para adaptarse a las demandas
                            cambiantes del mercado.

                        </p>

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
