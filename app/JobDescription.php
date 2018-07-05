<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDescription extends Model
{
    public $timestamps = false;

    protected $table = 'job_description';
    protected $primaryKey = 'JobDescriptionID';
    protected $fillable = [
        'JobDescription'
    ];

    public function personneljob(){
        return $this->hasMany('App\PersonnelJob','JobDescriptionID');
    }
    
}
