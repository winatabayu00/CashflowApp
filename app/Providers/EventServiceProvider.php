<?php

namespace App\Providers;

use App\Events\NewTransaction;
use App\Listeners\CreateAccountSummaryCashFlow;
use App\Listeners\CreateCategorySummaryCashFlow;
use App\Listeners\CreateSummaryCashFlow;
use \Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [

        NewTransaction::class => [
            CreateSummaryCashFlow::class,
            CreateAccountSummaryCashFlow::class,
            CreateCategorySummaryCashFlow::class,
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
