<?php

namespace App\Enums\Account;

use ArchTech\Enums\Options;
use ArchTech\Enums\Values;


enum AccountType: string
{

    use Values;
    use Options;
    case CASH = 'cash';
    case SAVING = 'saving';
    case CREDIT = 'credit';
}
