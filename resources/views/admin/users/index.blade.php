@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('error'))
                    <p class="alert alert-danger">
                        {{Session::get('error') }}
                    </p>
                @endif
                <div class="card">
                    <div class="card-header">Users</div>
                    @can('add-users')
                    <a href="{{route('admin.users.create')}}" class="btn btn-success">ADD USER</a>
                    @endcan
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
                                            <button type="button" class="btn btn-info float-left">SHOW</button>
                                        </a>
                                        @can('rate-users')
                                        <a href="{{route('admin.',$user->id)}}">
                                            <button type="button" class="btn btn-primary float-left">RATE</button>
                                        </a>
                                        @endcan
                                        @can('edit-users')
                                            <a href="{{route('admin.users.edit',$user->id)}}">
                                                <button type="button" class="btn btn-warning float-left">EDIT</button>
                                            </a>
                                        @endcan
                                        @can('delete-users')
                                            <form action="{{route('admin.users.destroy',$user)}}" method="POST"
                                                  class="float-left">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        @endcan
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
