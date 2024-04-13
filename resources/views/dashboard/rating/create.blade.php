@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Rating
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Rating</span>
                    </div>
                    <div class="card-body">

                        @if (Auth::user()->type == 'admin' || Auth::user()->type == 'manager')
                            <form method="POST" action="{{ route('ratings.store') }}" role="form"
                                enctype="multipart/form-data">
                                @csrf

                                @include('dashboard.rating.form')
                            </form>
                        @endif

                        @if (Auth::user()->type == 'user')
                            <form method="POST" action="{{ route('user.ratings.store') }}" role="form"
                                enctype="multipart/form-data">
                                @csrf

                                @include('dashboard.rating.form')
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
