<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'google_id',
        'facebook_id',
        'apellido',
        'email',
        'password',
        'privilegio',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute(string $value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function imagen()
    {
        return $this->hasMany('App\Imagen');
    }

    public function Datos()
    {
        return $this->hasMany('App\Datos');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->privilegio = 'usuario';
        });
    }
}

