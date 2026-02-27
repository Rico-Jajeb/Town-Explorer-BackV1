<?php
return [
    'paths' => [
        'api/*' , 
        'sanctum/csrf-cookie' ,
        'login',
        'register',
        'logout',
        'forgot-password',
        'reset-password',
        'email/verification-notification',
    ],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173', 'https://town-explorer-frontv1-1.vercel.app'], 
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // needed if using Sanctum/cookies
];
