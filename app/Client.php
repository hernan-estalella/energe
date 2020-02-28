<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'address', 'lat', 'lng', 'zone_id', 'email', 'telephone'
    ];

    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
