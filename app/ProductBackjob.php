<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBackjob extends Model
{
    public $timestamp = false;
    protected $table = 'product_backjob';
    protected $fillable = [
        'Date',
        'Cost',
        'Note'
    ];

    public function joborder(){
        return $this->belongsTo('App\JobOrder', 'JobOrderID');
    }

    public function productwarranty(){
        return $this->belongsTo('App\ProductWarranty', 'ProductWarrantyID');
    }
}
