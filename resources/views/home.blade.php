    @php
        $page_title = "Home Page";
    @endphp
    
    <!-- ***** Header Area Start ***** -->
    @include('layouts.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    @include('layouts.slider')
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    @include('layouts.about')
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    @include('layouts.foodmenu')
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    @include('layouts.chefs')
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    @include('layouts.reservation')
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    @include('layouts.meal')
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    @include('layouts.footer')
