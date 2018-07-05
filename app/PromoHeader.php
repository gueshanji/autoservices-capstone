<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoHeader extends Model
{
    public $timestamp = false;
    protected $table = 'promo_header';
    protected $fillable = [
        'PromoName',
        'Duration',
        'DurationMode',
        'Price'
    ];

    public function promowarranty(){
        return $this->hasMany('App\PromoWarranty', 'PromoWarrantyID');
    }

    public function joborder(){
        return $this->hasMany('App\JobOrder', 'JobOrderID');
    }

    public function promoserviceinclusions(){
        return $this->hasMany('App\PromoServiceInclusions', '');
    }

    public function promoproductinclusions(){
        return $this->hasMany('App\PromoProductInclusions', '');
    }
}
