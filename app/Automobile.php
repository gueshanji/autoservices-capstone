<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    public $timestamp = false;
    protected $table = 'automobile';
    protected $fillable = [
        'Transmission',
        'Year',
        'Color'
    ];

    public function automobilemodel(){
        return $this->belongsTo('App\AutomobileModel', 'ModelID');
    }

    public function estimate(){
        return $this->hasMany('App\Estimate', 'EstimateID');
    }
}
