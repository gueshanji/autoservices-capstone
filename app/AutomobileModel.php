<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomobileModel extends Model
{
    public $timestamp = false;
    protected $table = 'automobile_model';
    protected $fillable = [
        'model'
    ];

    public function automobilemake(){
        return $this->belongsTo('App\AutomobileMake', 'MakeID');
    }
}
