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
            'phone' => 'required',
            'postalcode' => 'required',
            'address' => 'required',
            'company' => 'required',
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
            'is_approved' => 'required|numeric|min:0|max:1',
        ]
    ],


]; 