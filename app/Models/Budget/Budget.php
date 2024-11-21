<?php

namespace App\Models\Budget;

use App\Concerns\User\InteractsWithUser;
use App\Contracts\User\HasUser;
use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\MorphTo;


/**
 * @property string $id
 * @property string $user_id
 * @property string $amount
 * @property string $description
 * @property string $status
 * */
class Budget extends Model implements HasUser
{
    use HasUuids;
    use InteractsWithUser;

    protected $table = 'budgets';

    protected $fillable = [
        'user_id',
        'amount',
        'description',
        'status',
    ];

    public function budgetable(): MorphTo
    {
        return $this->morphTo();
    }

}
