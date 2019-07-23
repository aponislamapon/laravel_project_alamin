@extends('admin.layouts.default')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="#">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Customer</a></li>
</ul>
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Customer</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{action('CustomerController@update', $customer['id'])}}" method="post">
							{{csrf_field()}}
							<fieldset>
							<input type="hidden" name="_method" value="PATCH">
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Customer name</label>
								<div class="controls">
								  <input name="name" type="text" id="inputSuccess" value="{{$customer->name}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Email</label>
								<div class="controls">
								  <input name="email" type="email" id="inputSuccess" value="{{$customer->email}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Password</label>
								<div class="controls">
								  <input name="password" type="password" id="inputSuccess" value="{{$customer->password}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Mobile</label>
								<div class="controls">
								  <input name="mobile" type="text" id="inputSuccess" value="{{$customer->mobile}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Country</label>
								<div class="controls">
								  <input name="country" type="text" id="inputSuccess" value="{{$customer->country}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Zip code</label>
								<div class="controls">
								  <input name="zip_code" type="text" id="inputSuccess" value="{{$customer->zip_code}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Address</label>
								<div class="controls">
								  <input name="address" type="text" id="inputSuccess" value="{{$customer->address}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
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
