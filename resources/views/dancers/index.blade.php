@extends('layouts.app')
@section('content')
    @if(Session::has('success'))
        <p class="alert alert-success">
            {{Session::get('success') }}
        </p>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Our Dancers</div>
                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>Email</th>
                                <th>Points</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dancers as $dancer)
                                <tr>
                                    <td> {{$dancer->id}} </td>
                                    <td> {{$dancer->name}} </td>
                                    <td>{{$dancer->email}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
