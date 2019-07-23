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

<h1>Customers</h1>


<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Customer manage table</h2>
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
					  <th>Email</th>
					  <th>Password</th>								  
					  <th>Mobile</th>								  
					  <th>Country</th>								  
					  <th>Zip Code</th>
					  <th>Address</th>
					  <th>Action</th>
				  </tr>
			  </thead>   
			  <tbody>
			 @foreach($allcustomer as $customer)
				<tr>								
					<td class="center">{{$customer['id']}}</td>						
					<td class="center">{{$customer['name']}}</td>						
					<td class="center">{{$customer['email']}}</td>					
					<td class="center">{{$customer['password']}}</td>						
					<td class="center">{{$customer['mobile']}}</td>
					<td class="center">{{$customer['country']}}</td>
					<td class="center">{{$customer['zip_code']}}</td>
					<td class="center">{{$customer['address']}}</td>
					<td class="center">
						<form action="{{action('CustomerController@destroy', $customer['id'])}}" method="post">									
						<a class="btn btn-info"  href="{{action('CustomerController@edit', $customer['id'])}}">
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