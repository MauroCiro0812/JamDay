@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} usuarios</span>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('adminUsers.index') }}"> {{ __('Regresar') }}</a>
                        </div>

                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('adminUsers.update', $user->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('CRUDuser.form')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
