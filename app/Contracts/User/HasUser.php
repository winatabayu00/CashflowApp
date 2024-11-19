<?php

namespace App\Contracts\User;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

interface HasUser
{
    public function user(): BelongsTo;
    public function getUserColumnName(): string;
    public function getUser(): User;

    public function scopeByUser(Builder $query, string $companyId): Builder;
}
