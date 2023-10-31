@extends('layouts.layoutv2')

@section('content')
<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
    <div class="middle mtb-60">

    <h1 class="text-center mb-40">Events Calendar</h1>
    <p class="text-center mb-60">
    Organised to educate, inform and network, our comprehensive programme of events allows something for everyone within the business community.  Held at various times – from breakfast meetings to supper socials – there should be something to work around business and personal commitments.
    <br><br>
    Events are intented to bring focus to different areas throughout the whole Shire, where possible we try to alternate between central and rural locations.
    <br><br>
    If you would like to discuss hosting an event or have an idea for our future calendar then contact the Chamber office.
    </p>


    <!--Start search Area-->
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 border padding border">

    <div class="search-oh search-box1">
    <input type="image" class="oh-btn" img="" src="images/brn-search.png">
    <input type="text" placeholder="Search" class="oh-input">
    <div class="clr"></div>
    </div>
    <div class="clr"></div>
    </div>
    <!--End search Area-->

    <!--Start calendar Area-->
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 border padding border">

    <div class="search-ohch">
    <input class="ohch-input" name="date" id="" placeholder="Date for visit DD-MM-YYYY" required="required" type="date">
    <div class="clr"></div>
    </div>

    <span class="ab-to">TO</span>

    <div class="search-ohch">
    <input class="ohch-input" name="date" id="" placeholder="Date for visit DD-MM-YYYY" required="required" type="date">
    <div class="clr"></div>
    </div>

    <div class="clr"></div>
    </div>
    <!--Start calendar Area-->


    <!--Start Table listing-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb35">
    <div class="table-div1">
    <table>

    <tr>
        <th class="side1">Date</th>
        <th>Title</th>
        <th>Time</th>
        <th>Location</th>
        <th>City</th>
        <th>Cost</th>
        <th class="side2">Booking Link</th>
      </tr>

    <?php for($i=1;$i<=8;$i++) : ?>
      <tr>
        <td class="list10">08 Oct 2023</td>
        <td class="list20">
    In Person Networking Breakfast and Member Visit
    </td>
        <td class="list20">12:30 pm</td>
        <td class="list20">Taste Perthshire</td>
        <td class="list20">Bankfoot</td>
            <td class="list20">$250</td>
        <td class=" list30"><span class="btn-download"><a href="#">Book Here</a></span></td>
      </tr>
    <?php endfor; ?>



    </table>
    </div>
    <div class="clr"></div>
    </div>
    <!--End Table listing-->



    <div class="clr"></div>
    </div>
    <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
