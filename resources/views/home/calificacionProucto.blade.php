<div class="card-body">

    @guest

        @include('dashboard.rating.ratingFormHome')
    @else
        @if (Auth::user()->type == 'user')
            <form method="POST" action="{{ route('user.ratings.store') }}" role="form" enctype="multipart/form-data">
                @csrf

                @include('dashboard.rating.ratingFormHome')

            </form>
        @endif

        @if (Auth::user()->type == 'admin' || Auth::user()->type == 'manager')
            <form method="POST" action="{{ route('ratings.store') }}" role="form" enctype="multipart/form-data">
                @csrf

                @include('dashboard.rating.ratingFormHome')

            </form>
        @endif
    @endguest

</div>
