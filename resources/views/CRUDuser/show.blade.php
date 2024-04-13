@extends('adminlte::page')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} usuario</span>
                        </div>

                        <div class="float-right">

                            <a class="btn btn-primary" href="{{ route('adminUsers.index') }}"> {{ __('Regresar') }}</a>

                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $user->surname }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de documento:</strong>
                            {{ $user->typeid }}
                        </div>
                        <div class="form-group">
                            <strong>Número de identificación:</strong>
                            {{ $user->idnumber }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $user->type }}
                        </div>
                        <div class="form-group">
                            <strong>Foto de perfil:</strong>
                        </div>
                        <div class="form-group">
                            <img src="{{ $user->avatar }}" width="200px">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
