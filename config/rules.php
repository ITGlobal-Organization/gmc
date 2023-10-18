<?php

return [
    'blogs' => [
        'store' => [
            'title' => 'required',
            'slug' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'publish_at' => 'required|date',
            'description' => 'required'
        ]
    ],


]; 