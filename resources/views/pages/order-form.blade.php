<!--Start Middle-->
@extends('layouts.layoutv2')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
    <div class="middle">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding text-center margin-tb30 text-center">
        <img src="images/top-sing2.png" alt=""/>
        </div>

        <h1 class="h1-black text-center">Embroidery Patches</h1>
    <!--Start Select Size-->
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border padding list-ht">
        <h2 class="h2-orderlist">Select Size</h2>

        <div id="list5">
            <ul>
            <?php for($i=1;$i<=6;$i++) : ?>
            <li><a href="#">75 inch</a></li>
            <?php endfor; ?>
            </ul>
            <div class="custom-list">custom</div>
                <div class="clr"></div>
            </div>

        </div>
    <!--End Select Size-->
    <!--Start Select Quantity-->
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border padding list-ht">
            <h2 class="h2-orderlist">Select Quantity</h2>

            <div id="list5">
                    <ul>
                    <?php for($i=1;$i<=6;$i++) : ?>
                    <li><a href="#">25</a></li>
                    <?php endfor; ?>
                    </ul>
                    <div class="custom-list">custom</div>
            </div>
            <div class="clr"></div>
        </div>
    <!--End Select Quantity-->
    <!--Start Backing-->
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border padding list-ht">
        <h2 class="h2-orderlist">Backing</h2>
    <div id="list5">
        <ul>


    <?php for($i=1;$i<=4;$i++) : ?>
    <li><a href="#">Iron on</a></li>

    <div class="tooltip1">
    <img src="images/icon-tooltip.png" alt=""/>
      <span class="tooltiptext1">
    Tooltip Text Here
    <img src="images/p3.png" alt=""/>
    </span>
    </div>
    <?php endfor; ?>
        </ul>
        <div class="clr"></div>
    </div>
    </div>
    <!--End Backing-->

    <!--Start Border-->
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border padding list-ht">
    <h2 class="h2-orderlist">Border</h2>
    <div id="list5">
        <ul>


    <?php for($i=1;$i<=4;$i++) : ?>
    <li><a href="#">Iron on</a></li>

    <div class="tooltip1">
    <img src="images/icon-tooltip.png" alt=""/>
      <span class="tooltiptext1">
         Tooltip Text Here
         <img src="images/p1.png" alt=""/>
    </span>
    </div>



    <?php endfor; ?>
        </ul>
        <div class="clr"></div>
    </div>
    </div>
    <!--End Border-->


    <!--Start Addons-->
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 border padding list-ht">
    <h2 class="h2-orderlist">Addons</h2>
    <div id="list6">
        <ul>


    <?php for($i=1;$i<=4;$i++) : ?>
    <li><a href="#">Glow in the dark</a></li>

    <div class="tooltip1 tooltip2">
    <img src="images/icon-tooltip.png" alt=""/>
      <span class="tooltiptext1">
         Tooltip Text Here
              <img src="images/p2.png" alt=""/>
        </span>
    </div>



    <?php endfor; ?>
        </ul>
        <div class="clr"></div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
    <h2 class="h2-orderlist">Upload artwork</h2>

    <div class="upload-btn-wrapper-samp">
                        <button class="btn1"><i class="fal fa-paperclip" style="color: #000000;"></i> Attach file</button>
                        <input type="file" name="myfile">
                      </div>
    <div class="clr"></div>
    </div>

    </div>
    <!--End Addons-->


    <!--Start Border-->
    <div class="col-xs-12 col-sm-8 col-md-3 col-lg-2 border padding list-ht">
    <div class="subtotal">

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding white">Subtotal:</div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding white"><b>$280.00</b></div>

    <div class="co-btn"><a href="#">Checkout</a></div>
    <div class="eq-btn">
    <a href="mailto:support@pandapatches.com">Email Quote</a>
    </div>

    <div class="clr"></div>
    </div>
    <div class="clr"></div>
    </div>
    <!--End Border-->

    </div>
    <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
