<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectInvoices extends Model
{
    protected $fillable = [
        'project_id',
        'consumption_1','value_1','consumption_2','value_2','consumption_3','value_3','consumption_4','value_4',
        'consumption_5','value_5','consumption_6','value_6','consumption_7','value_7','consumption_8','value_8',
        'consumption_9','value_9','consumption_10','value_10','consumption_11','value_11','consumption_12','value_12',
        'annual_consumption','average_consumption','kwh_cost','hired_potency','actual_kg_co2'
    ];

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
