<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductWarranty extends Model
{
    public $timestamp = false;
    protected $table = 'product_warranty';
    protected $fillable = [
        'Duration',
        'DurationMode'
    ];

    public function servicewarranty(){
        return $this->belongsTo('App\ServiceWarranty', 'ServiceWarrantyID');
    }

    public function sales(){
        return $this->belongsTo('App\Sales', 'SalesID');
    }
}
