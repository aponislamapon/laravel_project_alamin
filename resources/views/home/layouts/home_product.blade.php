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
@foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img">

                      <?php   $de = json_decode($product['product_image']);  ?>
                      <img
                        class="card-img"
                        src="{{asset('/images/'. $de)}}"
                        alt=""
                      />
                      <div class="p_icon">
                        <a href="{{asset($product['id'])}}" data-toggle="modal" data-target="#detailsproduct">
                          <i class="ti-eye"></i>
                        </a>
                        <a href="#">
                          <i class="ti-heart"></i>
                        </a>
                        <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>{{$product['product_name']}}</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">${{$product['product_price']}}</span>
                        <!-- <del>$35.00</del> -->
                      </div>
                    </div>
                  </div>
                </div>

@endforeach
                

               
              </div>
            </div>
<!-- -------------------------- -->




                        <!-- modal -->
    <div class="modal fade" id="detailsproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          
            <div class="col-md-6">
              <img src="" alt="">
            </div>
            <div class="col-md-6">
              <h4></h4>
              <br><br>
              <h3></h3>
              <br><br>
              <a class="btn btn-success" href="#2">Add to Cart</a>

            </div>
          </div>
         
        
          </div>
          <div class="modal-footer">
            <button type="submit"  class="btn btn-secondary" data-dismiss="modal">Close</button>        
          </div>
        </div>
      </div>
    </div><!-- Modal -->