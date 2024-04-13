@extends('layouts.app')

@section('content')

    <head>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <meta charset="utf-8" />

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet" />
    </head>

    <body>

        <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis ">
                <div class="banner-opacidad"></div>
                <div class="bg-image-home-product"></div>
                <div>
                    <div class="content">
                        <h1 class="display-4">
                            JamDAY
                        </h1>
                        <p class="lead my-3 ">
                            <b>¡Bienvenido a JamDAY Clothing for Every Day</b>, donde la moda se encuentra con la comodidad
                            en
                            cada
                            momento! Sumérgete en un universo de estilo versátil diseñado para acompañarte en todos tus
                            días.¡Descubre la esencia de la moda cotidiana
                            con Jamday, donde cada día es una oportunidad para brillar con tu propio estilo!
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">Para</strong>
                            <h3 class="mb-0">HOMBRES</h3>
                            <p class="card-text mb-auto">
                                Bienvenido a Jamday Clothing for Every Day, donde el estilo masculino cobra vida. Desde la
                                calle hasta la oficina, nuestras prendas están diseñadas para hombres que buscan comodidad
                                sin sacrificar el estilo.
                            </p>
                            <a href="/productos_hombre" class="icon-link gap-1 icon-link-hover stretched-link">
                                Ver nuestros productos
                                <svg class="bi">
                                    <use xlink:href="#chevron-right" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="https://jamday-app-s3.s3.amazonaws.com/Home/MenHome_11zon.webp"
                                class="bd-placeholder-img" width="200" height="250" alt="Jamday Clothing" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success-emphasis">Para</strong>
                            <h3 class="mb-0">MUJERES</h3>

                            <p class="mb-auto">
                                Sumérgete en la moda femenina. Desde looks casuales hasta
                                momentos más elegantes, nuestras prendas están diseñadas para la mujer moderna y versátil.
                            </p>
                            <a href="/productos_mujer" class="icon-link gap-1 icon-link-hover stretched-link">
                                Ver nuestros productos
                                <svg class="bi">
                                    <use xlink:href="#chevron-right" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="https://jamday-app-s3.s3.amazonaws.com/Home/WomenHome_11zon.webp"
                                class="bd-placeholder-img" width="200" height="250" alt="Jamday Clothing" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem">
                        <div class="p-4 mb-3 bg-body-tertiary rounded">
                            <h4 class="fst-italic">"Estilo Auténtico: Donde la Confianza se Encuentra con la Moda, y Tu
                                Singularidad Brilla"</h4>
                            <p class="mb-0">
                                "Viste con confianza, lidera con estilo. La moda no es solo ropa, es una declaración audaz
                                de quién eres. Descubre tu singularidad, ¡tu estilo es tu firma en el lienzo de la vida!"
                            </p>
                        </div>

                        <div class="ffiltros">
                            <h4 class="fst-italic">Explora tu día</h4>
                            <h6>Filtros</h6>

                            @include('home.productosFiltrados')

                        </div>

                        <div class="p-4">
                            <h4 class="fst-italic">Redes sociales</h4>
                            <ol class="list-unstyled">
                                <li><a href="https://www.instagram.com/daver_vera/">Instagram</a></li>
                                <li><a href="https://github.com/Juanes9019">GitHub</a></li>
                                <li><a href="https://www.facebook.com/mauro.ciro.7/photos">Facebook</a></li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">Estilo para el día a día</h3>
                    @include('home.productoHome')
                </div>

                <div>
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">TOP 10. Porque las personas los prefieren.</h3>
                    @include('home.mejorValorados')
                </div>
            </div>

        </main>

    </body>
@endsection


@section('footer')
    @include('home.footer')
@endsection
