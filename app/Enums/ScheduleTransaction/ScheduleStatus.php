<?php

namespace App\Enums\ScheduleTransaction;

use ArchTech\Enums\Options;
use ArchTech\Enums\Values;

enum ScheduleStatus: string
{
    use Values;
    use Options;

    case ACTIVE = 'active';
    case PAUSED = 'paused';
    case COMPLETED = 'completed';
}
