<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectConstants extends Model
{
    protected $fillable = [
        'project_id','exchange_rate','panel_potency','kg_co2','trees',
        'benefit','benefit_usd','limit_kwp','limit_usd_kwp'
    ];

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
