<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionHeader extends Model
{
    protected $table = 'inspection_header';
    protected $fillable = [
        'Date'
    ];

    public function job() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }
}
