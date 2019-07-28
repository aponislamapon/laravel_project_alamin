@extends('home.layouts.default')
@section('home_content')
<div class="product_top_bar">
              <div class="left_dorp">
                <select class="sorting">
                  <option value="1">Default sorting</option>
                  <option value="2">Default sorting 01</option>
                  <option value="4">Default sorting 02</option>
                </select>
                <select class="show">
                  <option value="1">Show 12</option>
                  <option value="2">Show 14</option>
                  <option value="4">Show 16</option>
                </select>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row">
@foreach($product as $product)
                <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img">

                     
                      <img
                        class="card-img"
                        src="{{asset('/images/'. $product['product_image'])}}"
                        alt=""
                      />
                      <div class="p_icon">
                        <a href="#" data-toggle="modal" data-target="#abc{{$product['id']}}"  data-id="{{$product['id']}}"  data-photo="{{$product['product_image']}}">
                          <i class="ti-eye"></i>
                        </a>
                        <a href="#">
                          <i class="ti-heart"></i>
                        </a>
                        <a href="{{ action('HomeController@addToCart',$product['id'])}}">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="{{action('ProductdetailsController@index', $product['id'])}}" class="d-block">
                        <h4>{{$product['product_name']}}</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">${{$product['product_price']}}</span>
                        <!-- <del>$35.00</del> -->
                      </div>
                    </div>
                  </div>
                </div>



                        <!-- modal -->
    <div class="modal fade" id="abc{{$product['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Product details</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        
                  <div class="row">

            
          
            <div class="col-md-5">
              <img style="width: 100%;" src="{{asset('/images/'.$product['product_image'])}}" alt="dsfads">

             

            </div>
            <div class="col-md-7">
              <div class="">
              <h3>{{$product['product_name']}}</h3>
              <h3></h3>
              <ul class="list">
              <li>
                  <a class="active" href="#">
                    <span>Price : $ <b>{{$product['product_price']}}</b> </span>
                  
                </li>
              
              
                <li>
                  <a href="#"> <span>Availibility</span> : In Stock</a>
                </li>
              </ul>
              <p>
                {{$product['product_description']}}
              </p>
              <div class="product_count">
                <label for="qty">Quantity:</label>
                <input
                  type="text"
                  name="qty"
                  id="sst"
                  maxlength="12"
                  value="1"
                  title="Quantity:"
                  class="input-text qty"
                />
                <button
                  onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                  class="increase items-count"
                  type="button"
                >
                  <i class="lnr lnr-chevron-up"></i>
                </button>
                <button
                  onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                  class="reduced items-count"
                  type="button"
                >
                  <i class="lnr lnr-chevron-down"></i>
                </button>
              </div>
              <div class="card_area">
                <a class="main_btn" href="{{ action('HomeController@addToCart',$product['id'])}}">Add to Cart</a>
                
              </div>
            </div>
            </div>
          </div>
         
        
          </div>
          <div class="modal-footer">
            <button type="submit"  class="btn btn-secondary" data-dismiss="modal">Close</button>        
          </div>
        </div>
      </div>
    </div><!-- Modal -->


@endforeach
                

               
              </div>
            </div>









@endsection