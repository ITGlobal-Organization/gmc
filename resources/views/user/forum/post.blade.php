@extends('layouts.auth')
@section('content')
 <!--Start Middle-->
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
         <div class="middle mtb-60">
            <!--Start Blog Details Posts Area-->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 border">
               <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                  <img src="images/blog-img.png" alt="" width="100%" class="blog-img"/>
               </div> -->
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                  <div class="post-date">
                     <span class="day">{{ Helper::padtoLeft
                        (strval($Post->day),2)}}</span>
                     <span class="month">{{ $Post->month}}</span>
                  </div>
                  <h1>{{ $Post->title}}</h1>
                  <div class="post-meta">
                     <span class="meta-author">
                     <i class="far fa-user"></i>
                     <span>{{ trans('lang.by')}}</span>
                     <a href="#" title="">{{$Post->user}}</a>
                     </span>
                     <span class="meta-cats">
                     <i class="far fa-folder"></i>
                     <a href="#" rel="category tag">{{ $Post->topic}}</a>
                     </span>
                     <span class="meta-comments">
                     <i class="far fa-comments"></i>
                     <a href="#" class="hash-scroll">{{ count($Post->replies)}} {{ trans('lang.comments')}}</a></span>
                  </div>
                  <p>
                     {!! $Post->description !!}
                  </p>
                  <div class="clr"></div>
               </div>
               <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding mtb-25">
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
               </div> -->
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding mtb-25">
                
               <div class="replies">
                
               </div>
                 
                  <!--End Comments list Area-->	
                  @include('user.forum.comment-form')
                  <div class="clr"></div>
               </div>
            </div>
            <!--End Blog Details Posts Area-->
            <!--Start Latest Posts Area-->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 border">
                @include('user.forum.right-sidebar')	
            </div>
            <!--End Latest Posts Area-->
            <div class="clr"></div>
         </div>
         <div class="clr"></div>
      </div>
      <!--End Middle-->
@endsection

@section('scripts')
<script>
    let filters = {
    start:1,
    limit:5,
    post_id:"{{ $Post->id }}"
  }

  $(document).ready(function(){
    getReplies();
  })
    $('.store').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            ajaxPost("{{ prefix_route('forum.replies.store') }}", form, '.contact-success', '.contact-error');

            getReplies(false);
        });

    async function getReplies(loader=true){
        await ajaxGet("{{ prefix_route('forum.replies.listing') }}",filters ,".replies", responseType = 'html',null,loader);
       
    }


    let paginationConfig = {
            renderFunction:getReplies
        }
</script>
<script src="{{ custom_asset('pagination.js','scripts')}}"></script>
@endsection