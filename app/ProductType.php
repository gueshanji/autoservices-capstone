<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public $timestamp = false;
    protected $table = 'product_type';
    protected $fillable = [
        'ProductTypeName'
    ];

    public function productcategory()
    {
        return $this->belongsTo('App/ProductCategory', 'ProductCategoryID');
    }

    public function product()
    {
        return $this->hasMany('App/Product','ProductID');
    }
}
