<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionChecklist extends Model
{
    protected $table = 'inspection_checklist';
    protected $fillable = [
    	'InspectionItem',
        'InspectionType'
    ];

    public function inspection(){
        return $this->belongsTo('App\Inspection','InspectionID');
    }
}
