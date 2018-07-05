<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $table = 'inspection';
    protected $fillable = [
    	'InspectionChecklistID',
        'Assessment',
        'Note'
    ];

    public function inspectionchecklist(){
        return $this->belongsTo('App\InspectionChecklist','InspectionChecklistID');
    }
}
