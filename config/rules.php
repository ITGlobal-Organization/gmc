<?php

return [
    'member' => [
        'invite' => [
            'email' => 'required|email|unique:users,email|unique:invites,email',
        ]
    ],
    'scheme' => [
        'store' => [
            'name'  => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,gif,svg,ico,jpg',
            'imd' => 'required|string|max:8|min:6|unique:schemes'
        ],
        'edit' => [
            'name'  => 'required|string',
            'imd' => 'required|string|max:8|min:6|unique:schemes'
        ]
    ],
    'cards' => [
        'store' => [
            'card_no' => 'required|string|min:16|max:19|unique:cards',
            'scheme_id' => 'required|integer|exists:schemes,id',
            'date_expiry' => 'required|string|min:4|max:4',
            'cvv' => 'required|string|min:3|max:3',
            'is_financial' => 'required|boolean',
            'card_type' => 'required|string',
            'image1' => 'required|image|mimes:jpeg,png,gif,svg,ico,jpg',
            'image2' => 'required|image|mimes:jpeg,png,gif,svg,ico,jpg',
        ],
        'edit' => [
            'card_no' => 'required|string|min:16|max:19|unique:cards',
            'scheme_id' => 'required|integer|exists:schemes,id',
            'date_expiry' => 'required|string|min:4|max:4',
            'cvv' => 'required|string|min:3|max:3',
            'is_financial' => 'required|boolean',
            'card_type' => 'required|string',
            'image1' => 'required|image|mimes:jpeg,png,gif,svg,ico,jpg',
            'image2' => 'required|image|mimes:jpeg,png,gif,svg,ico,jpg',
        ]
    ]

]; 