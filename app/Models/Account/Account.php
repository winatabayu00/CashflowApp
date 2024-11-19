<?php

namespace App\Models\Account;

use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Account extends Model
{
    use HasUuids;

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
}
