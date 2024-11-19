<?php

namespace App\Models\Account;

use App\Concerns\User\InteractsWithUser;
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
 * @property Collection<Transaction> $transaction
 * */
class Account extends Model implements HasUser
{
    use HasUuids;
    use InteractsWithUser;

    protected $table = 'accounts';

    protected $fillable = [
        'user_id',
        'name',
        'type',
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
}
