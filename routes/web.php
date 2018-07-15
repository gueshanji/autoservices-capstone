<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::get('/', function () {
    return view('welcome');
});*/

//Dashboard
Route::get('/','DashboardIndexController@index');
Route::get('/vehicletype','VehicleTypeController@vehicletype');
Route::get('/addvehicletype','AddVehicleTypeController@addvehicletype');
Route::get('/personnel','PersonnelController@personnel');
//ProductType
Route::resource('/producttype', 'ProductTypeController');
Route::get('/producttype{id}', 'ProductTypeController@index');
Route::get('/producttype{id}', 'ProductTypeController@create');
//ProductCategory
Route::resource('/productcategory', 'ProductCategoryController');
Route::get('/productcategory{id}', 'ProductCategoryController@index');
Route::get('/productcategory{id}', 'ProductCategoryController@create');
//ProductBrand
Route::resource('/productbrand', 'ProductBrandController');
Route::get('/productbrand{id}', 'ProductBrandController@index');
Route::get('/productbrand{id}', 'ProductBrandController@create');
//ProductUnitType
Route::resource('/productunittype', 'ProductUnitTypeController');
Route::get('/productunittype', 'ProductUnitTypeController@index');
Route::put('/productunittype', 'ProductUnitTypeController@update');
Route::post('/productunittype', 'ProductUnitTypeController@store');
Route::post('/productunittype', 'ProductUnitTypeController@delete');

Route::get('/customer','CustomerController@customer');
Route::get('/estimates', 'EstimatesController@estimates');
Route::get('/warranty', 'WarrantyController@warranty');
Route::get('/jobdescription', 'JobDescriptionController@jobdescription');
Route::get('/viewcustomer', 'ViewCustomerController@viewcustomer');
Route::get('/addpersonnel', 'AddPersonnelController@addpersonnel');
Route::get('/discount','DiscountController@discount');
Route::get('/adddiscount','AddDiscountController@adddiscount');
Route::get('/promo','PromoController@promo');
Route::get('/addpromo','AddPromoController@addpromo');
Route::get('/editpromo','EditPromoController@editpromo');
Route::get('/package','packageController@package');
Route::get('/addpackage','AddPackageController@addpackage');
Route::get('/editpackage','EditPackageController@editpackage');

//MaintenanceServices
Route::resource('servicecategory','ServiceCategoryController');
Route::post('/servicecategory', 'ServiceCategoryController@store');
Route::put('/servicecategory', 'ServiceCategoryController@update');
Route::patch('/servicecategory', 'ServiceCategoryController@delete');

Route::resource('servicebay','ServiceBayController');
Route::post('/servicebay', 'ServiceBayController@store');
Route::put('/servicebay', 'ServiceBayController@update');
Route::patch('/servicebay', 'ServiceBayController@delete');

Route::resource('transact','TransactionController');

Route::resource('/service','ServiceController');
Route::post('/service', 'ServiceController@store');
Route::put('/service', 'ServiceController@update');
Route::patch('/service', 'ServiceController@delete');

Route::get('/inspectionchecklist','ServiceController@inspectionchecklist');
Route::get('/maintenancechecklist','ServiceController@maintenancechecklist');

// Route::get('/service', function () {
//     return view('maintenance.service');
// });


