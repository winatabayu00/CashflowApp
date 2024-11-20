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

    public function allowedData(): array
    {
        return match ($this) {
            self::DAILY => [],
            self::WEEKLY => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            self::MONTHLY => ['start_of_year', 'end_of_year', 'date:{Y_M_D}'],
            self::YEARLY => ['start_of_year', 'end_of_year'],
        };
    }
}
