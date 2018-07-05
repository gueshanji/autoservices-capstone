<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoWarranty extends Model
{
    public $timestamp = false;
    protected $table = 'promo_warranty';
    protected $fillable = [
        'DurationMode',
        'Duration'
    ];

    public function promoheader(){
        return $this->belongsTo('App\PromoHeader', 'PromoID');
    }

    public function promobackjob(){
        return $this->hasMany('App\PromoWarranty', 'PromoWarrantyID');
    }
}
