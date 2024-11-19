<?php

namespace App\Models\Transaction;

use App\Concerns\User\InteractsWithUser;
use App\Contracts\User\HasUser;
use App\Models\Account\Account;
use App\Models\Category\Category;
use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Date;

/**
 * @property string $id
 * @property string $user_id
 * @property string $account_id
 * @property string $category_id
 * @property float $amount
 * @property string $description
 * @property Date $date
 * @property string $type
 * @property Account $account
 * @property Category $category
 * */
class Transaction extends Model implements HasUser
{
    use HasUuids;
    use InteractsWithUser;

    protected $table = 'transactions';

    protected $fillable = [
        'user_id',
        'account_id',
        'category_id',
        'amount',
        'description',
        'date',
        'type',
    ];

    protected $casts = [
        'amount' => 'float',
    ];

    /**
     * @return BelongsTo
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
