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
                'name' => 'news',
                'route' => 'blogs.index',
                'icon' => 'nav-icon fas fa-users',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'users',
                'route' => 'users.index',
                'icon' => 'nav-icon fas fa-users',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'topics',
                'route' => 'topics.index',
                'icon' => 'nav-icon fas fa-users',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'directory',
                'route' => 'directory.index',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => true,
                'submenu_icon' => 'right fas fa-angle-left',
                'access' => 'admin',
                'submenu' => [
                    [
                        'name' => 'directory',
                        'route' => 'directory.index',
                        'icon' => 'nav-icon fas fa-bars',
                        'has_submenu' => false,
                        'main_route' => 'directory',
                        'submenu_icon' => '',
                        'access' => 'admin',
                        'submenu' => [],
                    ],
                    [
                        'name' => 'categories',
                        'route' => 'directory-categories.index',
                        'icon' => 'nav-icon fas fa-bars',
                        'has_submenu' => false,
                        'main_route' => 'directory-categories',
                        'submenu_icon' => '',
                        'access' => 'admin',
                        'submenu' => [],
                    ],
                ],
            ],
            [
                'name' => 'space-finder',
                'route' => 'spacefinder.index',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'eventcalender',
                'route' => 'eventcalender.index',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'platinumpartners',
                'route' => 'platinumpartners.index',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],
            [
                'name' => 'm2m-offers',
                'route' => 'offers.index',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],


        ],
    ],







];
