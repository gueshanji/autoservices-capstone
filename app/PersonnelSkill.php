<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelSkill extends Model
{
    protected $table = 'personnel_skill';
    protected $fillable = [
        'SkillID',
        'PersonnelID',
        'isMastered'
    ];

    public function skill() {
        return $this->belongsTo('App\JobOrder','JobOrderID');
    }

    public function personneljob() {
        return $this->belongsTo('App\PersonnelJob','PersonnelJobID');
    }
}
