<?php

namespace App\Enums\Transaction;

use ArchTech\Enums\Options;
use ArchTech\Enums\Values;

enum TransactionType: string
{
    use Values;
    use Options;
    case INCOME = 'income';
    case EXPENSE = 'expense';
}
