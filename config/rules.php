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
            'password' => 'required|password|confirmed|min:8',
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