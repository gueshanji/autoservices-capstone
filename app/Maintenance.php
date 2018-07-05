<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenance';
    protected $fillable = [
    	'MaintenanceChecklistID',
        'CheckAdjust',
        'Inspect',
        'MaterialRequired',
        'CarriedOut',
        'Note'
    ];

    public function maintenanceheader(){
        return $this->belongsTo('App\Maintenance','MaintenanceID');
    }

    public function maintenancechecklist(){
        return $this->belongsTo('App\MaintenanceChecklist','MaintenanceChecklistID');
    }
}
