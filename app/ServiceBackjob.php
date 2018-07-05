<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceBackjob extends Model
{
    protected $table = 'service_backjob';
    protected $fillable = [
        'ServicePerformedID',
        'ServiceWarrantyID',
        'DateTime',
        'Cost',
        'Note'
    ];

    public function serviceperformed() {
        return $this->belongsTo('App\ServicePerformed','ServicePerformedID');
    }

    public function servicewarranty() {
        return $this->hasOne('App\ServiceWarranty','ServiceWarrantyID');
    }

}
