<?php

namespace App\Models\Transaction;

use App\Concerns\Transaction\InteractsWithTransactionable;
use App\Concerns\User\InteractsWithUser;
use App\Contracts\Transaction\HasTransaction;
use App\Contracts\User\HasUser;
use App\Models\Account\Account;
use App\Models\Category\Category;
use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property string $id
 * @property string $user_id
 * @property string $account_id
 * @property string $category_id
 * @property float $transaction_amount
 * @property string $transaction_description
 * @property string $transaction_type
 * @property string $schedule_type
 * @property integer $repeat
 * @property integer $maximum_repeat
 * @property \DateTimeInterface $last_executed
 * @property string $status
 * @property Account $account
 * @property Category $category
 * */
class ScheduleTransaction extends Model implements HasUser, HasTransaction
{
    use HasUuids;
    use InteractsWithUser;
    use InteractsWithTransactionable;

    protected $table = 'scheduled_transactions';

    protected $fillable = [
        'user_id',
        'account_id',
        'category_id',
        'transaction_amount',
        'transaction_description',
        'transaction_type',
        'schedule_type',
        'schedule_executed_at',
        'repeat',
        'maximum_repeat',
        'last_executed',
        'status',
    ];

    protected $casts = [
        'transaction_amount' => 'float',
    ];

    public function transaction(): MorphTo
    {
        return $this->morphTo();
    }

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
