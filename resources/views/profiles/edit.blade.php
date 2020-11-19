@extends('layouts.app')

@section('content')
    {!! Form::model( $profile,  ['route' => ['profiles.update', $profile->id],
                                'method' => 'put',
                                'enctype' => 'multipart/form-data']) !!}

    <h1>{{ $user_data->name }}</h1>
    <p>{{ $profile->bio }}</p>


    @if( !empty( $profile->image ) )

        <img src="{{ asset( 'storage/' . $profile->image ) }}" width="200px">

    @endif
    <div class="row">
     Change your image
        {!! Form::file('image') !!}
    </div>
    <div class="form-group">
        {!! Form::submit('edit', ['class' => 'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}



    @endsection
