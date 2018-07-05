<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageWarranty extends Model
{
    public $timestamp = false;
    protected $table = 'package_warranty';
    protected $fillable = [
        'DurationMode',
        'Duration'
    ];

    public function packageheader(){
        return $this->belongsTo('App\PackageHeader', 'PackageID');
    }

    public function packagebackjob(){
        return $this->hasMany('App\PackageBackJob', 'PackageBackJobID');
    }
}
