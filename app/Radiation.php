<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radiation extends Model
{
    protected $fillable = [
        'zone_id','m_1','m_2','m_3','m_4','m_5','m_6','m_7','m_8','m_9','m_10','m_11','m_12'
    ];

    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }
}
