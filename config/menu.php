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
                'name' => 'blogs',
                'route' => 'blogs.index',
                'icon' => 'nav-icon fas fa-users',
                'has_submenu' => false,
                'submenu_icon' => '',
                'access' => 'admin',
                'submenu' => [],
            ],




        ],
    ],
   
   

  
    


];
