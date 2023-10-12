@extends('layouts.layoutv3')

@section('content')
<!--Strat FEATURED PRODUCTS-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mid-fdbg">
	<div class="middle1">

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 padding border">
			<div class="mid-fdcol">
				<h1 class="margin-bot20">Create any custom design for fashion</h1> accessory and promotional products such as patches, pins, and caps. We offer inexpensive options with no MOQ and fast turnaround. Start today!
			</div>
			<div class="clr"></div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 border">
			<h2 class="margin-tb35">FEATURED PRODUCTS</h2>

			<div id="owl-demo" class="owl-carousel">
				<!--Start Product List Area-->
				<?php for($i=1;$i<=8;$i++) : ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding padding-lr5">
					<div class="pd-list">
						<div class="pd-img">
							<img src="{{custom_asset('p1-1.jpg')}}" alt="not found" width="250" title="More Patches">
							<div class="img-fix img-fix1"><img src="{{custom_asset('add-image.png')}}" alt="" onclick="modalOpen('myModal');"></div>
						</div>

						<div class="pd-name">
							Luigi Vampa
						</div>

						<div class="pd-text">
							Embroidered Patches are custom manufactured by stitching threads onto a fabric backing of.....
						</div>

						<div class="pd-btn">
							<a href="#">
					SELECT
					</a>

						</div>
					</div>
					<div class="clr"></div>
				</div>
				<?php endfor; ?>
				<!--End Product List Area-->


			</div>

			<div class="clr"></div>
		</div>

        <!--Start Pop Area-->
		<div id="myModal" class="modal5">
							<!-- Modal content -->
							<div class="modal5-content5">
								<span class="close5" onclick="modelCLose('myModal')">&times;</span>
								</br>
								</br>



					<div class="container1">
			  <div class="mySlides">
				<img src="./images/p1-1.jpg" style="width:100%">
			  </div>

			  <div class="mySlides">
				 <img src="./images/p1-2.jpg" style="width:100%">
			  </div>

			  <div class="mySlides">
				 <img src="./images/p1-3.jpg" style="width:100%">
			  </div>

			  <div class="mySlides">
				 <img src="./images/p1-4.jpg" style="width:100%">
			  </div>

			  <div class="mySlides">
				 <img src="./images/p1-5.jpg" style="width:100%">
			  </div>

			 <div class="mySlides">
				 <img src="./images/p1-6.jpg" style="width:100%">
			  </div>

			 <div class="mySlides">
				 <img src="./images/p1-7.jpg" style="width:100%">
			  </div>

				 <div class="mySlides">
				 <img src="./images/p1-8.jpg" style="width:100%">
			  </div>
			<!--  <a class="prev" onclick="plusSlides(-1)">❮</a>
			  <a class="next" onclick="plusSlides(1)">❯</a>-->


			  <div class="row scrol">
				<div class="column">
				  <img class="demo cursor" src="./images/p1-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
				</div>
				<div class="column">
				  <img class="demo cursor" src="./images/p1-2.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
				</div>
				<div class="column">
				  <img class="demo cursor" src="./images/p1-3.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
				</div>
				<div class="column">
				  <img class="demo cursor" src="./images/p1-4.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
				</div>
				 <div class="column">
				  <img class="demo cursor" src="./images/p1-5.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
				</div>

				  <div class="column">
				  <img class="demo cursor" src="./images/p1-6.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
				</div>

				   <div class="column">
				  <img class="demo cursor" src="./images/p1-7.jpg" style="width:100%" onclick="currentSlide(7)" alt="">
				</div>

				   <div class="column">
				  <img class="demo cursor" src="./images/p1-8.jpg" style="width:100%" onclick="currentSlide(8)" alt="">
				</div>


			  </div>
			</div>



								<div class="clr"></div>
							</div>
						</div>
		<!--End Pop Area-->

		<div class="clr"></div>
	</div>
	<div class="clr"></div>
</div>
<!--End FEATURED PRODUCTS-->

