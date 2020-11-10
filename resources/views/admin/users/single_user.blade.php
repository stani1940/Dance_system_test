@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content" id="user">
            <div class="container">

                <div class="col-12 text-center post-title-wrap pb-3">
                    <h1 itemprop="headline" class="entry-title">{{$user->name}}</h1>
                </div>
                <div class="card-body">
                    <table class="table table-dark  table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Arbiter`s name</th>
                            <th>Techniques`s rating</th>
                            <th>Performance` rating</th>
                            <th>Artistry`s rating</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $num = 1;
                        @endphp
                        @foreach($ratings as $rating)
                            <tr>
                                <td> {{$num++}} </td>
                                <td> {{$rating->arbier_id}} </td>
                                <td>{{$rating->rating_count}}</td>
                                <td>{{$rating->rating_performance}}</td>
                                <td>{{$rating->rating_artistry}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    </div>
@endsection
