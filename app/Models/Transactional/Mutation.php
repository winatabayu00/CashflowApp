<?php

namespace App\Models\Transactional;

use App\Concerns\User\InteractsWithUser;
use App\Contracts\User\HasUser;
use App\Enums\Transactional\Mutation\MutationInfo;
use App\Enums\Transactional\Mutation\MutationType;
use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property string $id
 * @property string $user_id
 * @property MutationType $type
 * @property MutationInfo $info
 * @property float $amount
 * @property float $amount_before
 * @property float $amount_after
 * */
class Mutation extends Model implements HasUser
{
    use HasUuids;
    use InteractsWithUser;

   protected $table = 'mutations';

    protected $fillable = [
        'type',
        'info',
        'amount',
        'amount_before',
        'amount_after',
    ];

    /**
     * @return MorphTo
     */
    public function mutable(): MorphTo
    {
        return $this->morphTo();
    }
}
