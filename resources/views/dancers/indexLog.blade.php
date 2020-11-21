@extends('layouts.app')
@section('content')
    @if(Session::has('success'))
        <p class="alert alert-success">
            {{Session::get('success') }}
        </p>
    @endif

    @include('layouts.includes.dancers')
@endsection
