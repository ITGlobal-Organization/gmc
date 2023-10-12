<!--Start Pop Area-->
{{-- <div id="myModal3" class="modal5"> --}}
    <!-- Modal content -->
    <div class="modal5-content5">
        <span class="close52" onClick="modelCLose('myModal3')">&times;</span>
        </br>
        </br>
        <div class="container1">
            @foreach($products as $product)
            <div class="mySlides">
                <img src="{{ $product->image_url }}" style="width:100%">
            </div>
            @endforeach
      
            <div class="row scrol">
                @foreach($products as $product)

                <div class="column">
                    <img class="demo cursor" src="{{ $product->image_url }}" style="width:100%" onclick="currentSlide(1)" alt="">
                </div>
                @endforeach
              
            </div>
        </div>
        <div class="clr"></div>
    </div>
{{-- </div> --}}
    <!--End Pop Area-->
