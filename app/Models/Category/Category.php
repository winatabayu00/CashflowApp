<?php

namespace App\Models\Category;

use App\Concerns\User\InteractsWithUser;
use App\Contracts\User\HasUser;
use App\Models\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Category extends Model implements HasUser
{
    use HasUuids;
    use InteractsWithUser;

    protected $table = 'categories';

    protected $fillable = [
        'user_id',
        'name',
        'type',
    ];
}

