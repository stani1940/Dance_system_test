@include('layouts.includes.header')
@include('layouts.includes.menu')
<!--=====================
                  Content
        ======================-->
@yield('content')
    <div class="footer-top">
        <div class="container_12">
            <div class="grid_12">
                <div class="sep-1"></div>
            </div>
            <div class="grid_4">
                <address class="address-1"> <div class="fa fa-home"></div>28 Jackson Blvd Ste 1020 Chicago,  <br>
                    IL 60604-2340</address>
            </div>
            <div class="grid_3">
                <a href="#" class="mail-1"><span class="fa fa-envelope"></span>info@demolink.org</a>
            </div>
            <div class="grid_4 fright">
                <div class="socials">
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">google+</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--==============================
                  footer
    =================================-->
@include('layouts.includes.footer')
