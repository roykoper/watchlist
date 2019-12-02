<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    public function movies()
    {
        return $this->hasMany('App\Movie');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
