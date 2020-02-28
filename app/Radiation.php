<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radiation extends Model
{
    protected $fillable = [
        'jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec'
    ];

    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }
}
