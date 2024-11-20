<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('process_active_transaction', function () {
    $service = new \App\Service\ScheduleTransactionService();
    $service->processActiveTransaction();
})->everyMinute();
