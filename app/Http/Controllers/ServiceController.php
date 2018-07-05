<?php

namespace App\Http\Controllers;

use App\ServiceCategory;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{	

    public function servicecategory(){
        //$records = ServiceCategory::all();
        //$records = DB::table('service_category')->get();
        $records = ServiceCategory::from('service_category')->get();
    	return view('service.servicecategory', compact('records'));	
    }

    public function addservicecategory(){
    	return view('service.addservicecategory');	
    }

    public function service(){
    	return view('service.service');	
    }

    public function servicebay(){
    	return view('service.servicebay');	
    }

    public function inspectionchecklist(){
    	return view('service.inspectionchecklist');	
    }

    public function maintenancechecklist(){
        return view('service.maintenancechecklist'); 
    }
}
