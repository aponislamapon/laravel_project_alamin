@extends('admin.layouts.default')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="#">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Country</a></li>
</ul>
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Create Country</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{action('CountryController@update', $countrys['id'])}}" method="post">
							{{csrf_field()}}
							<fieldset>
							<input type="hidden" name="_method" value="PATCH">
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Country Name</label>
								<div class="controls">
								  <input name="country_name" type="text" id="inputSuccess" value="{{$countrys->country_name}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              
                      
							  

							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Shipping Charge</label>
								<div class="controls">
								  <input name="shipping_charge" type="text" id="inputSuccess" value="{{$countrys->shipping_charge}}">
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
