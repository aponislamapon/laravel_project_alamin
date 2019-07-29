<!DOCTYPE html>
<html>
<head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <title>@yield('title')</title>
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









 
    <link rel="stylesheet" href="{{asset('asset_cart/bootstrap.min.css')}}">
    
  
 
    <script src="{{asset('asset_cart/jquery.min.js')}}"></script>
   
 
</head>
<body>
 
<div class="container">

    <section class="banner_area">
          <div class="banner_inner d-flex align-items-center">
            <div class="container">
              <div
                class="banner_content d-md-flex justify-content-between align-items-center"
              >
                <div class="mb-3 mb-md-0">
                  <h2>Cart</h2>
                  <p>Very us move be blessed multiply night</p>
                </div>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="cart.html">Cart</a>
                </div>
              </div>
            </div>
          </div>
    </section>

 
    
</div>
 
<div class="container page">
    @yield('content')
</div>
 
@yield('scripts')
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