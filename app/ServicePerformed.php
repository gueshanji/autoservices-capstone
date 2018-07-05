<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePerformed extends Model
{
    protected $table = 'service_performed';
    protected $fillable = [
        'ServiceID',
        'JobOrderID',
        'ServiceWarrantyID'
    ];

    public function service() {
        return $this->belongsTo('App\Service','ServiceID');
    }

    public function joborder() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

    public function servicewarranty() {
        return $this->hasOne('App\ServiceWarranty','ServiceWarrantyID');
    }

}
