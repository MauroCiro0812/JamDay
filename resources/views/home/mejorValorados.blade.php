<body>
    <div class="container">
        <div class="container-productos carousel-item">
            @foreach ($ratings as $rating)
                @foreach ($productos2 as $producto)
                    @if ($rating->producto_id == $producto->id)
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
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
</body>
