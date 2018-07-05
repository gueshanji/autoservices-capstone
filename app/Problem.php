<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = 'problem';
    protected $fillable = [
        'JobOrderID',
        'Problem',
        'isPerformed'
    ];

    public function joborder() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

}
