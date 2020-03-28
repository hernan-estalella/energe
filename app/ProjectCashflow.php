<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCashflow extends Model
{
    protected $fillable = [
        'project_id','row','label','value_0','value_1','value_2','value_3','value_4',
        'value_5','value_6','value_7','value_8','value_9','value_10','value_11','value_12',
        'value_13','value_14','value_15','value_16','value_17','value_18','value_19',
        'value_20','value_21','value_22','value_23','value_24','value_25'
    ];

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
