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
                        <div class="rating_submit_inner">
                            <input id="radio1" type="radio" name="rating" value="5" class="star"/>
                            <label for="radio1">&#9733;</label>
                            <input id="radio2" type="radio" name="rating" value="4" class="star"/>
                            <label for="radio2">&#9733;</label>
                            <input id="radio3" type="radio" name="rating" value="3" class="star"/>
                            <label for="radio3">&#9733;</label>
                            <input id="radio4" type="radio" name="rating" value="2" class="star"/>
                            <label for="radio4">&#9733;</label>
                            <input id="radio5" type="radio" name="rating" value="1" class="star"/>
                            <label for="radio5">&#9733;</label>
                            <input type="submit" name="submit" value="RATE" class="btn-success">
                        </div>


                    </form>


                    {{-- Ratings Block End --}}


                </div>
                <div class="user_ratings">

                    <form method="post" action="{{route('admin.add.rating',$user->id)}}">
                        @csrf

                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <h2> Rating Technique</h2>
                        <div class="rating_submit_inner">
                            <input id="radio1" type="radio" name="rating" value="5" class="star"/>
                            <label for="radio1">&#9733;</label>
                            <input id="radio2" type="radio" name="rating" value="4" class="star"/>
                            <label for="radio2">&#9733;</label>
                            <input id="radio3" type="radio" name="rating" value="3" class="star"/>
                            <label for="radio3">&#9733;</label>
                            <input id="radio4" type="radio" name="rating" value="2" class="star"/>
                            <label for="radio4">&#9733;</label>
                            <input id="radio5" type="radio" name="rating" value="1" class="star"/>
                            <label for="radio5">&#9733;</label>
                            <input type="submit" name="submit" value="RATE" class="btn-success">
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
