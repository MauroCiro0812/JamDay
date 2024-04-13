<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('js/password-toggle.js') }}"></script>

<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group row mb-3">
            {{ Form::label('name', __('Nombre'), ['class' => 'col-md-4 col-form-label text-md-end']) }}
            <div class="col-md-6">
                {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group row mb-3">
            {{ Form::label('surname', __('Apellidos'), ['class' => 'col-md-4 col-form-label text-md-end']) }}
            <div class="col-md-6">
                {{ Form::text('surname', $user->surname, ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
                {!! $errors->first('surname', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group row mb-3">
            {{ Form::label('typeid', __('Tipo de documento'), ['class' => 'col-md-4 col-form-label text-md-end']) }}
            <div class="col-md-6">
                {{ Form::select(
                    'typeid',
                    [
                        'T.I' => 'Tarjeta de identidad',
                        'C.C' => 'Cédula de ciudadania',
                        'C.E' => 'Cédula de extranjeria',
                        'PPT' => 'Pasaporte',
                        'NIT' => 'NIT',
                    ],
                    $user->typeid,
                    ['class' => 'form-control' . ($errors->has('typeid') ? ' is-invalid' : '')],
                ) }}
                {!! $errors->first('typeid', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group row mb-3">
            {{ Form::label('idnumber', __('Número de identificación'), ['class' => 'col-md-4 col-form-label text-md-end']) }}
            <div class="col-md-6">
                {{ Form::text('idnumber', $user->idnumber, ['class' => 'form-control' . ($errors->has('idnumber') ? ' is-invalid' : ''), 'placeholder' => 'Número de identificación']) }}
                {!! $errors->first('idnumber', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group row mb-3">
            {{ Form::label('email', __('Correo electrónico'), ['class' => 'col-md-4 col-form-label text-md-end']) }}
            <div class="col-md-6">
                {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group row mb-3">
            {{ Form::label('password', __('Contraseña'), ['class' => 'col-md-4 col-form-label text-md-end']) }}

            <div class="col-md-6">
                <div class="input-group">

                    {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña', 'id' => 'password', 'autocomplete' => 'new-password']) }}

                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="bi bi-eye" id="togglePassword1"></i>
                        </span>
                    </div>
                </div>
                {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group row mb-3">
            {{ Form::label('avatar', __('Foto de perfil'), ['class' => 'col-md-4 col-form-label text-md-end']) }}
            <div class="col-md-6">
                {{ Form::file('avatar', ['class' => 'form-control' . ($errors->has('avatar') ? ' is-invalid' : '')]) }}

                @foreach ($errors->get('avatar') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="mb-3"></div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>