<!--Strat Patches Products-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
	<div class="middle">


		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
			<h2 class="margin-tb35 color-black width-fix">Patches</h2>

			<span ><a href="#">View All</a></span>

			<div id="owl-patches" class="owl-carousel">
				<!--Start Product List Area-->
				<?php for($i=1;$i<=8;$i++) : ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding padding-lr5">
					<div class="pd-list">
						<div class="pd-img">
							<img src="./images/pd2.jpg" alt="" width="250"/>
							<div class="img-fix img-fix2"><img src="{{custom_asset('add-image.png')}}" alt="" id="myBtn2" onClick="modalOpen('myModal2')"/></div>

						</div>

						<div class="pd-name">
							PVC Patches
						</div>

						<div class="pd-text">
							 PVC Patches are 3D sculpted and molded using different colors plastic polymers.....
						</div>

						<div class="pd-btn">
							<a href="#">
					SELECT
					</a>

						</div>
					</div>
					<div class="clr"></div>
				</div>
				<?php endfor; ?>
				<!--End Product List Area-->


			</div>

			<div class="clr"></div>
		</div>

        <!--Start Pop Area-->
		<div id="myModal2" class="modal5">
         <!-- Modal content -->
		<div class="modal5-content5">
		<span class="close51" onClick="modelCLose('myModal2')">&times;</span>
		</br>
		</br>

			  <div class="container1">
			  <div class="mySlides2">
				<img src="./images/p2-1.jpg" style="width:100%">
			  </div>

			  <div class="mySlides2">
				<img src="./images/p2-2.jpg" style="width:100%">
			  </div>

			  <div class="mySlides2">
				<img src="./images/p2-3.jpg" style="width:100%">
			  </div>

			  <div class="mySlides2">
				 <img src="./images/p2-4.jpg" style="width:100%">
			  </div>

			  <div class="mySlides2">
				<img src="./images/p2-5.jpg" style="width:100%">
			  </div>

			 <div class="mySlides2">
				<img src=".//images/p2-6.jpg" style="width:100%">
			  </div>

			<!--  <a class="prev" onclick="plusSlides(-1)">❮</a>
			  <a class="next" onclick="plusSlides(1)">❯</a>-->


			  <div class="row scrol">
				<div class="column">
				  <img class="demo2 cursor" src="./images/p2-1.jpg" style="width:100%" onclick="currentSlide2(1)" alt="">
				</div>
				<div class="column">
				  <img class="demo2 cursor" src="./images/p2-2.jpg" style="width:100%" onclick="currentSlide2(2)" alt="">
				</div>
				<div class="column">
				  <img class="demo2 cursor" src="./images/p2-3.jpg" style="width:100%" onclick="currentSlide2(3)" alt="">
				</div>
				<div class="column">
				  <img class="demo2 cursor" src="./images/p2-4.jpg" style="width:100%" onclick="currentSlide2(4)" alt="">
				</div>
				 <div class="column">
				  <img class="demo2 cursor" src="./images/p2-5.jpg" style="width:100%" onclick="currentSlide2(5)" alt="">
				</div>
				  <div class="column">
				  <img class="demo2 cursor" src="./images/p2-6.jpg" style="width:100%" onclick="currentSlide2(6)" alt="">
				</div>
			  </div>
			</div>
								<div class="clr"></div>
							</div>
						</div>
		<!--End Pop Area-->

		<div class="clr"></div>
	</div>
	<div class="clr"></div>
</div>
<!--End Patches Products-->


<!--Strat Custom Patches Products-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
	<div class="middle">


		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
			<h2 class="margin-tb35 color-black width-fix">Custom Products</h2>

			<span><a href="#">View All</a></span>

			<div id="owl-cpatches" class="owl-carousel">
				<!--Start Product List Area-->
				<?php for($i=1;$i<=8;$i++) : ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding padding-lr5">
					<div class="pd-list">
						<div class="pd-img">
							<img src="./images/p3-1.jpg" alt="" width="250"/>
							<div class="img-fix img-fix2"><img src="./images/add-image.png" alt="" id="myBtn3" onClick="modalOpen('myModal3')"/></div>

						</div>

						<div class="pd-name">
							PVC Patches
						</div>

						<div class="pd-text">
							 PVC Patches are 3D sculpted and molded using different colors plastic polymers.....
						</div>

						<div class="pd-btn">
							<a href="#">
					SELECT
					</a>

						</div>
					</div>
					<div class="clr"></div>
				</div>
				<?php endfor; ?>
				<!--End Product List Area-->


			</div>

			<div class="clr"></div>
		</div>

        <!--Start Pop Area-->
		<div id="myModal3" class="modal5">
         <!-- Modal content -->
		<div class="modal5-content5">
		<span class="close52" onClick="modelCLose('myModal3')">&times;</span>
		</br>
		</br>

			<div class="container1">
			  <div class="mySlides3">
				<img src="images/p3-1.jpg" style="width:100%">
			  </div>

			  <div class="mySlides3">
				<img src="./images/p3-2.jpg" style="width:100%">
			  </div>

			  <div class="mySlides3">
				<img src="./images/p3-3.jpg" style="width:100%">
			  </div>

			  <div class="mySlides3">
				 <img src="./images/p3-4.jpg" style="width:100%">
			  </div>

			  <div class="mySlides3">
				<img src="./images/p3-5.jpg" style="width:100%">
			  </div>

			 <div class="mySlides3">
				<img src="./images/p3-6.jpg" style="width:100%">
			  </div>

			<!--  <a class="prev" onclick="plusSlides(-1)">❮</a>
			  <a class="next" onclick="plusSlides(1)">❯</a>-->


			  <div class="row scrol">
				<div class="column">
				  <img class="demo3 cursor" src="./images/p3-1.jpg" style="width:100%" onclick="currentSlide3(1)" alt="">
				</div>
				<div class="column">
				  <img class="demo3 cursor" src="./images/p3-2.jpg" style="width:100%" onclick="currentSlide3(2)" alt="">
				</div>
				<div class="column">
				  <img class="demo3 cursor" src="./images/p3-3.jpg" style="width:100%" onclick="currentSlide3(3)" alt="">
				</div>
				<div class="column">
				  <img class="demo3 cursor" src="./images/p3-4.jpg" style="width:100%" onclick="currentSlide3(4)" alt="">
				</div>
				 <div class="column">
				  <img class="demo3 cursor" src="./images/p3-5.jpg" style="width:100%" onclick="currentSlide3(5)" alt="">
				</div>
				  <div class="column">
				  <img class="demo3 cursor" src="./images/p3-6.jpg" style="width:100%" onclick="currentSlide3(6)" alt="">
				</div>
			  </div>
			</div>
								<div class="clr"></div>
							</div>
        </div>
		<!--End Pop Area-->

		<div class="clr"></div>
	</div>
	<div class="clr"></div>
</div>
<!--End Custom Patches Products-->
@endsection
