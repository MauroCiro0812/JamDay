<link href="{{ asset('css/rating.css') }}" rel="stylesheet">

<div class="box box-info padding-1">
    <div class="box-body">
        @auth

            <div class="form-group" style="display: none">
                {{ Form::label('user_id') }}
                {{ Form::text('user_id', Auth::user()->id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
                {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group" style="display: none">
                {{ Form::label('producto_id') }}
                {{ Form::text('producto_id', $producto->id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'producto_id']) }}
                {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        @endauth

        <div class="comments-container">
            <h4>¿Cómo calificas este producto? </h4>

            @auth
                <div class="container py-5">

                    {{ Form::label('rating', 'Tu calificación') }}
                    <div id="rating" class="my-3">
                        <i class="far fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                    </div>
                    <div style="display: none">
                        {{ Form::text('rating', 5, ['id' => 'ratingValue', 'class' => 'form-control' . ($errors->has('rating') ? ' is-invalid' : ''), 'placeholder' => 'Rating']) }}
                        {!! $errors->first('rating', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            @endauth

        </div>

    </div>

</div>

<!-- Contenedor Principal -->
<div class="comments-container">
    <h4>Comentarios </h4>

    <ul id="comments-list" class="comments-list">

        @foreach ($ratings as $rating)
            @if ($rating->producto_id == $producto->id)
                <li>
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar">
                            @if (filter_var($rating->user->avatar, FILTER_VALIDATE_URL))
                                <img src="{{ $rating->user->avatar }}">
                            @else
                                <img src="{{ Storage::disk('s3')->url($rating->user->avatar) }}">
                            @endif
                        </div>
                        <!-- Contenedor del Comentario -->
                        <div class="container">
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name">
                                        <a href="http://creaticode.com/blog">{{ $rating->user->name }}</a>
                                    </h6>
                                    <span>{{ $rating->created_at->diffForHumans() }}</span>
                                </div>
                                <div class="comment-content">
                                    {{ $rating->comment }}
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
        @endforeach
    </ul>
    <div class="form-group">
        {{ Form::label('Dejanos tu comentario') }}
        {{ Form::text('comment', '', ['class' => 'form-control' . ($errors->has('comment') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un comentario']) }}
        {!! $errors->first('comment', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar comentario o calificación') }}</button>
    </div>
</div>


<script>
    var defaultRating = {{ isset($rating_user->rating) ? $rating_user->rating : 0 }};
    $('#rating i:lt(' + defaultRating + ')').removeClass('far').addClass('fas');
    $('#ratingValue').val(defaultRating);

    $('#rating i').on('click', function() {
        var selectedStar = $(this).index();
        $('#rating i').removeClass('fas').addClass('far');
        $('#rating i:lt(' + (selectedStar + 1) + ')').removeClass('far').addClass('fas');
        $('#ratingValue').val(selectedStar + 1);
    });

    $('#rating i').on('mouseover', function() {
        var hoverStar = $(this).index();
        $('#rating i').removeClass('fas').addClass('far');
        $('#rating i:lt(' + (hoverStar + 1) + ')').removeClass('far').addClass('fas');
    });

    $('#rating').on('mouseout', function() {
        $('#rating i').removeClass('fas').addClass('far');
        $('#rating i:lt(' + $('#ratingValue').val() + ')').removeClass('far').addClass('fas');
    });
</script>
