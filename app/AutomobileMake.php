<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomobileMake extends Model
{
    public $timestamp = false;
    protected $table = 'automobile_make';
    protected $fillable = [
        'Make'
    ];

    public function automobilemodel(){
        return $this->hasMany('App\AutomobileModel', 'ModelID');
    }
}
