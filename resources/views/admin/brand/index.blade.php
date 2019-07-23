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

<h1>Manage Brand</h1>
<!-- Button trigger modal -->
<a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">add new Brand</a>

<br><br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Add new Brand</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="{{action('BrandController@store')}}" method="post">
			{{csrf_field()}}
		  <div class="form-group">
		    <label>Brand Name:</label>
		    <input type="text" name="brand_name" required="required" class="form-control"  placeholder="Enter Brand Name">
		  </div> 		 
		  <br><br><br>
		  <button type="submit" class="btn btn-success">Add Brand</button>
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Brands manage table</h2>
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
								  <th>Brand Id</th>								  
								  <th>Name</th>								  
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
@foreach($brands as $brand)

							<tr>								
								<td class="center">{{$brand['id']}}</td>						
								<td class="center">{{$brand['brand_name']}}</td>						
								<td class="center">
									<form action="{{action('BrandController@destroy', $brand['id'])}}" method="post">									
									<a class="btn btn-info"  href="{{action('BrandController@edit', $brand['id'])}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									
										{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">

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