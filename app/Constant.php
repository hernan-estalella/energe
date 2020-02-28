<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constant extends Model
{
    protected $fillable = [
        'ars_usd','kg_co2','trees','kwp_benefit','benefit_limit','cons_conv_factor'
    ];
}
