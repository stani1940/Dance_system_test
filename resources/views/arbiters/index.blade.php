@extends('layouts.master')

@section('content')
    <section id="content" class="inset__1">
        <div class="ic">
            Meet our jury, composed of proven professionals in dancing!
        </div>
        <div class="container_12">
            @foreach($arbiters as $arbiter)

            <div class="grid_6">
                <div class="block-2">
                    <img src="{{asset($profile->find($arbiter->id)->img)}}" alt="pic">
                    <div class="extra_wrapper">
                        <h4 class="color1"><a href="#">{{$arbiter->name}}</a></h4>
                        <p class="color1"> {{$profile->find($arbiter->id)->bio}}</p>
                    </div>
                </div>
            </div>
                @endforeach
                <div class="clear"></div>
        </div>
    </section>

@endsection
