@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Chat User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Chat User</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('soporte.update', $chatUser->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('dashboard.soporte.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
