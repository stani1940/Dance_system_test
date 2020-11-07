@include('layouts.includes.header')
@include('layouts.includes.menu')
<!--=====================
                  Content
        ======================-->
@yield('content')
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



            <div class="grid_6">
                <h3>Recent Publications</h3>
                <div class="grid_3 alpha">
                    <div class="block-1">
                        <h4 class="color1"><a href="#">How to Join</a></h4>
                        Amus at magna non nunc tristique rhoncus. Aliquam nibh antegestas id dictum acoodo
                        <br>
                        <a href="#" class="link-1">more</a>
                    </div>
                </div>
                <div class="grid_3 omega">
                    <div class="block-1">
                        <h4 class="color1"><a href="#">Our Styles</a></h4>
                        Amus at magna non nunc tristique rhoncus. Aliquam nibh antegestas id dictum acoodo
                        <br>
                        <a href="#" class="link-1">more</a>
                    </div>
                </div>
                <div class="grid_3 alpha">
                    <div class="block-1">
                        <h4 class="color1"><a href="#">Schedule</a></h4>
                        Remus at magna non nunc tristique rhoncus. Aliquam nibh antegestas id dictum acoodot
                        <br>
                        <a href="#" class="link-1">more</a>
                    </div>
                </div>
                <div class="grid_3 omega">
                    <div class="block-1">
                        <h4 class="color1"><a href="#">Flexibility &amp; Strength</a></h4>
                        Omus at magna non nunc tristique rhoncus. Aliquam nibh antegestas id dictum acoodoe
                        <br>
                        <a href="#" class="link-1">more</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="grid_5 prefix_1 gallery">
                <a href="{{asset('images/big1.jpg')}} " class="gall_item">
                    <img src="{{asset('images/page1_img2.jpg')}}" alt="">
                    <div class="gall_bot">
                        <div class="fa fa-camera"></div>
                    </div>
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </section>
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
