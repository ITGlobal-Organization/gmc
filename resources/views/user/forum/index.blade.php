@extends('layouts.auth')
@section('content')


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="talk-flex">
            <div class="talk-sec">
              <h2>Talk <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></h2>
            </div>
            <div class="advanced-search">
              <a href="{{ prefix_route('forum.create') }}" class="btn btn-primary">{{ trans('messages.post-something')}}</a>
            </div>
          </div>
          <div class="display-listing topics">
            <ul>
              @foreach($Topics as $topic)
              <li class="topic" data-id="{{ 
                $topic->id
              }}">{{ $topic->text }} </li>
             @endforeach
            </ul>
          </div>
          <div class="tabs-change-box">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-tab="active" data-tab-id="#tabs-1" data-toggle="tab" href="#tabs-1" role="tab"><i class="fa fa-comments" aria-hidden="true"></i> {{ trans('lang.active')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-tab="trending" data-toggle="tab" data-tab-id="#tabs-2" href="#tabs-2" role="tab"><i class="fa fa-line-chart" aria-hidden="true"></i> {{ trans('lang.trending')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-tab="new" data-toggle="tab" data-tab-id="#tabs-3" href="#tabs-3" role="tab"><i class="fa fa-certificate" aria-hidden="true"></i> {{ trans('lang.new')}}</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active posts" id="tabs-1" role="tabpanel">
              
              </div>
              <div class="tab-pane" id="tabs-2" role="tabpanel">
               
              </div>
              <div class="tab-pane" id="tabs-3" role="tabpanel">
               
              </div>
            </div>
          </div>
        </div>
 
</div>
@include('sections.pagination.paginationv1')
@endsection
@section('scripts')
<script>
  let filters = {
    start:1,
    length:10,
    user_id:0,
    topic_id:0,
    is_active:1,
    order_by:'created_at',
    order:'desc',
    is_trending:0
  }
  async function getPosts(){
    await ajaxGet("{{ prefix_route('forum.listings') }}",filters ,".posts", responseType = 'html');
  }

  $(document).ready(function(){
    getPosts();
  })

  $(document).on('click','.topic',function(){
    filters.topic_id = $(this).attr('data-id');
    getPosts();
  })

  let paginationConfig = {
            renderFunction:getPosts
        }

  $(document).on('click','.nav-link',function(){
      let tab = $(this).attr('data-tab');
      let activeTab = $(this).attr('data-tab-id');
     
      if(tab == 'active'){
        filters.is_active = 1;
        getPosts();
       
      }else if(tab == 'trending'){
        filters.is_trending = 1;
        console.log(tab)
        getPosts();
       
      }else if(tab == 'new'){
        filters.order = 'desc';
        filters.order_by = 'created_at';
        getPosts();
      }


      $('.nav-link').removeClass('active');
      $(this).addClass('active');

      $('.tab-pane').removeClass('active');
      $('.tab-pane').removeClass('posts');
      console.log(activeTab)
      $(activeTab).addClass('active');
      $(activeTab).addClass('posts');
  })
</script>
<script src="{{ custom_asset('pagination.js','scripts')}}"></script>
@endsection
