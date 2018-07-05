<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDamaged extends Model
{
    public $timestamp = false;
    protected $table = 'product_damaged';
    protected $fillable = [
        'State',
        'Quantity',
        'Date',
        'Remarks'
    ];

    public function product(){
        return $this->belongsTo('App\Product', 'ProductID');
    }
}
