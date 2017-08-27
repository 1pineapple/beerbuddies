<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'who_follow', 'to_follower'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
