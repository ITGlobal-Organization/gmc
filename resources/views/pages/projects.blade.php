@extends('layouts.layoutv1')
@section('content')
@include('sections.bannerv1',[
    'heading' => $title,
    'sub_heading' => trans('messages.banner_subheading1'),
    'image' => [
        'display' => false,
        'src' => '',
    ],
    'video' => [
        'display' => false,
        'src' => asset(config('site_config.assets.images.'.'banner-animation.mp4')),
    ], 
    'link' => [
            'display' => true,
            'link' => route('site-pages','contact-us'),
            'text' => 'book_now'
    ]
])

<!-- ULTIMATE INVESTMENT SECTION BEGIN -->
@include('sections.projects.projects',[
    'heading'  => __('messages.projects.sec-heading'),
    'subheading' => __('messages.projects.sec-subheading'), 
])
<!-- ULTIMATE INVESTMENT SECTION END -->
@endsection