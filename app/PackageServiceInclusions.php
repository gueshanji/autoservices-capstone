<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageServiceInclusions extends Model
{
    public $timestamp = false;
    public $incrementing = false;
    protected $table = 'package_service_inclusions';
    protected $primaryKey = null;

    public function package(){
        return $this->belongsTo('App\PackageHeader', 'PackageID');
    }
    
    public function service(){
        return $this->belongsTo('App\Service', 'ServiceID');
    }
}
