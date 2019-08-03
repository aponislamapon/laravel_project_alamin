<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Apon's Ecommerce</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/mycss.css')}}" rel='stylesheet' type='text/css'>

	 <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
	<!-- end: CSS -->
	
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->

	<!-- <script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script> -->
	
		
</head>

<body>
		<!-- start: Header -->
	@include('admin.layouts.navbar')
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			@include('admin.layouts.sidebar')
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->

			<div id="content" class="span10">	
			
				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="#">Home</a> 
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Dashboard</a></li>
				</ul>
				
				<!-- <div>
				<img src="{{asset('backend/img/dashboard.png')}}" alt="">
				</div> -->



			<div class="row-fluid">				
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number">854<i class="icon-arrow-up"></i></div>
					<div class="title">visits</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>	
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
					<div class="number">123<i class="icon-arrow-up"></i></div>
					<div class="title">sales</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
					<div class="number">982<i class="icon-arrow-up"></i></div>
					<div class="title">orders</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
					<div class="number">678<i class="icon-arrow-down"></i></div>
					<div class="title">visits</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>	
				
			</div>	

				<div class="row-fluid hideInIE8 circleStats">
				
				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox yellow">
						<div class="header">Disk Space Usage</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="58" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="number">20000</span>
								<span class="unit">MB</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number">50000</span>
								<span class="unit">MB</span>
							</span>	
						</div>
                	</div>
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox green">
						<div class="header">Bandwidth</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="78" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number">5000</span>
								<span class="unit">GB</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number">5000</span>
								<span class="unit">GB</span>
							</span>	
						</div>
                	</div>
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox greenDark">
						<div class="header">Memory</div>
						<span class="percent">percent</span>
                    	<div class="circleStat">
                    		<input type="text" value="100" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>	
						</div>
                	</div>
				</div>

				<div class="span2 noMargin" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox pink">
						<div class="header">CPU</div>
						<span class="percent">percent</span>
                    	<div class="circleStat">
                    		<input type="text" value="83" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number">64</span>
								<span class="unit">GHz</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number">3.2</span>
								<span class="unit">GHz</span>
							</span>	
						</div>
                	</div>
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox orange">
						<div class="header">Memory</div>
						<span class="percent">percent</span>
                    	<div class="circleStat">
                    		<input type="text" value="100" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>	
						</div>
                	</div>
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox greenLight">
						<div class="header">Memory</div>
						<span class="percent">percent</span>
                    	<div class="circleStat">
                    		<input type="text" value="100" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>	
						</div>
                	</div>
				</div>
						
			</div>	

			<div class="row-fluid">
				
				<div class="span8 widget blue" onTablet="span7" onDesktop="span8">
					
					<div id="stats-chart2"  style="height:282px" ></div>
					
				</div>
				
				<div class="sparkLineStats span4 widget green" onTablet="span5" onDesktop="span4">

                    <ul class="unstyled">
                        
                        <li><span class="sparkLineStats3"></span> 
                            Pageviews: 
                            <span class="number">781</span>
                        </li>
                        <li><span class="sparkLineStats4"></span>
                            Pages / Visit: 
                            <span class="number">2,19</span>
                        </li>
                        <li><span class="sparkLineStats5"></span>
                            Avg. Visit Duration: 
                            <span class="number">00:02:58</span>
                        </li>
                        <li><span class="sparkLineStats6"></span>
                            Bounce Rate: <span class="number">59,83%</span>
                        </li>
                        <li><span class="sparkLineStats7"></span>
                            % New Visits: 
                            <span class="number">70,79%</span>
                        </li>
                        <li><span class="sparkLineStats8"></span>
                            % Returning Visitor: 
                            <span class="number">29,21%</span>
                        </li>

                    </ul>
					
					<div class="clearfix"></div>

                </div><!-- End .sparkStats -->

			</div>

		

			








			</div><!--/end: Content -->
			





		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	<div class="clearfix"></div>
	
@include('admin.layouts.footer')
	
	<!-- start: JavaScript-->

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('backend/js/modernizr.js')}}"></script>
	
		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('backend/js/excanvas.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('backend/js/counter.js')}}"></script>
	
		<script src="{{asset('backend/js/retina.js')}}"></script>

		<script src="{{asset('backend/js/custom.js')}}"></script>

	<!-- end: JavaScript-->
	
</body>
</html>
