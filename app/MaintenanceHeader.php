<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintenanceHeader extends Model
{
    protected $table = 'maintenance_header';
    protected $fillable = [
        'JobOrderID',
        'Mileage'
    ];

    public function joborder(){
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

}
