<?php


return [

    'workspace' => [
        [
            'title' => 'dashboard',
            'route' => 'dashboard.index',
            'icon' => 'ri-dashboard-line',
            'sub' =>[
                [
                    'title' => 'wallet',
                    'route' => 'dashboard.index',
                ]
            ]
        ]
    ],
    'user' => [
        [
            'title' => 'dashboard',
            'route' => 'dashboard.index',
            'icon' => 'ri-user-community-fill'
        ]
    ]

];