<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    protected $fillable = [
        'SalesPrice',
        'MarkupPrice',
        'Quantity',
        'Date'
    ];
}