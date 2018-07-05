<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = 'process';
    protected $fillable = [
        'ServiceID',
        'ProcessName',
        'EstimatedTime'
    ];

    public function service() {
        return $this->belongsTo('App\Service','ServiceID');
    }

}
