@extends('adminlte::page')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Chat User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('soporte.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $chatUser->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Chat Id:</strong>
                            {{ $chatUser->chat_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
