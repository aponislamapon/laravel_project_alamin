@extends('admin.layouts.default')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="#">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Order</a></li>
</ul>
<h1>Customer's Orders</h1>

<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Combined All Table</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>Order</th>
									  <th>Product Id</th>
									  <th>Product Name</th>
									  <th>Quantity</th>
									  <th>Trx Id</th>

									  <th>Country</th>
									  <th>City</th>
									  <th>Zip Code</th>
									  <th>Address</th>							  
									  <th>Payment Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>1</td>
									<td class="center">1</td>
									<td class="center">Sumsung Galaxy $10</td>
									<td class="center">1</td>
									<td class="center">9L434522M7706801A</td>
									<td class="center"></td>
									<td class="center"></td>
									<td class="center"></td>
									<td class="center"></td>
									<td class="center">
										<span class="label label-success">Completed</span>
									</td>                                       
								</tr>
								<tr>
									<td>4</td>
									<td class="center">1</td>
									<td class="center">Sumsung Galaxy $10</td>
									<td class="center">1</td>
									<td class="center">8L434522M7706801N</td>
									<td class="center"></td>
									<td class="center"></td>
									<td class="center"></td>
									<td class="center"></td>

									<td class="center">
										<span class="label label-warning">Pending</span>
									</td>                                       
								</tr>
								


								
								
								
								                                  
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->
			</div><!--/row-->


@endsection