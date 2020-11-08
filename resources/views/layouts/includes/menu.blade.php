<section id="stuck_container">
    <!--==============================
                Stuck menu
    =================================-->
    <div class="container_12">
        <div class="grid_12">
            <div class="navigation ">
                <nav>
                    <ul class="sf-menu">
                        <li class="current"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('arbiters.list')}}">Arbiters</a></li>
                        <li><a href="{{route('dancers.list')}}">Participants</a></li>
                        @if (Route::has('login'))

                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                <li>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                </li>

                            @endauth

                        @endif

                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="slider_wrapper">
    <div class="container_12">
        <div class="grid_12">
            <div id="camera_wrap" class="">
                <div data-src="images/slide-1.jpg" data-thumb="images/thumb-2.jpg"></div>
                <div data-src="images/slide-2.jpg" data-thumb="images/thumb-3.jpg"></div>
                <div data-src="images/slide-3.jpg" data-thumb="images/thumb-1.jpg"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>


<!--=====================

