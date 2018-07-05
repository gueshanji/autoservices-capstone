<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $fillable = [
    	'ServiceCategoryID',
        'ServiceName',
        'SizeType',
        'Class',
        'EstimatedTime',
        'InitialPrice'  	
    ];

    public function servicecategory()
    {
        return $this->belongsTo('App\ServiceCategory','ServiceCategoryID');
    }

    public function serviceperformed()
    {
        return $this->hasMany('App\ServicePerformed','ServiceID');
    }
}
