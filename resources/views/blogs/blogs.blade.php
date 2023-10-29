@extends('layouts.layoutv2')
@section('content')
	<!--Start Middle-->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		<div class="middle mtb-60">

			<h1 class="mb-40 text-center">Blog Categories</h1>

			<div class="col-xs-8 col-sm-10 col-md-10 col-lg-10 padding border mb-25">
				<span class="listin-found"><b>{{ trans('lang.blogs')}} &nbsp;(08)</b> {{ trans('lang.listing')}} {{ trans('lang.found')}}</span>
			</div>

			<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 padding border mb-25">

				<select class="pd-sort">
					<option value="hide">Sort by</option>
					<option value="Name">A to Z</option>
					<option value="Name">Z to A</option>
					<option value="Name">Latest Listing</option>
					<option value="Name">Oldest Listing</option>
				</select>

			</div>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>	

			<div class="row">
		 <?php for($i=1;$i<=8;$i++) : ?>
                         <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						
						<div class="main-box">
						
						<div class="box-img card-image">
						  <a href="blog-details.php"><img src="./images/benefits/<?php echo $i ?>.jpg" alt="" width="100%" class="box-img" /></a>
						</div>
						<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>
						<div class="box-name">
						<a href="#">
						Business Gateway: Managing People – Sustaining Employee Engagement 	
						</a>
						</div>
						<div class="box-text">
						What to expect from this webinar New and established businesses will require a business plan for	
						</div>
							
						</div>
						
						<div class="clr"></div>
						</div>
						<?php endfor; ?>
			</div>



			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
	<!--End Middle-->

@endsection