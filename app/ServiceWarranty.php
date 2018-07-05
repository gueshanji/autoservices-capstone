<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceWarranty extends Model
{
    protected $table = 'service_warranty';
    protected $fillable = [
        'JobOrderID',
        'Duration',
        'DurationMode'
    ];

    public function joborder() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

}
