<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoBackjob extends Model
{
    public $timestamp = false;
    protected $table = 'promo_bakcjob';
    protected $fillable = [
        'DateTime',
        'Cost',
        'Note'
    ];

    public function productwarranty(){
        return $this->belongsTo('App\ProductWarranty', 'ProductWarrantyID');
    }
}
