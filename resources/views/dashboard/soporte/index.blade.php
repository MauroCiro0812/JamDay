@extends('adminlte::page')

@section('template_title')
    Chat User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Chat User') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('soporte.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear sala') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Nombre</th>
                                        <th>Rol</th>
                                        <th>Sala de soporte</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chatUsers as $chatUser)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $chatUser->user->name }}</td>
                                            <td>{{ $chatUser->user->type }}</td>
                                            <td>{{ $chatUser->chat_id }}</td>

                                            <td>
                                                <form action="{{ route('soporte.destroy', $chatUser->id) }}" method="POST">

                                                    @if (Auth::user()->id == $chatUser->user_id)
                                                        <a class="btn btn-sm btn-primary "
                                                            href="/chat/{{ $chatUser->chat_id }}"><i
                                                                class="fa fa-fw fa-eye"></i>
                                                            {{ __('Entrar a sala') }}</a>
                                                    @endif

                                                    {{-- <a class="btn btn-sm btn-success"
                                                        href="{{ route('soporte.edit', $chatUser->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    @if (Auth::user()->type == 'manager')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa fa-fw fa-trash"></i>
                                                            {{ __('Eliminar') }}</button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $chatUsers->links() !!}
            </div>
        </div>
    </div>
@endsection
