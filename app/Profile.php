<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['bio','img','country','points'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
