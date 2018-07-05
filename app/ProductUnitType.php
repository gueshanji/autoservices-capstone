<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUnitType extends Model
{
    protected $table = 'product_unit_type';
    protected $fillable = [
        'UnitType',
        'Unit',
        'Size'
    ];

    public function product()
    {
        return $this->hasMany('App/Product','ProductID');
    }
}
