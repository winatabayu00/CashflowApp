<?php

namespace App\Enums\Category;

use ArchTech\Enums\Options;
use ArchTech\Enums\Values;


enum CategoryType: string
{

    use Values;
    use Options;
    case INCOME = 'income';
    case EXPENSE = 'expense';
}
