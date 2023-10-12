<?php 
return [
    'login' => [
        'attributes' => [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string','min:4'],
        ],
    ],
    
];