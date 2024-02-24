@extends('layouts.auth')
@section('content')

<section class="sec-mumnsnet">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="talk-flex">
            <div class="talk-sec">
              <h2>Talk <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></h2>
            </div>
            <div class="advanced-search">
              <a href="javascript:void(0)" class="btn btn-primary">Advance Search</a>
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
          <div class="trending-right">
            <h2><i class="fa fa-comment-o" aria-hidden="true"></i> TRENDING NOW</h2>
            <p>He wants to leave them alone in a hote.. I need to change 2 year old DDs name Where's Somewhere you've visited but... Aibu to think Dsis was not broke and s... Gutted. Mini break spoiled.</p>
            <a href="javascript:void(0)"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</a>
          </div>
          <div class="main-pin-flex">
            <div class="main-icon">
              <a href="javascript:void(0)"><span><i class="fa fa-th-list" aria-hidden="true"></i></span> Topics</a>
            </div>
            <div class="main-icon">
              <a href="javascript:void(0)"><span><i class="fa fa-comment-o" aria-hidden="true"></i></span> Active</a>
            </div>
            <div class="main-icon">
              <a href="javascript:void(0)"><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> I'm On</a>
            </div>
          </div>
          <div class="mumsnet-text">
            <h4>Mumsnet Insight <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></h4>
          </div>
          <a href="javascript:void(0)">
            <div class="mumsnet-flex">
              <div class="mumsnet-cont">
                <img src="images/it1.png" alt="image" class="img-fluid">
              </div>
              <div class="mumsnet-cont mumscontent-new">
                <h6>What does your child study at school that you'd like to learn more about?</h6>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)">
            <div class="mumsnet-flex">
              <div class="mumsnet-cont">
                <img src="images/it2.png" alt="image" class="img-fluid">
              </div>
              <div class="mumsnet-cont mumscontent-new">
                <h6>Do you have a child aged 3 to 11?</h6>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)">
            <div class="mumsnet-flex">
              <div class="mumsnet-cont">
                <img src="images/it3.png" alt="image" class="img-fluid">
              </div>
              <div class="mumsnet-cont mumscontent-new">
                <h6>How's your childcare? Take this survey - &#163;100 voucher to be won</h6>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mumsnet - HomePage</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
    </script>
  </body>
</html> --}}
