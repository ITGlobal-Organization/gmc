<?php
return [
    'admin' => [
        'sidebar' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'employees',
                'route' => 'employees.index',
                'icon' => 'nav-icon fas fa-users',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'products',
                'route' => 'products.index',
                'icon' => 'nav-icon fas fa-bars',
                'has_submenu' => true,
                'submenu_icon' => 'right fas fa-angle-left',
                'submenu' => [
                    [
                        'name' => 'products',
                        'route' => 'products.index',
                        'icon' => 'nav-icon fas fa-bars',
                        'has_submenu' => false,
                        'main_route' => 'products',
                        'submenu_icon' => '',
                        'access' => 'admin',
                        'submenu' => [],
                    ],
                    [
                        'name' => 'categories',
                        'route' => 'categories.index',
                        'icon' => 'nav-icon fas fa-bars',
                        'main_route' => 'categories',
                        'has_submenu' => false,
                        'submenu_icon' => '',
                        'access' => 'admin',
                        'submenu' => [],
                    ],
                    [
                        'name' => 'addons',
                        'route' => 'addons.index',
                        'main_route' => 'addons',
                        'icon' => 'nav-icon fas fa-plus',
                        'has_submenu' => false,
                        'submenu_icon' => '',
                        'access' => 'admin',
                        'submenu' => []
                    ],
                    [
                        'name' => 'sizes',
                        'route' => 'sizes.index',
                        'main_route' => 'sizes',
                        'icon' => 'nav-icon fas fa-search-plus',
                        'has_submenu' => false,
                        'submenu_icon' => '',
                        'access' => 'admin',
                        'submenu' => []
                    ],
                    [
                        'name' => 'borders',
                        'route' => 'borders.index',
                        'main_route' => 'borders',
                        'icon' => 'nav-icon fas fa-plus',
                        'has_submenu' => false,
                        'submenu_icon' => '',
                        'access' => 'admin',
                        'submenu' => []
                    ],
                ],
            ],

            [
                'name' => 'customers',
                'route' => 'customers.index',
                'icon' => 'nav-icon fas fa-users',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'orders',
                'route' => 'orders.index',
                'icon' => 'nav-icon fas fa-users',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'addons',
                'route' => 'addons.index',
                'icon' => 'nav-icon fas fa-plus',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],



        ],
    ],
    'employee'=>[
        'sidebar'=>[
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'employees',
                'submenu' => [],
            ],
        ]
    ],
    'user' => [
        'sidebar' => [
            [
                'name' => 'dashboard',
                'icon' => 'dashboard.png',
                'link' => 'dashboard',

            ],
            [
                'name' => 'place-order',
                'icon' => 'place-order.png',
                'link' => 'place-order',

            ],
            [
                'name' => 'order_history',
                'icon' => 'order-history.png',
                'link' => 'orders.history',

            ],
            // [
            //     'name' => 'dashboard',
            //     'icon' => 'dashboard.png',
            //     'link' => 'dashboard',

            // ],
            // [
            //     'name' => 'dashboard',
            //     'icon' => 'dashboard.png',
            //     'link' => 'dashboard',

            // ],
            // [
            //     'name' => 'dashboard',
            //     'icon' => 'dashboard.png',
            //     'link' => 'dashboard',

            // ],
            // [
            //     'name' => 'dashboard',
            //     'icon' => 'dashboard.png',
            //     'link' => 'dashboard',

            // ],
            // [
            //     'name' => 'dashboard',
            //     'icon' => 'dashboard.png',
            //     'link' => 'dashboard',

            // ],
        ]
    ],

    'guest' => [
        [
            'name' => 'home',
            'route' => 'home',
        ],
        [
            'name' => 'about',
            'route' => 'home',
        ],
        [
            'name' => 'testimonials',
            'route' => 'home',
        ],
        [
            'name' => 'ideas',
            'route' => 'ideas.get',
        ],
        [
            'name' => 'contact_us',
            'route' => 'home',
        ]

    ],
    


];
