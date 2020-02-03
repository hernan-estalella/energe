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
        $this->hasMany('App\Project');
    }
}
