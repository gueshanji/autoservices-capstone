<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsUsed extends Model
{
    public $timestamp = false;
    protected $table = 'products_used';
    protected $fillable = [
        'DateUsed',
        'SubTotal'
    ];

    public function sales(){
        return $this->belongsTo('App\Sales', 'SalesID');
    }

    public function joborder(){
        return $this->belongsTo('App\JobOrder', 'JobOrderID');
    }
}
