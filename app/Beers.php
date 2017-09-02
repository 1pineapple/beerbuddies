<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Beers extends Model
{
    protected $table = 'user_beer_data';

    protected $fillable = [
        'user_id',
        'beer_name',
        'beer_count',
        'beer_date'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'users');
    }
}
