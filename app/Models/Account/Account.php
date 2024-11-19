<?php

namespace App\Models\Account;

use App\Concerns\User\InteractsWithUser;
use App\Contracts\User\HasUser;
use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

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
}
