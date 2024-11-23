<?php

namespace App\Models\Category;

use App\Concerns\Budget\InteractsWithBudgetable;
use App\Concerns\User\InteractsWithUser;
use App\Contracts\Budget\HasBudgetable;
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
class Category extends Model implements HasUser, HasBudgetable
{
    use HasUuids;
    use InteractsWithUser;
    use InteractsWithBudgetable;

    protected $table = 'categories';

    protected $fillable = [
        'user_id',
        'name',
        'type',
    ];

    /**
     * @return HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'category_id');
    }
}

