<?php

namespace App\Listeners;

use App\Jobs\JobCreateAccountSummary;
use App\Models\Account\Account;
use App\Models\User;

class CreateAccountSummaryCashFlow
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
        $account = Account::query()->findOrFail($input['account_id']);
        dispatch_sync(new JobCreateAccountSummary(user: $user, account: $account, input: $input, isLocking: $isLocking));
    }
}
