<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    const ADMIN_TYPE = 1; //admin
    const DEFAULT_TYPE = 2; //user
    use Notifiable;

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function account()
    {
        return $this->hasOne(Account::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public static function boot(){
        parent::boot();

        static::created(function($user){
            $user->profile()->create([
                'about' => 'Say something about yourself '.$user->name. '',
            ]);
        });
    }

    public function isAdmin()
    {
        return $this->role_id === self::ADMIN_TYPE;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
