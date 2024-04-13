@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/profile-card.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Configuración de usuario') }}</div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between;">
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="container-profile">
                                        <article class="card-image">
                                            <div class="background">

                                                @if (filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL))
                                                    <img src="{{ Auth::user()->avatar }}">
                                                @else
                                                    <img src="{{ Storage::disk('s3')->url(Auth::user()->avatar) }}">
                                                @endif

                                            </div>
                                            <div class="content">
                                                <h2>{{ Auth::user()->name }}</h2>

                                                <h4>{{ Auth::user()->surname }}</h4>

                                                <p>
                                                    Correo: {{ Auth::user()->email }}
                                                </p>
                                                <p>{{ Auth::user()->typeid }}: {{ Auth::user()->idnumber }}</p>
                                                <ul class="chips"style="display: flex; align-items: center;">
                                                    <h6>Modo oscuro</h6> @include('layouts.darkMode')
                                                    <li class="chip"><a href="{{ route('dashboard') }}">Panel de
                                                            administrador</a>
                                                    </li>
                                                </ul>
                                                <div class="action-buttons">
                                                    <a href="{{ route('adminUsers.edit', ['user' => Auth::user()->id]) }}">
                                                        Actualizar información </a>

                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>

    </body>
@endsection

@section('footer')
    @include('home.footer')
@endsection
