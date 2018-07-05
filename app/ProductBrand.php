<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    protected $table = 'product_brand';
    protected $fillable = [
        'BrandName'
    ];

    public function product()
    {
        return $this->hasMany('App/Product','ProductID');
    }
}
