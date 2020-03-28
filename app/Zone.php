<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        'name'
    ];

    public function radiation()
    {
        return $this->hasOne('App\Radiation');
    }

    public function clients()
    {
        return $this->hasMany('App\Client');
    }
}
