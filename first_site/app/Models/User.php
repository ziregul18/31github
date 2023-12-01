<?php

namespace App\Models;

use App\Mail\VerificationEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    const ADMIN = 0;
    const USER = 1;

    public static function getRoles()
    {
        return [
            self::ADMIN => 'ADMIN',
            self::USER => 'USER',
        ];
    }

    public static function getRoleAsString($role)
    {
        $roles = [
            self::ADMIN => 'ADMIN',
            self::USER => 'USER',
        ];
        return $roles[$role] ?? 'Unknown Role';
    }


    public function sendEmailVerificationNotification()
    {
        Mail::to($this->email)->send(new VerificationEmail($this));
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
