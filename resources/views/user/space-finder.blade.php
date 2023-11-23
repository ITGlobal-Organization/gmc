@extends('layouts.layoutv2')
@section('content')
    <style>
        .addnew-btn a {
            margin: 0px 0px 0px 0px;
            padding: 15px 25px 15px 25px !important;
            width: auto;
            height: auto;
            font-size: 14px;
            color: #fff;
            border-radius: 10px;
            font-weight: 100;
            text-align: center;
            border: 0px solid #eee;
            background-color: #2b9acb;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            font-family: 'Montserrat-Regular';
            cursor: pointer;
            display: inline-block;
            transition: all 0.4s linear;
        }
    </style>

    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            <h1 class="mb-25 text-center">Space Finder</h1>
            <p class="mb-40 text-center">
                Here we have harnessed space (indoors and out) from within our membership and partners.
                <br>
                This includes property for long term let or sale and also space for use and hire by the hour, day, week,
                month and so on.
                <br>
                There is a variety of options with different facilities e.g. parking and catering.
                <br>
                Please register to upload space you have to offer or search for your needs if you are looking.
            </p>

            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 padding border mb-25">
                <span class="listin-found"><b>{{ count($SpaceFinders) }}</b> Listings Found</span>
            </div>


            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 padding border mb-25 text-center">
                <div class="addnew-btn"><a href="#">Add New</a></div>
                <div class="clr"></div>
            </div>
            @include('sections.search.filterv1')
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">

                <select class="pd-sort">
                    <option value="hide">Sort by</option>
                    <option value="Name">A to Z</option>
                    <option value="Name">Z to A</option>
                    <option value="Name">Latest Listing</option>
                    <option value="Name">Oldest Listing</option>
                </select>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

            <div class="row">
                @foreach ($SpaceFinders as $SpaceFinder)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="spacefinder-details.php"><img src="{{$SpaceFinder->image_url}}"
                                        alt="" width="100%" class="box-img" /></a>
                            </div>
                            <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                            <div class="box-name mtb-15">
                                <a href="spacefinder-details.php">
                                    {{$SpaceFinder->title}}
                                </a>

                            </div>
                            <div class="box-text1">
                                <i class="fad fa-check" style="--fa-primary-color: #5f439b; --fa-secondary-color: #5f439b;"></i>&nbsp;
                                {!!$SpaceFinder->description!!}
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
                                <i class="fas fa-edit" style="color: #0000ff;"></i>
                                <a href="#" style="color: #000;font-size: 16px;" class="edit" data-id="{{$SpaceFinder->id}}">Edit</a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
                                <i class="fas fa-trash-alt" style="color: #ff0000;"></i>
                                <a href="#" style="color: #000;font-size: 16px;" class="delete">Delete</a>
                            </div>

                            <div class="clr"></div>
                        </div>

                        <div class="clr"></div>
                    </div>
                @endforeach
            </div>



            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
@section('scripts')
<script>
    $('.edit').on('click',function(e){
            e.preventDefault();
            let id = $(this).attr('data-id');
            window.location.href = "{{route('user.space-finders.edit', '')}}"+"/"+id;
            // ajaxGet("{{route('user.events.ajax')}}",{id:id},".events",responseType = 'html');
        })
</script>
@endsection
