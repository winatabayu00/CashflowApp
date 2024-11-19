<?php

return [

    'app_name' => env('APP_NAME', 'UNKNOWN APP NAME'),

    'log_event_class' => \Winata\Core\Response\Events\OnErrorEvent::class,

    /*
        * add credential logging
     */
    'performer' => [
        'model' => \App\Models\User::class, // accept only from auth user
        'column' => 'performed_id'
    ],

    'reportable' => [
        'telegram' => [
            'logging' => false
        ],
    ],
    'driver' => [
        'telegram' => [
            'token' => '', // your api token
            'chat_id' => '',
            'formatting' => [
                'title' => '*ERROR EXCEPTION*',
                'cc' => env('APP_NAME'),
            ],
        ],
        'database' => [

        ]
    ],
];
