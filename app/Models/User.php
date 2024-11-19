<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ModelForAuthenticated as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * @property string $id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property string $dial
 * @property string $password
 * @property Carbon $last_login_at
 * @property string $locale
 * @property string $timezone
 * */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'dial',
        'password',
        'last_login_at',
        'locale',
        'timezone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    /**
     * @param string $phone
     * @param string $dial
     * @return User|null
     */
    public static function checkPhone(string $phone, string $dial): ?User
    {
        $phone = sanitizePhone($phone, $dial);
        $cleansingPhone = str_replace($dial, '', $phone);

        /** @var User $user */
        $user = User::query()
            ->whereRaw("SUBSTRING(phone, length(dial)+1) = '{$cleansingPhone}'")
            ->first();

        return $user;
    }

    public function getDefaultPassword(): string
    {
        if (config('app.env') !== 'production') {
            return 'password';
        }

        $passwordLength = 10;

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $passwordLength; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
