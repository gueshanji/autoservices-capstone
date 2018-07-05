<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelWorkload extends Model
{
    protected $table = 'personnel_workload';
    protected $fillable = [
        'PersonnelID',
        'WorkStartDateTime',
        'InitialWorkload',
        'ActualWorkload'
    ];

    public function personnelheader() {
        return $this->belongsTo('App\PersonnelHeader','PersonnelID');
    }

}
