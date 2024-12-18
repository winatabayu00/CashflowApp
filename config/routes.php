<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Preloads
    |--------------------------------------------------------------------------
    | String of class name that instance of \Dentro\Yalr\Contracts\Bindable
    | Preloads will always been called even when laravel routes has been cached.
    | It is the best place to put Rate Limiter and route binding related code.
    */

    'preloads' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Router group settings
    |--------------------------------------------------------------------------
    | Groups are used to organize and group your routes. Basically the same
    | group that used in common laravel route.
    |
    | 'group_name' => [
    |     // laravel group route options can contains 'middleware', 'prefix',
    |     // 'as', 'domain', 'namespace', 'where'
    | ]
    */

    'groups' => [
        'web' => [
            'middleware' => 'web',
            'prefix' => '',
        ],
        'api' => [
            'middleware' => 'api',
            'prefix' => 'api',
        ],
        'app' => [
            'middleware' => ['web', 'auth'],
            'prefix' => 'app',
            'as' => 'app',
        ],
        'api-options' => [
            'middleware' => ['api'],
            'prefix' => 'api/options',
            'as' => 'api-options',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    | Below is where our route is loaded, it read `groups` section above.
    | keys in this array are the name of route group and values are string
    | class name either instance of \Dentro\Yalr\Contracts\Bindable or
    | controller that use attribute that inherit \Dentro\Yalr\RouteAttribute
    */

    'web' => [
        /** @inject web **/
        App\Http\Routes\DefaultRoute::class,
        App\Http\Controllers\App\Authentication\LoginController::class,
        App\Http\Controllers\App\Authentication\RegisterController::class,
    ],
    'api' => [
        /** @inject api **/
    ],
    'app' => [
        /** @inject app **/
        App\Http\Controllers\App\Dashboard\DashboardController::class,
        App\Http\Controllers\App\Account\AccountController::class,
        App\Http\Controllers\App\Transaction\TransactionController::class,
        App\Http\Controllers\App\ScheduleTransaction\ScheduleTransactionController::class,
        App\Http\Controllers\App\Report\ReportController::class,
        App\Http\Controllers\App\Budget\BudgetController::class,
        App\Http\Controllers\App\Profile\ProfileController::class,
    ],
    'api-options' => [
        App\Http\Controllers\Api\SelectOption\GlobalSelectOptionController::class,
        /** @inject api-options **/
    ],
];
