<?php

namespace App\Service;

use App\Enums\ScheduleTransaction\ScheduleStatus;
use App\Jobs\ProcessActiveTransactionToday;
use App\Models\Transaction\ScheduleTransaction;
use App\Queries\ScheduleTransaction\ScheduleTransactionQuery;
use Illuminate\Database\Eloquent\Collection;
use Winata\PackageBased\Abstracts\BaseService;

class ScheduleTransactionService extends BaseService
{
    public function getActiveScheduleTransactionToday(): Collection
    {
        return ScheduleTransactionQuery::where('last_executed', '<', now())
            ->orWhere('last_executed', '=', null)
            ->where('status', '=', ScheduleStatus::ACTIVE->value)
            ->getAllData()->each(function (ScheduleTransaction $scheduleTransaction) {
                if (($scheduleTransaction->maximum_repeat > 0) && ($scheduleTransaction->repeat > $scheduleTransaction->maximum_repeat)) {
                    return false;
                }
                return $scheduleTransaction;
            });
    }

    /**
     * @return void
     */
    public function processActiveTransaction(): void
    {
        $activeTransaction = $this->getActiveScheduleTransactionToday();
        foreach ($activeTransaction as $scheduleTransaction) {
            dispatch_sync(new ProcessActiveTransactionToday($scheduleTransaction));
        }
    }
}
