@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content" id="user">
            <div class="container">

                <div class="col-12 text-center post-title-wrap pb-3">
                    <h1 itemprop="headline" class="entry-title">{{$user->name}}</h1>
                    <p>Total points- {{number_format(array_sum($total),2)}}</p>
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



                            @php
                                if ($tmp[$num-1][3]===1){
                                $class='active';

    }else{
        $class='inactive';
    }

                            @endphp
                            <tr class="{{$class}}">
                                <td>{{$num++}}</td>

                                <td>{{$arbiters[$num-1]}}</td>
                                <td>{{$rating->rating_count}}</td>
                                <td>{{$rating->rating_performance}}</td>
                                <td>{{$rating->rating_artistry}}</td>

                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            @foreach($total as $value)
                                <td>{{number_format($value,2)}}</td>
                            @endforeach
                        </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
