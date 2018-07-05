<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoServiceInclusions extends Model
{
    public $timestamp = false;
    public $incrementing = false;
    protected $table = 'promo_service_inclusions';
    protected $primaryKey = null;

    public function promoheader(){
        return $this->belongsTo('App\PromoHeader', 'PromoID');
    }

    public function service(){
        return $this->belongsTo('App\Service', 'ServiceID');
    }
}
