<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'address', 'lat', 'lng'
    ];

    public function projects()
    {
        $this->hasMany('App\Project');
    }
}
