@extends('admin.layouts.default')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="#">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Product</a></li>
</ul>
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Product Edit</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form  action="{{action('ProductController@update', $product['id'])}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
							
							<input type="hidden" name="_method" value="PATCH">

							   <div class="form-group">
							    <label style="color: black;">Product Category:</label>
							    <select name="cat_id" id="">
							    	<option value="">Select One</option>
							    	<option value="1">Mobile</option>
							    	<option value="2">Copmuter</option>
							    </select>
							  </div>
							  <div class="form-group">
							    <label style="color: black;">Product Brand:</label>
							    <select name="brand_id" id="">
							    	<option value="">Select One</option>
							    	<option value="1">Apple</option>
							    	<option value="2">HP</option>
							    </select>
							  </div>
							  <div class="form-group">
							    <label style="color: black;">Product Name:</label>
							    <input type="text" name="product_name" value="{{$product['product_name']}}" class="form-control"  placeholder="Enter Product Name">
							  </div>
							  <div class="form-group">
							    <label style="color: black;">Product Name:</label>
							    
							    <textarea name="product_description" id="" cols="30" rows="10">{{$product['product_description']}}</textarea>
							  </div>

							  
							   <div class="form-group">
							   
							    <label style="color: black;">Product Image:</label>
			
			 <img style="height: 100px; width: 50px;" src="{{asset('/images/'. $product['product_image']),$product['product_name']}}" alt="abc">

							    <input type="file" name="product_image[]" class="form-control">
							  </div>

							  <!-- <div class="form-group">
							    <label style="color: black;">Product Image:</label>
							    <input type="text" name="product_image" class="form-control"  placeholder="Enter Product Price" value="{{$product['product_image']}}">
							  </div> -->






							   <div class="form-group">
							    <label style="color: black;">Product Price:</label>
							    <input type="text" name="product_price" class="form-control"  placeholder="Enter Product Price" value="{{$product['product_price']}}">
							  </div>
							  <div class="form-group">
							    <label style="color: black;">Product Quantity:</label>
							    <input type="text" name="product_qty" class="form-control"  placeholder="Enter Product Quantity" value="{{$product['product_qty']}}">
							  </div>

					                              
                      
							  

							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Update</button>
								<button class="btn">Cancel</button>
							  </div>
						
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div>


@stop