<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Apon's Ecommerce</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/vendors/lightbox/simpleLightbox.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/vendors/animate-css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/vendors/jquery-ui/jquery-ui.css')}}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />
  </head>

  <body>
    <!--================Header Menu Area =================-->
    @include('home.layouts.header')
    <!--================Header Menu Area =================-->

 <!--================Home Banner Area =================-->
    @include('home.layouts.banner')
  <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
             @include('home.layouts.products')
          </div>






          <div class="col-lg-3">
             @include('home.layouts.leftbar')
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->

    <!--================ start footer Area  =================-->
@include('home.layouts.footer')
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/stellar.js')}}"></script>
    <script src="{{asset('frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/js/mail-script.js')}}"></script>
    <script src="{{asset('frontend/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/vendors/counter-up/jquery.counterup.js')}}"></script>
    <script src="{{asset('frontend/js/theme.js')}}"></script>
  </body>
</html>
