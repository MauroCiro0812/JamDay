@extends('adminlte::page')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Rating</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ratings.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $rating->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>producto Id:</strong>
                            {{ $rating->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rating:</strong>

                        </div>
                        <div class="form-group">
                            <strong>Comment:</strong>
                            {{ $rating->comment }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
