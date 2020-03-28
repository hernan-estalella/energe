<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectRadiations extends Model
{
    protected $fillable = [
        'project_id','month','radiation','consumption','generation','solar_fraction','energy_sold','energy_buyed'
    ];

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
