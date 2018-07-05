<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelJob extends Model
{
    protected $table = 'personnel_job';
    protected $fillable = [
        'PersonnelID',
        'JobDescriptionID'
    ];

    public function personnelheader (){
        return $this->hasOne('App\PersonnelHeader','PersonnelID');
    }

    public function jobdescription (){
        return $this->hasOne('App\JobDescription','JobDescriptionID');
    }
}
