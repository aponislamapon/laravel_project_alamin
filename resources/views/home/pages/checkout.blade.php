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
@include('home.layouts.header')
<!-- banner -->
 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Product Checkout</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="checkout.html">Product Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- banner -->
<!-- content -->
<section class="checkout_area section_gap">
      <div class="container">
        <form
                class="row contact_form"
                action="#"
                method="post"
                novalidate="novalidate"
              >
<div class="billing_details">
          <div class="row">
            <div class="col-lg-6">
              <h3>Shipping address Details</h3>
              
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="first"
                    name="name"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="First name"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="last"
                    name="name"
                  />
                  <span class="placeholder" data-placeholder="Last name"></span>
                </div>
                
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="number"
                    name="number"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Phone number"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="compemailany"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Email Address"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">Country</option>
                    <option value="2">Country</option>
                    <option value="4">Country</option>
                  </select>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="add1"
                    name="add1"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Address line"
                  ></span>
                </div>
                
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="city"
                    name="city"
                  />
                  <span class="placeholder" data-placeholder="Town/City"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">District</option>
                    <option value="2">District</option>
                    <option value="4">District</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="zip"
                    name="zip"
                    placeholder="Postcode/ZIP"
                  />
                </div>
                <div class="col-md-12 form-group p_star">
                  <label for="">Bkash Transaction ID :</label>
                  <input
                    type="text"
                    class="form-control"
                    id="trx"
                    name="trx"
                    placeholder="Bkash Trx id (MXL434522M7706111V)"
                  />
                  
                </div>
                
                
              
            </div>
            <div class="col-lg-6">

         <?php $total = 0 ?>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                        @endif
 

              <div class="order_box">
                <h2>Your Order</h2>
                <ul class="list">
                  <li>
                    <a href="#"
                      >Product
                      <span>Total</span>
                    </a>
                  </li>
             @if(session('cart'))
@foreach(session('cart') as $id => $details)
                  <li>
                    <a href="#"
                      >{{ $details['name'] }}
                      <span class="middle">{{ $details['quantity'] }}</span>
                      <span class="last"> ${{ $details['price'] }}</span>
                    </a>
                  </li>
                 
 @endforeach
 @endif
                </ul>
                <ul class="list list_2">
                 
                 
                  <li>
                    <a href="#"
                      >Total
                      <span>${{ $total }}</span>
                    </a>
                  </li>
                </ul>
                <div class="payment_item">
                  <div class="radion_btn">
                    <input type="radio" id="f-option5" name="selector" />
                    <label for="f-option5">Check payments</label>
                    <div class="check"></div>
                  </div>
                  <p>
                   Bkash Wallet Number : 01753334444 <br>
                   Check your total Amount. <br>
                   Confirm your payment. <br>
                   Keep and Put your transaction ID Number. <br>

                  </p>
                  
                </div>
                <div class="payment_item active">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Bkash </label>
                    <img style="width: 80px; height: 25px;" src="{{URL::to('frontend/img/product/single-product/card1.gif')}}" alt="" />
                    <div class="check"></div>
                  </div>
                  <p>
                    Please send a check to Store Name, Store Street, Store Town,
                    Store State / County, Store Postcode.
                  </p>
                </div>
                <div class="creat_account">
                  <input type="checkbox" id="f-option4" name="selector" />
                  <label for="f-option4">I’ve read and accept the </label>
                  <a href="#">terms & conditions*</a>
                </div>
                
              </div>

 
            </div>
          </div><br><br><br><br>
        </div>
        
        <input class="main_btn btn-block" type="submit" name="submit" value="Proceed to Bkash">
         
      </form>
      </div>

  </section>
<!-- content -->
<br><br><br><br><br><br>






@include('home.layouts.footer')

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
