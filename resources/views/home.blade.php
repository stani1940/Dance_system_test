@extends('layouts.master')

@section('content')
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - October 06, 2014!</div>

        <div class="container_12">

            <div class="grid_12">

                <img src="{{asset('images/page1_img1.jpg')}}" alt="" class="fleft">
                <h2>The Way You Move </h2>
                <p>Find more about our reglament, participants and referee.
                <p> are presented in the same name category at TemplateMonster.com. </p>
                Amus at magna non nunc tristique rhoncusquam nibh antegestas id dictum
                <br>
                <a href="{{route('about')}}" class="link-1">more</a>
            </div>
            <div class="clear"></div>
        </div>
    </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ __('You are logged in!') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
