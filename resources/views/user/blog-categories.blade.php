<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/extra.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="./images/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Blog Categories Listing- Perthshire Chamber of Commerce</title>
</head>

<body>


	<!--Start Banner Header Area-->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		<?php include_once "banner-header.php"; ?>
	</div>
	<!--End Banner Header Area-->



	<!--Start Middle-->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		<div class="middle mtb-60">

			<h1 class="mb-40 text-center">Blog Categories</h1>

			<div class="col-xs-4 col-sm-8 col-md-8 col-lg-8 padding border mb-25">
				<span class="listin-found"><b>Platinum Partners &nbsp;(08)</b> Listings Found</span>
			</div>
			
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
			<div class="addnew-btn"><a href="#">Add New</a></div>
<div class="clr"></div>	
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
							
							
							
							
						            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
						<i class="fas fa-edit" style="color: #0000ff;"></i>
						<a href="#" style="color: #000;font-size: 16px;">Edit</a>
						</div>
						
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
						<i class="fas fa-trash-alt" style="color: #ff0000;"></i>
						<a href="#" style="color: #000;font-size: 16px;">Delet</a>
						</div>
						
<div class="clr"></div>		
							
							
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

	<!--Start Footer-->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		<?php include_once "footer.php"; ?>
	</div>
	<!--End Footer-->
<style>
	.addnew-btn a{
  margin: 0px 0px 15px 0px;
  padding: 15px 25px 15px 25px !important;
  width: auto;
  height: auto;
  font-size: 14px;
  color: #fff;
  border-radius: 10px;
  font-weight: 100;
  text-align: center;
  border: 0px solid #eee;
  background-color: #2b9acb;
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  font-family: 'Montserrat-Regular';
  cursor: pointer;
display: inline-block;
  transition: all 0.4s linear;
}
</style>


</body>
</html>