@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">Edit Profile</div>
                <div class="card-body">
                    {!! Form::model( $profile,  ['route' => ['profiles.update', $profile->id],
                                                'method' => 'put',
                                                'enctype' => 'multipart/form-data']) !!}

                    <h1>{{ $user_data->name }}</h1>
                    <p>{{ $profile->bio }}</p>
                    @if( !empty( $profile->img ) )

                        <img src="{{ asset('storage/'.$profile->img ) }}" width="200px">
                    @endif
                    <div class="row">
                        {!! Form::model( $profile,  ['route' => ['profiles.update', $profile->id],
                                            'method' => 'put',
                                            'enctype' => 'multipart/form-data']) !!}
                        <p>Change your image</p>
                        {!! Form::file('img',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('edit', ['class' => 'btn btn-success']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>


@endsection
