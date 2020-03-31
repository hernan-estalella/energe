<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    protected $fillable = [
        'client_id','client_name','client_address',
        'zone_id','zone_name',
        'assessor_id','assessor_name','assessor_email','assessor_telephone'
    ];    

    public function getCreatedAtFormatAttribute() {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }

    public function client() {
        return $this->belongsTo('App\Client');
    }

    public function zone() {
        return $this->belongsTo('App\Zone');
    }

    public function assessor() {
        return $this->belongsTo('App\Assessor');
    }

    public function constants() {
        return $this->hasOne('App\ProjectConstants');
    }

    public function invoices() {
        return $this->hasOne('App\ProjectInvoices');
    }

    public function proposals() {
        return $this->hasMany('App\ProjectProposals');
    }

    public function loan() {
        return $this->hasOne('App\Projectloan');
    }

    public function recovery() {
        return $this->hasOne('App\ProjectRecovery');
    }

    public function radiations() {
        return $this->hasMany('App\ProjectRadiations');
    }

    public function cashflow() {
        return $this->hasMany('App\ProjectCashflow');
    }
}
