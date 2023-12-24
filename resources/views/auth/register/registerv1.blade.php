@extends('layouts.layoutv2')
@section('content')
<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
    <div class="middle mtb-60">

    <h1 class="text-center mb-40">Apply to Join </h1>
    <p class="text-center">
    If you would like to join Perthshire Chamber of Commerce, please fill in your details in the form below. We will send you an invoice after we receive your submission. Your entry will be published in our directory once payment is received. We would love to hear from you.
    <br><br>
    Please have a look at our Benefits from the top menu to see what is included.
    <br><br>
    Our membership fees offer excellent value for money and return on investment with New Starts trading within their first year being able to take advantage of an introductory rate of £50 + vat.
    </p>

<div class="bal-btn"><a href="benifits"></i> Benefits</a></div> 

    <!--Start Table listing-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb35">
    <h2 class="text-center mb-40">Annual Subscription</h2>
    <div class="table-div1">
    <table>

    <tr>
        <th class="side1">Category</th>
        <th>Size of Business</th>
        <th>Rate</th>
        <th>VAT</th>
        <th class="side2">Total inc VAT</th>
      </tr>

    <!--Start Listing 1-->
      <tr>
        <td class="list10">New Start</td>
        <td class="list20">Trading within first year</td>
            <td class="list20">£50.00</td>
        <td class="list20 side2">£10.00</td>
        <td class="list20 side2">£60.00</td>
      </tr>
     <!--End Listing 1-->

    <!--Start Listing 2-->
      <tr>
        <td class="list10">Band A</td>
        <td class="list20">1-5 Employees</td>
            <td class="list20">£160</td>
        <td class="list20 side2">£32.00</td>
        <td class="list20 side2">£192.00</td>
      </tr>
     <!--End Listing 2-->


    <!--Start Listing 3-->
      <tr>
        <td class="list10">Band B</td>
        <td class="list20">6-10 Employees</td>
            <td class="list20">£190</td>
        <td class="list20 side2">£38.00</td>
        <td class="list20 side2">£228.00</td>
      </tr>
     <!--End Listing 3-->


    <!--Start Listing 4-->
      <tr>
        <td class="list10">Band C</td>
        <td class="list20">11-25 Employees</td>
            <td class="list20">£238</td>
        <td class="list20 side2">£47.60</td>
        <td class="list20 side2">£285.60</td>
      </tr>
     <!--End Listing 4-->


    <!--Start Listing 5-->
      <tr>
        <td class="list10">Band D</td>
        <td class="list20">	26-50 Employees</td>
            <td class="list20">£299</td>
        <td class="list20 side2">£59.80</td>
        <td class="list20 side2">£358.80</td>
      </tr>
     <!--End Listing 5-->

    <!--Start Listing 6-->
      <tr>
        <td class="list10">Band E</td>
        <td class="list20">51-100 Employees</td>
            <td class="list20">£442</td>
        <td class="list20 side2">£88.40</td>
        <td class="list20 side2">£530.40</td>
      </tr>
     <!--End Listing 6-->

    <!--Start Listing 7-->
      <tr>
        <td class="list10">Band F</td>
        <td class="list20">101-250 Employees</td>
            <td class="list20">£552</td>
        <td class="list20 side2">£110.40</td>
        <td class="list20 side2">£662.40</td>
      </tr>
     <!--End Listing 7-->

    <!--Start Listing 8-->
      <tr>
        <td class="list10">Band G</td>
        <td class="list20">Over 250 Employees</td>
            <td class="list20">£605</td>
        <td class="list20 side2">£121.00</td>
        <td class="list20 side2">£726.00</td>
      </tr>
     <!--End Listing 8-->


    </table>
    </div>
    <div class="clr"></div>
    </div>
    <!--End Table listing-->


    <!--Strat Foram Area-->
    <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mtb-25">

    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border padding form-none"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 border join-bg">

    <h5 class="text-center mb-25">Join GMC Flonix</h5>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Company Name <span class="red">*</span></label>
    <input type="text" class="join-input" value="" placeholder="Company Name *">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Trading As <span class="red">*</span></label>
    <input type="text" class="join-input" value="" placeholder="Trading As *">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Date Established <span class="red"> *</span></label>
    <div>
    <select name="#" class="date-input" aria-required="true">
        <option value="">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
    </select>

    <select name="#" class="date-input" aria-required="true">
        <option value="">Month</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
        </select>

    <select name="#" class="date-input" aria-required="true">
    <option value="">Year</option><option value="2024">2024</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option>
    </select>

    </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Number of Staff <span class="red"> *</span></label>
    <input type="number" class="join-input" value="" placeholder="Number of Staff">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Address 1<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Address 1">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Address 2<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Address 2">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Address 3<span class="red"></span></label>
    <input type="text" class="join-input" value="" placeholder="Address 3">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Address 4<span class="red"></span></label>
    <input type="text" class="join-input" value="" placeholder="Address 4">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Town<span class="red"></span> *</label>
    <input type="text" class="join-input" value="" placeholder="Town">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Country<span class="red"></span> *</label>
    <input type="text" class="join-input" value="" placeholder="Country">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Postcode<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Postcode">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Email Address<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Email Address">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Telephone No<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Telephone No">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Mobile Number<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Mobile Number">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
    <div>
    <label>Are you happy for PCC to promote your business?<span class="red"> *</span></label>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    <span class="font-12">Yes. If so, please provide the following URLs (if available):</span>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    <span class="font-12">No</span>
    </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Website Url<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Website Url">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Category (select up to three)<span class="red"> *</span></label>
    <div id="ms1" class="form-control"></div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Facebiook page (n/a if none)<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Facebiook page">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Twitter page (n/a if none)<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Twitter page">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Instagram page (n/a if none)<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="Instagram page">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
    <label>Your LinkedIn page (n/a if none)<span class="red"> *</span></label>
    <input type="text" class="join-input" value="" placeholder="LinkedIn page">
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
    <div>
    <label>Mentoring<span class="red"> *</span></label>
    <div class="font-12 mb-20">Are you interested in receiving free mentoring for your business?</div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    Yes
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    No
    </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
    <div>
    <label>Being a Mentor<span class="red"> *</span></label>
    <div class="font-12 mb-20">Are you interested in being a mentor?</div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    Yes
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    No
    </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
    <div>
    <label>Exporting<span class="red"> *</span></label>
    <div class="font-12 mb-20">Are you interested in exporting?</div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    Yes
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    No
    </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
    <div>
    <label>The Chamber Plan: Healthcare from Westfield Health<span class="red"> *</span></label>
    <div class="font-12 mb-20">Would you like more information about the Chamber Plan from Westfield Health? (This service can be used to recover costs incurred from accessing private healthcare including consultations, scans and dental work among many others).</div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    Yes
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
    <input type="radio" class="radio-input">
    No
    </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
    <label>Please let us know your top 3 concerns/priorities as a business joining Perthshire Chamber of Commerce:<span class="red"> *</span></label>
    <textarea class="join-comment"></textarea>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
    <label>Please tell us about your business, and what makes it different, in 100 words:<span class="red"> *</span></label>
    <textarea class="join-comment"></textarea>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
    <label>Please tell us about your business, and what makes it different, in 100 words:<span class="red"> *</span></label>
    <textarea class="join-comment"></textarea>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mtb-40">
    <input type="submit" class="ct-submit" value="Submit">
    </div>

    </div>
    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border padding form-none"></div>

    </div>-->
        
<div class="bal-btn"><a href="https://zfrmz.eu/WE4879RxJDaqMSUINzn8" target="_blank"></i> Join Now</a></div> 


    <!--End Foram Area-->



    <div class="clr"></div>
    </div>
    <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
