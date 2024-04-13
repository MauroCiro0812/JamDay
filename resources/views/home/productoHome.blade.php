<head>
    <meta charset="utf-8">
    <title>Profile Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/card-producto.css') }}">
</head>

<body>

    <div class="container-productos">
        @foreach ($productos as $producto)
            <div class="profile-wrapper">
                <div class="profile">
                    <div class="profile-image">
                        <a href="{{ route('productoHome.show', ['id' => $producto->id]) }}">
                            <img src="{{ $producto->foto }}" alt="Profile">
                    </div>


                    <div class="profile-name">
                        <h6>{{ $producto->nombre }}</h6>
                        <div class="profile-bio">
                            Precio {{ $producto->precio }}
                        </div>
                        <div class="profile-bio">
                            Color disponible {{ $producto->color->nombre }}
                        </div>
                    </div>
                </div>
            </div>
            </a>
        @endforeach
    </div>

    <div><br>
        <hr>
    </div>

    <div class="card-body">
        {{ $productos->links() }}
    </div>

</body>
