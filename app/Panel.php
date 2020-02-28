<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    protected $fillable = [
        'name', 'power'
    ];

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
