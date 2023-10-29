@extends('layouts.layoutv2')
@section('content')
	
<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<div class="middle mtb-60">	

<!--Start Blog Details Posts Area-->
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 border">
	
	
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
  <img src="images/blog-img.png" alt="" width="100%" class="blog-img"/>
</div>
	
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
<div class="post-date">
<span class="day">{{ $Blog->day}}</span>
<span class="month">{{ $Blog->month}}</span>
</div>
<h1>{{ $Blog->title }}</h1>
<div class="post-meta">
<span class="meta-author">
<i class="far fa-user"></i>
<span>By</span>
<a href="#" title="">Joe Doe</a>
</span>
<span class="meta-cats">
<i class="far fa-folder"></i>
<a href="#" rel="category tag">Articles</a>, <a href="#" rel="category tag">Asides</a>
</span>
<span class="meta-comments">
<i class="far fa-comments"></i>
<a href="#" class="hash-scroll">3 Comments</a></span>
</div>
	
<p>
Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis, volutpat nec ullamcorper eget, sagittis vel enim. Nam sit amet ante egestas, gravida tellus vitae, semper eros. Nullam mattis mi at metus egestas, in porttitor lectus sodales. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum vero voluptatum.
<br><br>
Lorem quasi aliquid maiores iusto suscipit perspiciatis a aspernatur et fuga repudiandae deleniti excepturi nesciunt animi reprehenderit similique sit. ipsum dolor sit amet, consectetur adipisicing elit. Qui at laborum nulla quae quibusdam molestias earum suscipit dolorum debitis hic sint asperiores maxime deserunt neque explicabo molestiae autem totam illum?
<br><br>
Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti. Phasellus interdum risus at mi ullamcorper lobortis. In et metus aliquet, suscipit leo.
<br><br>
Donec sed tincidunt lacus. Duis vehicula aliquam vestibulum. Aenean at mollis mi. Cras ac urna sed nisi auctor venenatis ut id sapien. Vivamus commodo lacus lorem, a tristique sapien tempus non. Donec fringilla cursus porttitor. Morbi quis massa id mi pellentesque placerat. Nam scelerisque sit amet diam id blandit. Nullam ultrices ligula at ligula tincidunt, sit amet aliquet mi pellentesque. Aenean eget fermentum risus. Aenean eu ultricies nulla, id bibendum libero. Vestibulum dui augue, malesuada nec tellus vel, egestas condimentum ipsum. Vestibulum ut.
<br><br>
Integer semper quam turpis, id dapibus nunc ultrices at. Vestibulum eget orci lobortis, imperdiet diam a, ornare eros. Nam porttitor rutrum massa, eu varius velit facilisis at. Quisque porta elit et viverra suscipit. Proin laoreet, nisl et auctor mollis, felis sapien aliquet felis, nec facilisis tellus enim vitae enim. Nam rhoncus enim diam, a consequat nisi bibendum pulvinar. Donec aliquam lectus vitae ante pulvinar facilisis. Curabitur sed sem est.

</p>
	
<div class="clr"></div>
</div>
	
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding mtb-25">
<div class="btn_wrap">
        <span class="share-text"><i class="fas fa-share-alt-square" style="color: #ffffff;font-size: 18px;"></i>&nbsp;Share this post</span>
        <div class="container">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-github"></i></a>
           <a href="#"><i class="fas fa-envelope"></i></a>
        </div>
    </div>
<div class="clr"></div>
</div>	
	
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding mtb-25">

<div>
<i class="far fa-user post-author mb-25"></i>
<h5>Author</h5>	
</div>	

	
<!--Start Author Comments  Area-->	
<div class="col-xs-12 padding">
<img src="images/benefits/6.jpg" alt="" class="img-thumbnail"/>
<strong>Joe Doe</strong>	
<p class="p-author">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.
</p>
</div>
<!--End Author Comments  Area-->	

<div class="col-xs-12 padding mtb-25">
<i class="far fa-comments post-author"></i>
<h5>Comments (3)</h5>	
</div>
	
<!--Start Comments list Area-->	
<?php for($i=1;$i<=3;$i++) : ?>
<div class="col-xs-12 padding mb-25">
	
<img src="./images/comments/<?php echo $i ?>.jpg" alt="" width="100%" class="img-thumbnail img-thumbnail1" />

<div class="comment-block">
<div class="comment-arrow"></div>
<strong>Joe Doe</strong>
<span class="pt-right">
<a href="#">Reply</a>						
</span>

<p class="p-author mtb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>

<div class="pt-right">June 28, 2016 at 1:03 pm</div>	
	
</div>

	
<div class="clr"></div>	
</div>
<?php endfor; ?>
<!--End Comments list Area-->	
	
	
<div>
<h5>Leave a Reply </h5>	
</div>
	
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comment-form">
<p class="mb-25">
Your email address will not be published. Required fields are marked *
</p>
	
<label for="comment">Comment <span class="required">*</span></label>	
<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="" class="textarea"></textarea>	

<label for="comment">Name <span class="required">*</span></label>	
<input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" required="" class="input-name">

<label for="email">Email <span class="required">*</span></label>
<input id="url" name="url" type="url" value="" size="30" maxlength="200" autocomplete="url" class="input-name">	

<input name="submit" type="submit" id="submit" class="post-sub" value="Post Comment">	
	
	
</div>

	
<div class="clr"></div>	
</div>
	
	
</div>
<!--End Blog Details Posts Area-->
	
<!--Start Latest Posts Area-->
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 border">
@include('blogs.left')
</div>
<!--End Latest Posts Area-->
	
	
<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
<!--End Middle-->
@endsection