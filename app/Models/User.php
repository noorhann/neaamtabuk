<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'mobile',
        'gender',
        'address',
        'region',
        'status',
        'longitude',
        'latitude',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'mobile_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    } 

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function donation_type()
    {
        return $this->belongsTo(DonationType::class);
    }
    public function donate()
    {
        return $this->hasMany(Donate::class);
    }

}
