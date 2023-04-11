<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_MANAGER = 0;
    const ROLE_EMPLOYEE = 1;

    protected $table = 'users';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'role',
    ];

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getRoles(): array
    {
        return [
            self::ROLE_MANAGER => 'manager',
            self::ROLE_EMPLOYEE => 'employee',
        ];
    }
    /**
     * @return HasMany
     */
    public function vacations(): HasMany
    {
        return $this->hasMany(Vacation::class);
    }

}
