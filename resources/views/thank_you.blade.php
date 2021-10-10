    @php
        $page_title = "Thank you";
    @endphp
    @include('layouts.header')
    <!-- ***** Header Area End ***** -->
    
    <section class="section" style="margin-top:100px;margin-bottom:200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center my-5">
                    <div class="section-heading">
                        <h2>{{session('msg')}}</h2>
                        <h3 style="color:#FB5849" class="h3">Thank You for your orders</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Footer Start ***** -->
    @include('layouts.footer')

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>