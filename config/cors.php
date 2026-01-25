<?php

// config/cors.php
return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];


// Also make sure this middleware is enabled in bootstrap/app.php or app/Http/Kernel.php

// For Laravel 11 (bootstrap/app.php):
// ->withMiddleware(function (Middleware $middleware) {
//     $middleware->api(prepend: [
//         \Illuminate\Http\Middleware\HandleCors::class,
//     ]);
// })

// For Laravel 10 and below (app/Http/Kernel.php):
// In the $middleware array, ensure you have:
// \Illuminate\Http\Middleware\HandleCors::class,
