@extends('layouts.auth')
@section('content')


<div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
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
              <li>I'm Watching</li>
              <li>I Started</li>
              <li>Last 15 Minutes</li>
              <li>Last Hour</li>
              <li>Last Day</li>
            </ul>
          </div>
          <div class="tabs-change-box">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"><i class="fa fa-comments" aria-hidden="true"></i> Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"><i class="fa fa-line-chart" aria-hidden="true"></i> Trending</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"><i class="fa fa-certificate" aria-hidden="true"></i> New</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tabs-1" role="tabpanel">
                @include('user.forum.listing')
              </div>
              <div class="tab-pane" id="tabs-2" role="tabpanel">
                <div class="threads-reply">
                  <div class="threads-flex">
                    <h6>Threads</h6>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>Replies</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Content</p>
                    <a href="javascript:void(0)">Last Chance to win a pelvic floor trainer worth &#163;299</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>-</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new threads-flex-three">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Content</p>
                    <a href="javascript:void(0)">How your child can benefit from online learning</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>-</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Sponsored threads</p>
                    <a href="javascript:void(0)">How do you keep your childern busy? Share your stories of when it worked(...and when it didn't!) with Boden - &#163;200 voucher to be won</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>75</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new threads-flex-three">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Sponsored Q&As</p>
                    <a href="javascript:void(0)">Are you looking to buy your first home with help from family members? Put your questions to the Santander experts. &#163;200 voucher to be won</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>41</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Sponsored threads</p>
                    <a href="javascript:void(0)">What does your child study at school that you'd like to learn more about? Share with the IET for your chance to win a &#163;200 voucher</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>59</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new threads-flex-three">
                  <div class="threads-flex">
                    <p>Feminism: Sex & Gender Discussions</p>
                    <a href="javascript:void(0)">Work EDI Policy - help!</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>63</h6>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tabs-3" role="tabpanel">
                <div class="threads-reply">
                  <div class="threads-flex">
                    <h6>Threads</h6>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>Replies</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Content</p>
                    <a href="javascript:void(0)">Last Chance to win a pelvic floor trainer worth &#163;299</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>-</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new threads-flex-three">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Content</p>
                    <a href="javascript:void(0)">How your child can benefit from online learning</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>-</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Sponsored threads</p>
                    <a href="javascript:void(0)">How do you keep your childern busy? Share your stories of when it worked(...and when it didn't!) with Boden - &#163;200 voucher to be won</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>75</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new threads-flex-three">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Sponsored Q&As</p>
                    <a href="javascript:void(0)">Are you looking to buy your first home with help from family members? Put your questions to the Santander experts. &#163;200 voucher to be won</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>41</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new">
                  <div class="threads-flex">
                    <p><i class="fa fa-laptop" aria-hidden="true"></i> Sponsored threads</p>
                    <a href="javascript:void(0)">What does your child study at school that you'd like to learn more about? Share with the IET for your chance to win a &#163;200 voucher</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>59</h6>
                  </div>
                </div>
                <div class="threads-reply threads-reply-new threads-flex-three">
                  <div class="threads-flex">
                    <p>Feminism: Sex & Gender Discussions</p>
                    <a href="javascript:void(0)">Work EDI Policy - help!</a>
                  </div>
                  <div class="threads-reply-flex">
                    <h6>63</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            @include('user.forum.right-sidebar')
        </div>
</div>

@endsection

