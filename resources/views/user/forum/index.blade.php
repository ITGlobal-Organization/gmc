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
          <div class="display-listing">
            <ul>
              <li>Active</li>
              <li>I'm On</li>
              <li>I Started</li>
              <li>Last 15 Minutes</li>
              <li>Last Hour</li>
              <li>Last Day</li>
            </ul>
          </div>
          <div class="tabs-change-box">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-tab-id="#tabs-1" data-toggle="tab" href="#tabs-1" role="tab"><i class="fa fa-comments" aria-hidden="true"></i> Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-tab-id="#tabs-2" href="#tabs-2" role="tab"><i class="fa fa-line-chart" aria-hidden="true"></i> Trending</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-tab-id="#tabs-3" href="#tabs-3" role="tab"><i class="fa fa-certificate" aria-hidden="true"></i> New</a>
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

@endsection
@section('scripts')
<script>
  let filters = {
    start:1,
    limit:10,
    user_id:0
  }
  async function getPosts(){
    await ajaxGet("{{ prefix_route('forum.listings') }}",filters ,".posts", responseType = 'html');
  }

  $(document).ready(function(){
    getPosts();
  })
</script>
@endsection
