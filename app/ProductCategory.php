<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';
    protected $fillable = [
        'CategoryName'
    ];
    
    public function producttype()
    {
        return $this->hasMany('App/ProductType', 'ProductTypeID');
    }
}
