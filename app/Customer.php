<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamp = false;
    protected $table = 'customer';
    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'ContactNumber',
        'CompleteAddress',
        'Barangay',
        'City',
        'Province',
        'EmailAddress'
    ];

    public function estimate(){
        return $this->hasMany('App\Estimate', 'EstimateID');
    }
}
