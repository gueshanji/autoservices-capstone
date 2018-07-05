<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageProductInclusions extends Model
{
    public $timestamp = false;
    public $incrementing = false;
    protected $table = 'package_product_inclusions';
    protected $primaryKey = null;
    protected $fillable = [
        'Quantity'
    ];

    public function package(){
        return $this->belongsTo('App\PackageHeader', 'PackageID');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'ProductID');
    }
}
