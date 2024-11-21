<?php

namespace App\Enums\ScheduleTransaction;

use ArchTech\Enums\Options;
use ArchTech\Enums\Values;

enum ScheduleAction: string
{
    use Values;
    use Options;

    case TRIGGER_TRANSACTION = 'trigger_transaction';
    case CREATE_NOTIFICATION = 'create_notification';
}
