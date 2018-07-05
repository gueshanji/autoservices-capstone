<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceBay extends Model
{
    protected $table = 'service_bay';
    protected $fillable = [
    	'ServiceBayName',
    	'Description'
    ];
}
