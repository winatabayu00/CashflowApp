<?php

namespace App\Enums\ScheduleTransaction;

use ArchTech\Enums\Options;
use ArchTech\Enums\Values;

enum ScheduleType: string
{
    use Values;
    use Options;

    case DAILY = 'daily';
    case WEEKLY = 'weekly';
    case MONTHLY = 'monthly';
    case YEARLY = 'yearly';
}
