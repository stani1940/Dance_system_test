@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>
                    <a href="{{route('admin.users.create')}}" class="btn btn-success">ADD USER</a>
                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $num = 1;
                            @endphp
                            @foreach($users as $user)
                                <tr>
                                    <td> {{$num++}} </td>
                                    <td> {{$user->name}} </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                    <td>
                                        <a href="{{route('admin.users.show',$user->id)}}">
                                            <button type="button" class="btn btn-primary float-left">SHOW</button>
                                        </a>
                                        <a href="{{route('admin.users.edit',$user->id)}}">
                                            <button type="button" class="btn btn-warning float-left">EDIT</button>
                                        </a>
                                        <form action="{{route('admin.users.destroy',$user)}}" method="POST"
                                              class="float-left">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
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
