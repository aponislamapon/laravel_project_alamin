@extends('admin.layouts.default')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="#">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Brand</a></li>
</ul>
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Create Brand</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{action('BrandController@update', $brands['id'])}}" method="post">
							{{csrf_field()}}
							<fieldset>
							<input type="hidden" name="_method" value="PATCH">
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Brand name</label>
								<div class="controls">
								  <input name="brand_name" type="text" id="inputSuccess" value="{{$brands->brand_name}}">
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
