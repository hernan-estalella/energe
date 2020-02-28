<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inverter extends Model
{
    protected $fillable = [
        'name','min_panels','max_panels'
    ];
}
