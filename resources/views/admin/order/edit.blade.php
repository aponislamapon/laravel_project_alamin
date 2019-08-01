@extends('admin.layouts.default')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="#">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">order</a></li>
</ul>
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit order</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{action('OrderController@update', $order['id'])}}" method="post">
							{{csrf_field()}}
							<fieldset>
							<input type="hidden" name="_method" value="PATCH">
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Product Name</label>
								<div class="controls">
								  <input name="product_name" type="text" id="inputSuccess" value="{{$order['product_name']}}">						  
								</div>
							  </div>

							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Transaction ID</label>
								<div class="controls">
								  <input name="trx_id" type="text" id="inputSuccess" value="{{$order['trx_id']}}">						  
								</div>
							  </div>


							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Customer Name</label>
								<div class="controls">
								  <input name="customer_name" type="text" id="inputSuccess" value="{{$order['customer_name']}}">					  
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Phone No</label>
								<div class="controls">
								  <input name="phone" type="text" id="inputSuccess" value="{{$order['phone']}}">					  
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Country</label>
								<div class="controls">
								  <input name="country" type="text" id="inputSuccess" value="{{$order['country']}}">					  
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">City</label>
								<div class="controls">
								  <input name="city" type="text" id="inputSuccess" value="{{$order['city']}}">					  
								</div>
							  </div>
							   <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Zip Code</label>
								<div class="controls">
								  <input name="zip_code" type="text" id="inputSuccess" value="{{$order['zip_code']}}">					  
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Address Line</label>
								<div class="controls">
								  <input name="address_line" type="text" id="inputSuccess" value="{{$order['address_line']}}">					  
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Payment Status</label>
								<div class="controls">
								  <select name="payment_status" id="">
								  	<option value="1">Complete</option>
								  	<option value="0">Pending</option>
								  </select>					  
								</div>
							  </div>

                              
                      
							  

							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Update</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div>
		
      
@endsection
