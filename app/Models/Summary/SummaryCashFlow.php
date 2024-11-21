<?php

namespace App\Models\Summary;

use App\Concerns\User\InteractsWithUser;
use App\Contracts\User\HasUser;
use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Facades\Date;

/**
 * @property string $id
 * @property string $user_id
 * @property Date $group_date
 * @property string $type
 * @property float $amount_income
 * @property float $amount_expense
 * @property float $amount_total
 * */
class SummaryCashFlow extends Model implements HasUser
{
    use HasUuids;
    use InteractsWithUser;

    protected $table = 'summary_cash_flows';

    protected $fillable = [
        'user_id',
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
}
