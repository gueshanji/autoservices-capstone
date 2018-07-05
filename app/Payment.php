<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $fillable = [
        'TotalCharge',
        'TotalPayment',
        'Date'
    ];

    public function joborder(){
        return $this->belongsTo('App\JobOrder', 'joborderid');
    }
}
