<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessor extends Model
{
    protected $fillable = [
        'name', 'email', 'telephone'
    ];
}
