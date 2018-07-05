<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model {

    public $timestamps = false;
    protected $table = 'service_category';
    protected $primaryKey = 'servicecategoryid';
    protected $fillable = ['servicecategoryid','servicecategoryname','description'];
    
}