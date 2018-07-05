<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product_header';
    protected $fillable = [
        'ProductName',
        'Application',
        'Description',
        'Price',
        'ExpiryDate'
    ];

    public function producttype()
    {
        return $this->belongsTo('App/ProductType','ProductTypeID');
    }

    public function productbrand()
    {
        return $this->belongsTo('App/ProductBrand', 'ProductBrandID');
    }

    public function productunittype()
    {
        return $this->belongsTo('App/ProductUnitType','ProductUnitTypeID');
    }

    public function productdamaged(){
        return $this->hasMany('App\ProductDamaged', 'ProductDamagedID');
    }

    public function packageproductinclusions(){
        return $this->hasMany('App\PackageProductInclusions', '');
    }

    public function promoproductinclusions(){
        return $this->hasMany('App\PromoProductInclusions', '');
    }
}
