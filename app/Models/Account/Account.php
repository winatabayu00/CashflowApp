<?php

namespace App\Models\Account;

use App\Concerns\Budget\InteractsWithBudgetable;
use App\Concerns\Transactional\Mutation\Mutable;
use App\Concerns\User\InteractsWithUser;
use App\Contracts\Budget\HasBudgetable;
use App\Contracts\Transactional\Mutation\HasMutable;
use App\Contracts\User\HasUser;
use App\Models\Model;
use App\Models\Transaction\Transaction;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $id
 * @property string $user_id
 * @property string $name
 * @property string $type
 * @property string $currency
 * @property Collection<Transaction> $transaction
 * */
class Account extends Model implements HasUser, HasMutable, HasBudgetable
{
    use HasUuids;
    use InteractsWithUser;
    use Mutable;
    use InteractsWithBudgetable;

    protected $table = 'accounts';

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'currency',
    ];

    protected $guarded = [
        'balance'
    ];

    protected $casts = [
        'balance' => 'float'
    ];

    /**
     * @return HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'account_id');
    }

    public function freshLock(array|string $with = []): mixed
    {
        return $this->newQueryWithoutScopes()
            ->with($with)
            ->where($this->getKeyName(), $this->getKey())
            ->lockForUpdate()
            ->first();
    }

    public function allowNegativeAmount(): bool
    {
        return true;
    }
}
