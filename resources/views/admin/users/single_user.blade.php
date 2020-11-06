@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content" id="posts">
            <div class="container">

                <div class="col-12 text-center post-title-wrap pb-3">
                    <h1 itemprop="headline" class="entry-title">{{$user->name}}</h1>
                </div>
                {{-- Ratings Block --}}

                <div class="user_ratings">

                    <form method="post" action="{{route('admin.add.rating',$user->id)}}">
                        @csrf

                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <h2> Rating Technique</h2>
                        <div id="rating_technique" class="rating_submit_inner">
                            @for($i=10;$i>0;$i--)

                                <input id="radio{{$i+9}}" class="star" name="rating_technique" type="radio" value="{{$i}} "
                                       />
                                <label for="radio{{$i+9}}">&#9733;</label>
                            @endfor
                        </div>

                        <h2> Rating Performance</h2>
                        <div id="rating_performance" class="rating_submit_inner">
                            @for($i=10;$i>0;$i--)

                                <input id="radio{{$i}}" name="rating_performance" type="radio" value="{{$i}}"
                                       class="star"/>
                                <label for="radio{{$i}}">&#9733;</label>
                            @endfor
                        </div>

                        <h2> Rating Artistry</h2>
                        <div id="rating_artistry" class="rating_submit_inner">
                            @for($i=10;$i>0;$i--)

                                <input id="radio{{$i+20}}" class="star" name="rating_artistry" type="radio" value="{{$i}}"
                                       />
                                <label for="radio{{$i+20}}">&#9733;</label>
                            @endfor
                        </div>

                        <input  style="width: 100%" type="submit" name="submit" value="RATE" class="btn-success" id="rate">

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
