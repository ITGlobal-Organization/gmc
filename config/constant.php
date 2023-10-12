<?php
return [
    'admin' => 'admin',
    'company' => 'company',
    'innovator' => 'innovator',
    'login_route' => 'dashboard',
    'date_format' => 'D, d/m/Y',
    'date_format_message' => 'D, d/m/Y h:i:s',
    'trail' => 60,
    'price_per' => 30,
    'banner-pages' => ['home', 'ideas.get', 'company.ideas.index'],
    'image-formats' => ['jpg', 'jpeg', 'png', 'gif'],
    'file-formats' => ['doc', 'doc', 'txt', 'ppt', 'pdf', 'plain', 'vnd.openxmlformats-officedocument.wordprocessingml.document'],

    'images' => [
        'cagtegory-main-dimesions' => ['400', '600', '200', '300'],
        'category-image-msg' => 'Max(400X600) , Min(200X300)',
        'cagtegory-logo-dimesions' => ['80', '80', '30', '30'],
        'category-logo-msg' => 'Max(80X80) , Min(30X30)',
        'profile-dimensions' => ['400', '400', '150', '150'],
        'profile-msg' => 'Max(400X400) , Min(150X150)',
    ],
    'default-images' => [
        'user' => 'images/user.png',
        'general' => '/images/image-not-found.png',
    ],
    'form_attributes' => [
        'username' => [
            'min' => 'min:2',
            'max' => 'max:50',
            // 'regex' => 'regex:/^[A-z0-9\s]+$/',
            'regex' => 'regex:/(^[a-z]+[a-z0-9\\-]*$)/u',
        ],
        'name' => [
            'min' => 'min:2',
            'max' => 'max:45',
            // 'regex' => 'regex:/^[a-zA-Z_\s]+$/',
            'regex' => 'regex:/(^[a-z]+[a-z0-9\\-]*$)/u',
        ],
        'email' => [
            'min' => 'min:2',
            'max' => 'max:45',
            'email' => 'regex:/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
        ],
        'address' => [
            'min' => 'min:2',
            'max' => 'max:200',
        ],
        'about' => [
            'min' => 'min:2',
            'max' => 'max:200',
        ],
        'city' => [
            'min' => 'min:2',
            'max' => 'max:45',
            'regex' => 'regex:/^[a-zA-Z_][a-zA-Z0-9_\s]*$/',
        ],
        'phone' => [
            'min' => 'min:10',
            'max' => 'max:12',
            'regex' => 'regex:/^[0-9]+*$/',
        ],
        'state' => [
            'min' => 'min:2',
            'max' => 'max:45',
            'regex' => 'regex:/^[a-zA-Z_][a-zA-Z0-9_\s]*$/',
        ],
        'zipcode' => [
            'min' => 'min:4',
            'max' => 'max:10',
            'regex' => 'regex:/^[0-9]+$/',
        ],
        'password' => [
            'min' => 8,
            'max' => 'max:50',
        ],
        'price' => [
            'regex' => 'regex:/^\d+(\.\d{1,2})?$/'
        ],
        'slug' => [
            'min' => 'min:2',
            'max' => 'max:45',
            'regex' => 'regex:/^[A-z\]+[0-9-]*$/'
        ]

    ],
    'nda' => 'I, <strong>James Gordon</strong> agree that, in consideration for access to
    information shared with me by test i will: Keep all
    information provided to me and/or team representing
    <strong>James Gordon</strong> relating to idea in strict confidence.
    ',
];
