<?php

return [
    'blogs' => [
        'store' => [
            'title' => 'required',
            'slug' => 'required',
            'author' => 'required|exists:users,id',
            'publisher' => 'required',
            'publish_at' => 'required|date',
            'description' => 'required'
        ],
        'edit' => [
            'title' => 'required',
            'slug' => 'required',
            'author' => 'required|exists:users,id',
            'publisher' => 'required',
            'publish_at' => 'required|date',
            'description' => 'required'
        ]
    ],
    'directories' => [
        'store' => [
            'title' => 'required',
            'email' => 'required|email|unique:directories',
            'mobile_no' => 'required|numeric|min:11',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|min:3|max:50',
            'web_url' => 'url',
            'venue_url' => 'url',
            'instagram_url' => 'url',
            'youtube_url' => 'url',
            'facebook_url' => 'url',
            'linked_url' => 'url',
            'user_id' => 'required|exists:users,id',
            'is_approved'=>'required',
            'description' => 'required'
        ],
        'edit' => [
            'title' => 'required',
            'email' => 'required|email|unique:directories',
            'mobile_no' => 'required|numeric|min:11',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|min:3|max:50',
            'web_url' => 'url',
            'venue_url' => 'url',
            'instagram_url' => 'url',
            'youtube_url' => 'url',
            'facebook_url' => 'url',
            'linked_url' => 'url',
            'user_id' => 'required|exists:users,id',
            'is_approved'=>'required',
            'description' => 'required'
        ]
    ],
    'event_calenders' => [
        'store' => [
            'title' => 'required',
            'event_date' => 'required|date',
            'time'=>'required',
            'city'=>'required',
            'user_id' => 'required|exists:users,id',
            'price' => 'required|between:0,999999.99',
            'venue' => 'required',
            'description' => 'required',
            'booking_link' => 'url',
        ],
        'edit' => [
            'title' => 'required',
            'event_date' => 'required|date',
            'time'=>'required',
            'city'=>'required',
            'user_id' => 'required|exists:users,id',
            'price' => 'required|between:0,999999.99',
            'venue' => 'required',
            'description' => 'required',
            'booking_link' => 'url',
        ]
    ],
    'space_finders' => [
        'store' => [
            'title' => 'required',
            'email' => 'required|email|unique:space_finders',
            'mobile_no' => 'required|numeric|min:11',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|min:3|max:50',
            'web_url' => 'url',
            'venue_url' => 'url',
            'instagram_url' => 'url',
            'youtube_url' => 'url',
            'facebook_url' => 'url',
            'linked_url' => 'url',
            'user_id' => 'required|exists:users,id',
            'is_approved'=>'required',
            'description' => 'required'
        ],
        'edit' => [
            'title' => 'required',
            'email' => 'required|email|unique:space_finders',
            'mobile_no' => 'required|numeric|min:11',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|min:3|max:50',
            'web_url' => 'url',
            'venue_url' => 'url',
            'instagram_url' => 'url',
            'youtube_url' => 'url',
            'facebook_url' => 'url',
            'linked_url' => 'url',
            'user_id' => 'required|exists:users,id',
            'is_approved'=>'required',
            'description' => 'required'
        ]
    ],
    'users' => [
        'store' => [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:11',
            'postalcode' => 'required',
            'address' => 'required',
            'company' => 'required',
            'tel_no' => 'required',
            'website' => 'required|url',
            'venue_url' => 'required|url',
            'facebook_url' => 'required|url',
            'instagram_url' => 'required|url',
            'youtube_url' => 'required|url',
            'linkedin_url' => 'required|url',
            'password' => 'required|confirmed|min:8',
            'is_approved' => 'required|numeric|min:0|max:1',
        ],
        'edit' => [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'postalcode' => 'required',
            'address' => 'required',
            'company' => 'required',
            'tel_no' => 'required',
            'website' => 'required|url',
            'venue_url' => 'required|url',
            'facebook_url' => 'required|url',
            'instagram_url' => 'required|url',
            'youtube_url' => 'required|url',
            'linkedin_url' => 'required|url',
            'is_approved' => 'required|numeric|min:0|max:1',
        ]
    ],


];
