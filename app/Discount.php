<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public $timestamp = false;
    protected $table = 'discount';
    protected $fillable = [
        'DiscountName',
        'DiscountRate',
        'DiscountType'
    ];
}
