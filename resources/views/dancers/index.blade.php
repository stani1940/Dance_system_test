@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>
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
                                </tr>>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
