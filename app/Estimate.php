<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    public $timestamp = false;
    protected $table = 'estimate';
    
    public function customer(){
        return $this->belongsTo('App\Customer', 'CustomerID');
    }

    public function automobile(){
        return $this->belongsTo('App\Automobile', 'AutomobileID');
    }

    public function inspection(){
        return $this->belongsTo('App\Inspection', 'InspectionID');
    }
}
