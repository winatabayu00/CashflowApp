<?php

namespace App\Listeners;

use App\Jobs\JobCreateCategorySummary;
use App\Models\Category\Category;
use App\Models\User;

class CreateCategorySummaryCashFlow
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
        $category = Category::query()->findOrFail($input['category_id']);
        dispatch_sync(new JobCreateCategorySummary(user:  $user, category: $category, input: $input, isLocking: $isLocking));
    }
}
