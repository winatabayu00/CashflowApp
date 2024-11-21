<?php

namespace App\Enums\Budget;

use ArchTech\Enums\Options;
use ArchTech\Enums\Values;

enum BudgetStatus: string
{
    use Options;
    use Values;

    case ACTIVE = 'active';

    case INACTIVE = 'inactive';

    case COMPLETED = 'completed';
}
