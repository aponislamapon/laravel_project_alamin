<header class="header_area">
      <div class="top_menu">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="float-left">
                <p>Phone: +01 256 25 235</p>
                <p>email: info@eiser.com</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="float-right">
                <ul class="right_side">
                  <li>
                    <a href="cart.html">
                      gift card
                    </a>
                  </li>
                  <li>
                    <a href="tracking.html">
                      track order
                    </a>
                  </li>
                  <li>
                    <a href="contact.html">
                      Contact Us
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main_menu">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light w-100">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{action('HomeController@index')}}">
              <img src="{{URL::to('frontend/img/logo.png')}}" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset w-100"
              id="navbarSupportedContent"
            >
              <div class="row w-100 mr-0">
                <div class="col-lg-5 pr-0">
                  <ul class="nav navbar-nav center_nav pull-right">
                    <li class="nav-item">
                      <a class="nav-link" href="{{action('HomeController@index')}}">Home</a>
                    </li>
                    
                    <li class="nav-item submenu dropdown">
                      <a
                        href="#exampleModal"
                        class="nav-link dropdown-toggle"
                        
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-toggle="modal" 
                        
                        >Sign Up</a>
                      
                      
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a
                        href="#exampleModal2"
                        class="nav-link dropdown-toggle"
                        
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-toggle="modal"
                        >Sign In</a
                      >
                      
                    </li>
                    
                  </ul>
                </div>

                <div class="col-lg-7 pr-0">
                  <ul class="nav navbar-nav navbar-right right_nav pull-right">
                    <li class="nav-item">
                      <a href="#" class="icons">
                        <form action="">
                          <input style="height: 30px;" type="text" placeholder="Search...">
                          <i class="ti-search" aria-hidden="true"></i>
                        </form>
                        
                      </a>
                    </li>

                    <li class="nav-item">
                      <div class="dropdown">

                      <a href="#" class="icons dropdown" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                      </a>
                                        <!--  -->

<div class="dropdown-menu" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 15.19);min-width: 350px;
    padding-left: 20px;
    padding-right: 20px;  top: 100%;
    left: -100px;">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                        </div>
 
                        <?php $total = 0 ?>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                        @endif
 
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    <hr>
 
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">

                                    <img style="height: 100px; width: 60px; padding: 10px;" src="{{asset('images/'. $details['photo'] )}}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p style="font-weight: bold; font-size: 16px;">{{ $details['name'] }}</p>
                                    <p><span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span></p>
                                    
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <br><br>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>

                  <!--  -->
                    </div>

                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-user" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-heart" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>






                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <div class="container-fluid">
 




<!-- Modal start------------------------------------------- -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-primary">
          
          <div class="panel-body">          
         
          <!-- modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="modal-title" id="exampleModalLabel">User SignUp Form</h2>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                  <form action="{{action('CustomerController@store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label>Name:</label>
                      <input type="text" name="name" required="required" class="form-control"  placeholder="Enter Your name Name">
                    </div>
                    <div class="form-group">
                      <label>Email:</label>
                      <input type="text" name="email" required="required" class="form-control"  placeholder="Enter valid email address">
                    </div>
                    <div class="form-group">
                      <label>Password:</label>
                      <input type="text" name="password" required="required" class="form-control"  placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                      <label>Mobile:</label>
                      <input type="text" name="mobile" required="required" class="form-control"  placeholder="Enter your mobile number">
                    </div>
                    <div class="form-group">
                      <label>Country:</label>
                      <input type="text" name="country" required="required" class="form-control"  placeholder="Enter your country name">
                    </div>
                    <div class="form-group">
                      <label>Zip Code:</label>
                      <input type="text" name="zip_code" required="required" class="form-control"  placeholder="Enter your zip code">
                    </div> 
                    <div class="form-group">
                      <label>Address:</label>
                      <input type="text" name="address" required="required" class="form-control"  placeholder="Enter your address">
                    </div>    
                    <br><br><br>
                    <button type="submit" class="btn btn-success">Register</button>
                  </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit"  class="btn btn-secondary" data-dismiss="modal">Close</button>        
                    </div>
                  </div>
                </div>
              </div><!-- Modal -->
          <div class="panel-footer"></div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>


  <!-- model 2 login -->
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-primary">
          
          <div class="panel-body">          
         
          <!-- modal -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="modal-title" id="exampleModalLabel">Sign In</h2>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                  <form action="#" method="post">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                      <label>Email:</label>
                      <input type="text" name="email" required="required" class="form-control"  placeholder="Enter valid email address">
                    </div>
                    <div class="form-group">
                      <label>Password:</label>
                      <input type="text" name="password" required="required" class="form-control"  placeholder="Enter Password">
                    </div>
                    
                    <br><br><br>
                    <button type="submit" class="btn btn-success">Login</button>
                  </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit"  class="btn btn-secondary" data-dismiss="modal">Close</button>        
                    </div>
                  </div>
                </div>
              </div><!-- Modal -->
          <div class="panel-footer"></div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>