<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\UploadTrait;
use App\Traits\LockableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    const ADMIN_TYPE = 1; //admin
    const DEFAULT_TYPE = 2; //user
    use Notifiable, UploadTrait, LockableTrait;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
    public function setPasswordAttribute($password)
    {
        if ( !empty($password) ) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

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

    public function updateProfileImage($request)
    {
        $img_arr = [];

            if($request->image){
               $image = $request->file('image');
               $name = $this->name.'_'.time();
               $folder = '/uploads/images/';
               $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
               $avatarFilePath = $folder. 'avatar/' . $name . '.' . $image->getClientOriginalExtension();

               $this->uploadUserProfile($this,$image,$folder,'public', $name);
               array_push($img_arr, ['image' => $filePath]);
               array_push($img_arr, ['avatar' => $avatarFilePath]);
            }

            $this->update([
                'name' => $request->name
            ]);

            $this->profile->update(array_merge(
                $img_arr[0] ?? [],
                $img_arr[1] ?? []
            ));
    }

    public function updateProfileDetails($request)
    {

        $this->profile()->update([
            'address'   =>  $request->address,
            'about'     =>  $request->about
        ]);

    }
}
