<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectProposals extends Model
{
    protected $fillable = [
        'project_id','name','usd_w','inverter_1_id','inverter_1_name','inverter_1_q','inverter_2_id','inverter_2_name','inverter_2_q',
        'inverter_3_id','inverter_3_name','inverter_3_q','panels_q','usd_iva','kw','benefit','porc_price','m2','generation',
        'solar_fraction','co2','trees','specific_gener','main'
    ];

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
