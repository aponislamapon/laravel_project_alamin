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
        <form class="row contact_form" action="{{action('OrderController@store')}}" method="post">
          {{csrf_field()}}
<div class="billing_details">
          <div class="row">
            <div class="col-lg-6">
              <h3>Shipping address Details</h3>
              
                <div class="col-md-12 form-group ">
                <input type="text" class="form-control" name="customer_name" required="required"
                    placeholder="Full name"
                  />
                  
                </div>
                              
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="number" name="phone" required="required"
                    placeholder="Phone Number"
                  />
                  
                </div>
                <div class="col-md-12 form-group">
                  <input type="email" class="form-control" id="email" name="email"
                    required="required"
                    placeholder="Enter Email Address"
                  />
                  
                </div>
                
                <div class="col-md-12 form-group">
                  <div class="row col-md-12">
                    <label for="">Country :</label>
                  <select class="country_select" name="country_name">
                    <option value="">select one</option>
            @foreach($countrys as $country)
                    <option value="{{$country['country_name']}}">{{$country['country_name']}}</option>
                    
            @endforeach

                  </select>
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="add1" name="address_line"
                    required="required"
                    placeholder="Enter Address line"
                  />
                 
                </div>
                
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="city" name="city" required="required"
                    placeholder="City / Town"
                  />
                 
                </div>
               
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="zip" name="zip_code"
                    placeholder="Postcode/ZIP"
                    required="required"
                  />
                </div>
                <div class="col-md-12 form-group p_star">
                  <label for="">Bkash Transaction ID :</label>
                  <input type="text" class="form-control" id="trx" name="trx_id" required="required"
                    placeholder="Bkash Trx id (MXL434...M77...11V)"
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

 <!-- hidden value pass database -->

                <input type="hidden" name="product_id" value="{{$id}}">
                <input type="hidden" name="product_name" value="{{ $details['name'] }}">
                <input type="hidden" name="qty" value="{{ $details['quantity'] }}">
                
  <!-- hidden value pass database -->
                
        
                 
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
                   Bkash Wallet Number : <i style="font-weight: bold;">01753334444</i>  <br>
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
