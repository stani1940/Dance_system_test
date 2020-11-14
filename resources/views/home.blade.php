    @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <p> {{$profile->user->name}}</p>
                        <p> {{$profile->country}}</p>
                       <p>
                           {{$profile->bio}}
                       </p>
                        <p>
                            <img src="{{asset($profile->img)}}"alt="pic" />
                        </p>

                           <a href="" class="btn btn-warning">EDIT PROFILE</a>

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
