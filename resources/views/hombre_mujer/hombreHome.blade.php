@extends('layouts.app')

@section('content')

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>JamDay</title>
    <link href="{{ asset('css/hombre_mujer.css') }}" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body> 

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <image href= ' https://jamday-app-s3.s3.amazonaws.com/Home/HomeHombreTrabajo.png' width="100%" height="100%" /> </svg>

        <div class="container">
          <div id="ccolor" class="carousel-caption text-start">
            <h1>Ropa de Negocios Elegante</h1>
            <p>Vestimenta profesional y elegante para el hombre de negocios.</p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
            <image href= 'https://jamday-app-s3.s3.amazonaws.com/Home/HomeHombreDeporte.jpg' width="100%" height="100%" /> </svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Moda Deportiva</h1>
            <p>Ropa deportiva funcional y con estilo para el hombre activo.</p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
            <image href= ' https://jamday-app-s3.s3.amazonaws.com/Home/HomeHombreUrban.png' width="100%" height="100%" /> </svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Estilo Urban</h1>
            <p>Ropa urbana con estilo y comodidad para el hombre moderno.</p>
            
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            <image href= ' https://jamday-app-s3.s3.amazonaws.com/Home/HomeHombreTrabajoCircle.png' width="100%" height="100%" /> </svg>

        <h2 class="fw-normal">Ropa de Negocios Elegante</h2>
        <p>Nuestra gama de ropa de negocios para hombres combina la elegancia clásica con un toque moderno. Cada pieza está diseñada para ayudarte a lucir profesional y elegante, sin sacrificar la comodidad. Desde trajes a medida hasta camisas de vestir de alta calidad, nuestra ropa de negocios te ayudará a hacer una declaración en la oficina.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            <image href=' https://jamday-app-s3.s3.amazonaws.com/Home/HomeHombreDeporteCircle.png' width="100%" height="100%" /> </svg>

        <h2 class="fw-normal">Moda Deportiva</h2>
        <p>Nuestra colección de moda deportiva para hombres está diseñada para aquellos que valoran la funcionalidad y el estilo. Ya sea que estés entrenando en el gimnasio o disfrutando de un día al aire libre, nuestra ropa deportiva te mantendrá cómodo y con estilo. Con una variedad de estilos y colores, nuestras prendas deportivas son perfectas para cualquier actividad física.</p>
  
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            <image href='https://jamday-app-s3.s3.amazonaws.com/Home/HomeHombreUrbanCircle.png' width="100%" height="100%" /> </svg>

        <h2 class="fw-normal">Estilo Urbano Moderno</h2>
        <p>Nuestra colección de estilo urbano moderno está diseñada para el hombre que busca destacar en la ciudad. Con piezas que combinan comodidad y estilo, nuestra ropa urbana te permitirá moverte por la ciudad con confianza y sofisticación. Desde jeans ajustados hasta camisetas gráficas, cada prenda es un reflejo de la energía y diversidad de la vida urbana.</p>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Profesional con Estilo: Descubre la Elegancia y Comodidad de Nuestra Ropa de Negocios para el Hombre Moderno</h2>
        <p class="lead">¡Impresiona en la oficina! Nuestra ropa de negocios combina elegancia y comodidad para el hombre profesional.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href='https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenGabanCafe1_11zon.webp' width="100%" height="100%" /> 
        </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Eleva tu Energía: Ropa Deportiva Funcional y Moderna para tus Mejores Movimientos</h2>
        <p class="lead"> ¡Mantente activo con estilo! Nuestra ropa deportiva es funcional y moderna, perfecta para cualquier actividad física.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href='https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonPlaya2_11zon.webp' width="100%" height="100%" /> 
        </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Ruge en la Ciudad: Estilo Moderno para Hombres Urbanos</h2>
        <p class="lead">¡Descubre la ciudad con estilo! Explora nuestra gama de ropa urbana, diseñada para el hombre moderno.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href='https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenTenis1_11zon.webp' width="100%" height="100%" /> 
        </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/dist/js/password-toggle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      
  </body>
@include('home.footer')
@endsection