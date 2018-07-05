<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintenanceChecklist extends Model
{
    protected $table = 'maintenance_checklist';
    protected $fillable = [
    	'MaintenanceCheckCategory',
        'MaintenanceCheckItem'
    ];

    public function maintenance(){
        return $this->belongsTo('App\Maintenance','MaintenanceID');
    }
}
