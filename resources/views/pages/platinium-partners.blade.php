@extends('layouts.layoutv2')

@section('content')
	<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
    <div class="middle mtb-60">

    <h1 class="mb-80 text-center">Platinum Partners</h1>

    <div class="row">
                           <?php for($i=1;$i<=8;$i++) : ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

                            <div class="main-box">

                            <div class="brand-img">
                             <a href="#"><img src="./images/brand/<?php echo $i ?>.png" alt="" width="150"/></a>
                            </div>
                            <div class="brand-name">
                            <a href="#">
                            Perthshire Advertiser
                            </a>
                            </div>
                            <div class="brand-text">
                            91% of small businesses don’t make their 10th birthday – often because the owner is working so deeply IN the business that they don’t spend the time working ON their business.
                            </div>

                            </div>

                            <div class="clr"></div>
                            </div>
                            <?php endfor; ?>
                        </div>


    </div>
    <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
