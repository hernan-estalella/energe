<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectLoan extends Model
{
    protected $fillable = [
        'project_id','ammount','rate','recovery_years'
    ];

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
