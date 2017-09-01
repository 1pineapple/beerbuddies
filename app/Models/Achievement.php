<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'title',
        'description',
        'img',
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_achievements');
    }
}
