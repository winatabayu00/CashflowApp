<?php

namespace App\Enums\Transactional\Mutation;

use ArchTech\Enums\InvokableCases;
use ArchTech\Enums\Options;
use ArchTech\Enums\Values;

enum MutationType: string
{
    use InvokableCases, Values;
    use Options;

    case IN = "in";
    case OUT = "out";
}
