<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

class Users extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function OlderThanOneDay($verification_code)
    {
        return self::where('created_at', '>', Carbon::yesterday())->where(['verification_code' => $verification_code]);
    }

    public function store()
    {
        return $this->hasOne(Shop::class, 'user_id', 'id');
    }

    public function use_name()
    {
        if (isset($this->store) && $this->store->use_name == 'on') {
            return $this->name . "/" . $this->store->name;
        } else {
            return $this->name;
        }

    }

    public function use_avatar()
    {
        if (isset($this->store) && $this->store->use_avatar == 'on') {

            return 'store_logo/' . $this->store->logo;
        } else {

            if ($this->avatar == null) {

                return "avatar/user-icon.png";

            } else {
                return 'avatar/' . $this->avatar;
            }

        }


    }

    public function only_user_avatar()
    {

        if ($this->avatar == null) {

            return "avatar/user-icon.png";

        } else {
            return 'avatar/' . $this->avatar;
        }


    }
}
