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
            <image href= 'https://jamday-app-s3.s3.amazonaws.com/Home/HomeMujerTrabajo.png' width="100%" height="100%" /> </svg>
            
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Elegancia Profesional</h1>
            <p>¡Impresiona en el trabajo con nuestra ropa elegante!</p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
            <image href= 'https://jamday-app-s3.s3.amazonaws.com/Home/HomeMujerModa.png' width="100%" height="100%" /> </svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Estilo Femenino Único</h1>
            <p>¡Descubre tu estilo único con nuestras tendencias de moda!</p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
          <image href= ' https://jamday-app-s3.s3.amazonaws.com/Home/HomeMujerDCasual.png' width="100%" height="100%" />  </svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Estilo Casual</h1>
            <p>¡Relájate y luce fabulosa con nuestra ropa casual!</p>
            
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
            <image href= ' https://jamday-app-s3.s3.amazonaws.com/Home/HomeMujerTrabajoCircle.png' width="100%" height="100%" /> </svg>

        <h2 class="fw-normal">Elegancia Profesional</h2>
        <p>¡Destaca en el lugar de trabajo! Nuestra colección de ropa de trabajo para mujeres combina la elegancia y la comodidad, permitiéndote lucir profesional sin sacrificar tu estilo personal.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            <image href= ' https://jamday-app-s3.s3.amazonaws.com/Home/HomeMujerModaCircle.png' width="100%" height="100%" /> </svg>

        <h2 class="fw-normal">Estilo Femenino Único</h2>
        <p>¡Mantente a la vanguardia de las tendencias! Nuestra sección de moda para mujeres ofrece las últimas tendencias y estilos, permitiéndote expresar tu individualidad con confianza y estilo.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            <image href= 'https://jamday-app-s3.s3.amazonaws.com/Home/HomeMujerCasualCircle.png' width="100%" height="100%" /> </svg>

        <h2 class="fw-normal">Estilo Casual</h2>
        <p>¡Relájate con estilo! Nuestra colección de ropa casual para mujeres es perfecta para esos días de descanso, ofreciendo comodidad sin comprometer el estilo.</p>
        
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Destaca en la Excelencia Laboral: Descubre Nuestra Ropa Elegante para un Look Profesional y Sofisticado</h2>
        <p class="lead">¡Sobresal en el trabajo! Nuestra ropa elegante te hará lucir profesional y sofisticada.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href='https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesVerdes1_11zon.webp' width="100%" height="100%" /> 
        </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Descubre la historia detrás de cada prenda</h2>
        <p class="lead">¡Descubre la individualidad en cada prenda! Explora nuestra colección y encuentra tu estilo único.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href='https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaVerde4_11zon.webp' width="100%" height="100%" /> 
        </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Descanso con Glamour: Tu Estilo, Tu Comodidad, Siempre a la Moda</h2>
        <p class="lead">¡Comodidad con estilo! Nuestra ropa casual es perfecta para esos días de descanso.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <image href='https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanMilitares1_11zon.webp' width="100%" height="100%" /> 
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