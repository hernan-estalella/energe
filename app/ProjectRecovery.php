<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectRecovery extends Model
{
    protected $fillable = [
        'project_id','potency','investment','fiscal_bonus','inflation_1','inflation_8',
        'inflation_rest','discount_rate','van','tir','recovery_years'
    ];

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
