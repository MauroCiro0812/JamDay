@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="card-body">
            <div class="col-md-8 mx-auto">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} usuarios</span>

                        <div class="float-right">
                            @if (Auth::user()->type == 'user')
                                <a class="btn btn-primary" href="{{ route('perfilUser') }}"> {{ __('Regresar') }}</a>
                            @endif
                        </div>

                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('users.update', $user->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('CRUDuser.formEditProfile')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
