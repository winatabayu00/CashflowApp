<?php

namespace App\Models\Summary;

use App\Concerns\User\InteractsWithUser;
use App\Contracts\User\HasUser;
use App\Models\Category\Category;
use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SummaryCategoryCashFlow extends Model implements HasUser
{
    use HasUuids;
    use InteractsWithUser;

    protected $table = 'summary_category_cash_flows';

    protected $fillable = [
        'user_id',
        'category_id',
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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
