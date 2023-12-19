@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            <div class="col-2 text-center mt-10">
                <button class="btn btn-secondary"><a href="{{ route('logout') }}">Logout</a></button>
            </div>
            <h1 class="mb-40 text-center">Dashboard</h1>
            <!--Start Left Side-->
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 border padding">
                @include('sidebars.sidebarv4')
            </div>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
