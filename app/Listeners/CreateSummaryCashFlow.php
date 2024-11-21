<?php

namespace App\Listeners;

use App\Jobs\JobCreateSummary;
use App\Models\User;

class CreateSummaryCashFlow
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        /** @var User $user */
        $user = $event->user;
        $input = $event->input;
        $isLocking = $event->isLocking;
        dispatch_sync(new JobCreateSummary(user: $user, input: $input, isLocking: $isLocking));
    }
}
