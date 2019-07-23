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

<h1>Product List</h1>
<!-- Button trigger modal -->
<a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">add new Product</a>

<br><br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Add new Product</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="{{action('ProductController@store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}

			<div class="form-group">
		    <label>Product Name:</label>
		    <input type="text" name="product_name" class="form-control"  placeholder="Enter Product Name">
		  </div>


			<div class="form-group">
		    <label style="color: black;">Product Category:</label>
		    <select name="cat_id" id="" required="required">
		    	<option value="">Select One</option>
		    @foreach($allCategory as $Cat)
				<option value="{{$Cat['id']}}">{{$Cat['category_name']}}</option>
               @endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label>Product Brand:</label>
		    <select name="brand_id" id="" required="required">
		    	<option value="">Select One</option>
		    @foreach($allBrand as $Brand)
		    	<option value="{{$Brand['id']}}">{{$Brand['brand_name']}}</option>
		   	@endforeach
		    </select>
		  </div>
		     <div class="form-group">
		    <label>Product Price:</label>
		    <input type="text" name="product_price" class="form-control"  placeholder="Enter Product Price">
		  </div>
		  <div class="form-group">
		    <label>Product Quantity:</label>
		    <input type="text" name="product_qty" class="form-control"  placeholder="Enter Product Quantity">
		  </div>
		  
		  <div class="form-group">
		    <label>Product Image:</label>
		    <input type="file" name="product_image[]" class="form-control"  >
		  </div>
		  <!-- <div class="form-group">
		    <label>Product Image:</label>
		    <input type="text" name="product_image" class="form-control"  placeholder="Enter Product name">
		  </div> -->






		


		  <button type="submit" class="btn btn-success">Add Product</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div><!-- Modal -->








<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Products manage table</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Name</th>
								  <th>Image</th>
								  <th>Price</th>
								  <th>Quantity</th>
								  <th>Category</th>
								  <th>Brand</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

	@foreach($products as $product)
							<tr>
								<td>{{$product['id']}}</td>
								<td>{{$product['product_name']}}</td>

		<?php   $de = json_decode($product['product_image']);  ?>

       							 <td style="text-align: center;"><img style="height: 100px; width: 50px;" src="{{asset('/images/'.$de)}}" alt=""></td>
								
								<td class="center">{{$product['product_price']}}</td>
								<td class="center">{{$product['product_qty']}}</td>
								<td class="center">{{$product['cat_id']}}</td>
								<td class="center">{{$product['brand_id']}}</td>
								
								<td class="center">

									<form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
										{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
									
									<a class="btn btn-info" href="{{action('ProductController@edit', $product['id'])}}">
										<i class="halflings-icon white edit"></i>  
									</a>



									<button class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
										</button>
									</form>
									


								</td>
							</tr>
							
	@endforeach			
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


@stop