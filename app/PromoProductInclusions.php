<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoProductInclusions extends Model
{
    public $timestamp = false;
    public $icrementing = false;
    protected $table = 'promo_product_inclusions';
    protected $primaryKey = null;
    protected $fillable = [
        'Quantity'
    ];

    public function promoheader(){
        return $this->belongsTo('App\PromoHeader', 'PromoID');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'ProductID');
    }
}
