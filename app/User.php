<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tagline',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function followers() {
        return $this->belongsToMany('App\User', 'following', 'following_id', 'follower_id');
    }

    public function following() {
        return $this->belongsToMany('App\User', 'following', 'follower_id','following_id');
    }

    public function spaces()
    {
        return $this->hasMany('App\Space');
    }

    public function broadcasts()
    {
        return $this->hasMany('App\Broadcast');
    }

    public function broadcast_spaces()
    {
        return $this->belongsToMany('App\Broadcast');
    }

}
