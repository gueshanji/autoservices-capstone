<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelJobPerformed extends Model
{
    protected $table = 'personnel_job_performed';
    protected $fillable = [
        'JobOrderID',
        'PersonnelJobID'
    ];

    public function joborder (){
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

    public function personneljob (){
        return $this->belongsTo('App\PersonnelJob','PersonnelJobID');
    }
}
