 <?php

return [

    'assets' => [
        'images' => 'media/',
        'css' => 'css/',
        'js' => 'js/',
        'js_scripts' => 'js/scripts/',
        'plugins' => 'plugins/',
        'fonts' => 'fonts/',
        'layouts' => 'layouts.',
        'home_pages' => 'homes.',
        'pages' => 'pages.',
        'logo'=>'media/D7dyke6ZUUPb64P8j09mGyKL5w6XU5.png',
        'image-not-found'=>'images/image-not-found.png',

    ],
    'constants' => [
        'experience' => '10',
        'warranty' => '2',
        'currency' => 'USD',
        'display-limit' => 4,
        'unit' => 'inches',
        'show-cart' => true,
        'max-text-length-catalog' => 50,
        'phone_min_length' => '10',
        'phone_max_length' => '12',
        'general_string_length' => '100',
        'base_layout' => 'layouts.layoutv2',
        'item_per_page' => 44,
        'events_month_range' => 3
    ],
    'auth'  => [
        'login_view' => 'loginv1',
        'register_view' => 'registerv1',
    ],
    'currencies' => [
        'PKR' => [
            'name' => 'PKR',
            'symbol' => '',
        ],
        'USD' => [
            'name' => 'USD',
            'symbol' => '$',
        ],
    ],
    'menus' => [
        'pages' => [
            [
                'name' => 'home',
                'link' => 'home',
                'is_main' => true,
                'class' => 'menu-item',
                'type' => 'page',
                'link-class' => 'menu-link',
                'has_submenu' => false,
                'submenu' => []
            ],

            // [
            //     'name' => 'geo_location',
            //     'link' => 'contact-us',
            //     'is_main' => false,
            //     'type' => 'page',
            //     'class' => 'menu-item book-now-btn',
            //     'link-class' => 'btn btn-primary',
            //     'has_submenu' => true,
            //     'submenu' => []
            // ],


        ],
        'footer-menu1' => [
            [
                'name' => 'home',
                'link'  => 'home',
            ],
            [
                'name' => 'about_us',
                'link'  => 'about-us',
            ],
            [
                'name' => 'contact',
                'link'  => 'contact-us',
            ],
            [
                'name' => 'services',
                'link'  => 'services',
            ],

        ]

    ],
    'contacts' => [
        'phone' => "(587) 284-9184",
        'email' => "info@ceramiccoatingscalgary.com",
        'copyright' => "© 2023 Ceramic Coatings Calgary . All rights reserved",
        'name' => "Ceramic Coatings",
        'address'   => "328 40 Ave NE Calgary,AB T2E 2M7",
        'developer' => 'K13.ca',
        'facebook' => 'https://www.facebook.com/dripautopros',
        'instragram' => 'https://www.instagram.com/calgarypaintingcrew/?igshid=ZmVmZTY5ZGE%3D',
        'map' => "https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d28393.307336755148!2d-114.05491292789799!3d51.02284509581211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scalgary%20detailing%20CA!5e0!3m2!1sen!2s!4v1679095364003!5m2!1sen!2s"
    ],

    'sidebar' => [
        'pages'=>[
            [
                'name'=>'lang.news',
                'route'=>'blogs.index',
                'static_route'=>'',
                'check_login'=>false,
                'parameter' => ''
            ],
            [
                'name'=>'lang.benifits',
                'route'=>'site-pages',
                'parameter'=>'benifits',
                'static_route'=>'',
                'check_login'=>false,
            ],
            [
                'name'=>'lang.directories',
                'route'=>'directories.index',
                'static_route'=>'',
                'check_login'=>false,
                'parameter' => ''
            ],
            [
                'name'=>'lang.space_finders',
                'route'=>'space-finders.index',
                'static_route'=>'',
                'check_login'=>false,
                'parameter' => ''
            ],
            [
                'name'=>'lang.offers',
                'route'=>'offers.index',
                'static_route'=>'',
                'check_login'=>true,
                'parameter' => ''
            ],
            [
                'name'=>'lang.eventcalenders',
                'route'=>'event-calenders.index',
                'static_route'=>'',
                'check_login'=>false,
                'parameter' => ''
            ],
            [
                'name'=>'lang.platiniumpartners',
                'route'=>'platinum-partners.index',
                'static_route'=>'',
                'check_login'=>false,
                'parameter' => ''
            ],
            [
                'name'=>'lang.jobshub',
                'route'=>'',
                'static_route'=>'https://pcjh.co.uk/',
                'check_login'=>false,
                'parameter' => ''
            ],
            [
                'name'=>'lang.about_us',
                'route'=>'site-pages',
                'parameter'=>'about-us',
                'static_route'=>'',
                'check_login'=>false,
            ],
            [
                'name'=>'lang.international',
                'route'=>'site-pages',
                'parameter'=>'international',
                'static_route'=>'',
                'check_login'=>false,
            ],
            [
                'name'=>'lang.mentoring',
                'route'=>'site-pages',
                'parameter'=>'mentoring',
                'static_route'=>'',
                'check_login'=>false,
            ],
            [
                'name'=>'lang.contact',
                'route'=>'site-pages',
                'parameter'=>'contact-us',
                'static_route'=>'',
                'check_login'=>false,
            ]

        ]
    ]


];
