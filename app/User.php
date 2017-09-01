<?php

namespace App;

use App\Models\Achievement;
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
        'id', 'slug', 'full_name', 'nickname', 'email', 'password', 'ava_path', 'age', 'location'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function following()
    {
        return $this->belongsToMany(User::class, 'follow', 'who_follow', 'to_follower');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follow', 'to_follower', 'who_follow');
    }
    
    public function achievements()
    {
        return $this->belongsToMany(Achievement::class, 'users_achievements');
    }
    
}
