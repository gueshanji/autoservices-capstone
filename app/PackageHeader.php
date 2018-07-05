<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageHeader extends Model
{
    public $timestamp = false;
    protected $table = 'package_header';
    protected $fillable = [
        'PackageName',
        'Price'
    ];

    public function packagewarranty(){
        return $this->hasMany('App\PackageWarranty', 'PackageWarrantyID');
    }

    public function joborder(){
        return $this->hasMany('App\JobOrder', 'JobOrderID');
    }

    public function packageserviceinclusions(){
        return $this->hasMany('App\PackageServiceInclusions', '');
    }

    public function packageproductinclusions(){
        return $this->hasMany('App\PackageProductInclusions', '');
    }
}
