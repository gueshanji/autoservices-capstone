<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageBackjob extends Model
{
    public $timestamp = false;
    protected $table = 'package_backjob';
    protected $fillable = [
        'DateTime',
        'Cost',
        'Note'
    ];

    public function packagewarranty(){
        return $this->belongsTo('App\PackageWarranty', 'PackageWarantyID');
    }
}
