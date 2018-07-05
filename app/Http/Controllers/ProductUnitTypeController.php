<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\StoreProductUnitType;
use App\Http\Controllers\Controller;
use App\ProductUnitType;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class ProductUnitTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unittypes = ProductUnitType::get();
        return view('productunittype.index', compact('unittypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length. HANUDAW?',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'unitmeasurement' => 'bail|required|unique:product_unit_type|max:50|regex:/^[^~`!@#*_={}|\;<>,.?]+$/',
            'abbrv' => 'bail|required|unique:product_unit_type|max:6|regex:/^[^~`!@#*_={}|\;<>,.?]+$/',
            'category' => 'required'    
        ]);
        
        if ($validation->fails()){
            return redirect('productunittype')
                ->withErrors($validation)
                ->withInput();
        }
        else{
            try{
            DB::beginTransaction();
            ProductUnitType::create([
                'unitmeasurement' => trim($request->UnitTypeName),
                'abbrv' => trim($request->Unit),
                'category' => trim($request->UnitCategory)
            ]);
            DB::commit();

            /*$unittype = new ProductUnitType;
            $unittype->unitmeasurement = $request->get('unitmeasurement');
            $unittype->unit = $request->get('unit');
            $unittype->category = $request->get('category');
            DB::table('product_unit_type')->insert([
                ['UnitTypeName' => $unittype->unitmeasurement],
                ['Unit' => $unittype->unit],
                ['UnitCategory' => $unittype->category]
            ]);*/
            }
                catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('productunittype')
                        ->withErrors($err);
            }
            
            $request->session()->flash('success', 'Record successfully added');
            return redirect('productunittype');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unittype = ProductUnitType::find($id);
        $unittype = delete();
        return redirect('productunittype')->with('success', 'Information has been deleted');
    }
}
