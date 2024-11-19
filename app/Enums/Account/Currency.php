<?php

namespace App\Enums\Account;

use ArchTech\Enums\Options;
use ArchTech\Enums\Values;


enum Currency: string
{

    use Values;
    use Options;
    case IDR = 'IDR';
    case USD = 'USD';

    /**
     * @return string
     */
    public function prefix(): string
    {
        return match ($this) {
            self::IDR => 'Rp',
            self::USD => '$',
        };
    }
}
