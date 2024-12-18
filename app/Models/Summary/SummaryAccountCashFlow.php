<?php

namespace App\Models\Summary;

use App\Concerns\User\InteractsWithUser;
use App\Contracts\User\HasUser;
use App\Models\Account\Account;
use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SummaryAccountCashFlow extends Model implements HasUser
{
    use HasUuids;
    use InteractsWithUser;

    protected $table = 'summary_account_cash_flows';

    protected $fillable = [
        'user_id',
        'account_id',
        'group_date',
        'amount_income',
        'amount_expense',
        'amount_total',
    ];

    protected $casts = [
        'amount_income' => 'float',
        'amount_expense' => 'float',
        'amount_total' => 'float',
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
