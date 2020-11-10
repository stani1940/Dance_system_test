<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Rating extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'rating_count','rating_performance', 'rating_artistry','ip',
    ];
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
