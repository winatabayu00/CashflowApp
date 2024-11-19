<?php

namespace App\Concerns\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Contracts\Database\Eloquent\Builder;

trait InteractsWithUser
{
    /**
     * @return string
     */
    public function getUserColumnName(): string
    {
        $userColumn = 'user_id';
        if (property_exists(static::class, 'userColumn')) {
            $userColumn = $this->$userColumn;
        }
        return $userColumn;
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, $this->getUserColumnName());
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return method_exists($this, 'setUser') ? $this->setUser() : $this->user;
    }

    /**
     * @param Builder $query
     * @param string $companyId
     * @return Builder
     */
    public function scopeByUser(Builder $query, string $companyId): Builder
    {
        return $query->where($this->getUserColumnName(), $companyId);
    }
}
