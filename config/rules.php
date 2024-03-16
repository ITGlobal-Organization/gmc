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
    'platinum_partners' => [
        'store' => [
            'title' => 'required',
            //'web_url' => 'url',
            'description' => 'required'

        ],
        'edit' => [
            'title' => 'required',
            // 'web_url' => 'url',
            'description' => 'required'
        ]
    ],
    'directories' => [
        'store' => [
            'title' => 'required',
            'email' => 'required',
            'mobile_no' => 'numeric|min:11',
            'phone' => 'numeric|min:11',
            'address' => 'required|min:3|max:150',
            // 'web_url' => '',
            // 'venue_url' => '',
            // 'instagram_url' => '',
            // 'youtube_url' => '',
            // 'facebook_url' => '',
            // 'linked_url' => '',
            // 'user_id' => 'required|exists:users,id',
            'is_approved'=>'required',
            // 'description' => 'required'
        ],
        'edit' => [
            'title' => 'required',
            'email' => 'required',
            'mobile_no' => 'numeric|min:11',
            'phone' => 'numeric|min:11',
            'address' => 'required|min:3|max:150',
            // 'web_url' => '',
            // 'venue_url' => '',
            // 'instagram_url' => '',
            // 'youtube_url' => '',
            // 'facebook_url' => '',
            // 'linked_url' => '',
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
            'price' => 'required',
            'venue' => 'required',
            'description' => 'required',
            'booking_link' => '',
        ],
        'edit' => [
            'title' => 'required',
            'event_date' => 'required|date',
            'time'=>'required',
            'city'=>'required',
            'user_id' => 'required|exists:users,id',
            'price' => 'required',
            'venue' => 'required',
            'description' => 'required',
            'booking_link' => '',
        ]
    ],
    'space_finders' => [
        'store' => [
            'title' => 'required',
            'email' => 'required|email|unique:space_finders',
            'mobile_no' => 'required|min:11',
            'phone' => 'numeric|min:11',
            'address' => 'required|min:3|max:50',
            // 'web_url' => '',
            // 'venue_url' => '',
            // 'instagram_url' => '',
            // 'youtube_url' => '',
            // 'facebook_url' => '',
            // 'linked_url' => '',
            'user_id' => 'required|exists:users,id',
            'is_approved'=>'required',
            'categories'=>'required',
            'description' => 'required'
        ],
        'edit' => [
            'title' => 'required',
            'email' => 'required|email|unique:space_finders',
            'mobile_no' => 'numeric|min:11',
            'phone' => 'numeric|min:11',
            'address' => 'required|min:3|max:50',
            // 'web_url' => '',
            // 'venue_url' => '',
            // 'instagram_url' => '',
            // 'youtube_url' => '',
            // 'facebook_url' => '',
            // 'linked_url' => '',
            'user_id' => 'required|exists:users,id',
            'is_approved'=>'required',
            'categories'=>'required',
            'description' => 'required'
        ]
    ],
    'm2m_offers' => [
        'store' => [
            'company_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:space_finders',
            'phone' => 'required|numeric|min:11',
            // 'web_url' => 'url',
            'user_id' => 'required|exists:users,id',
            'is_approved'=>'required',
            'offer_details' => 'required'
        ],
        'edit' => [
            'company_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:space_finders',
            'phone' => 'required|numeric|min:11',
            // 'web_url' => 'url',
            'user_id' => 'required|exists:users,id',
            'is_approved'=>'required',
            'offer_details' => 'required'
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
            // 'company' => 'required',
            'tel_no' => 'required',
            // 'website' => 'required|url',
            // 'venue_url' => '',
            // 'facebook_url' => 'required|url',
            // 'instagram_url' => 'required|url',
            // 'youtube_url' => 'required|url',
            // 'linkedin_url' => 'required|url',s
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
            // 'company' => 'required',
            'tel_no' => 'required',
            'password' => 'sometimes|nullable|confirmed|min:8',
            // 'website' => 'required|url',
            // 'venue_url' => '',
            // 'facebook_url' => 'required|url',
            // 'instagram_url' => 'required|url',
            // 'youtube_url' => 'required|url',
            // 'linkedin_url' => 'required|url',
            'is_approved' => 'required|numeric|min:0|max:1',
        ]
    ],
    'messages' => [
        'store' => [
            'message' => 'required',
        ]
    ]


];
