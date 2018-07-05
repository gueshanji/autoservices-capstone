<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceCategory;
use App\ServiceCategory;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use Session;

class ServiceCategoryController extends Controller
{	

    /**
     * old index
     */
    public function servicecategory(){
        $categories = ServiceCategory::orderBy('servicecategoryname')->get();
    	return view('service.servicecategory', ['categories' => $categories]);
    }

    /**
     * This serves as the index hehe
     */
    public function index(){
        $categories = ServiceCategory::orderBy('servicecategoryid')->get();
    	return view('service.servicecategory', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
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
        $customNames = [
                'servicecategoryname' => 'Service Category Name',
                'description' => 'Description',
            ];
        $customMessages = [
                'servicecategoryname.regex' => 'You cannot input special characters into :attribute field. Sorry. :(',
                'servicecategoryname.unique' => 'The :attribute you entered is already taken.',
            ];
        $validation = Validator::make($request->all(), [
            'servicecategoryname' => ['bail','required','max:100', 'unique:service_category', 'regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            'description' => ['nullable','max:255']
        ], $customMessages);
        
        $validation->setAttributeNames($customNames);
        if ($validation->fails()) {
            return redirect('servicecategory')
                ->withErrors($validation)
                ->withInput();
        }
        else{
            try{
                DB::beginTransaction();
                ServiceCategory::create([
                    'servicecategoryname' => trim($request->servicecategoryname),
                    'description' => trim($request->description),
                ]);
                DB::commit();
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errors = $e->getMessage();
                return redirect('servicecategory')
                    ->withErrors($errors);
            }
            $request->session()->flash('success', 'Record successfully added.');  
            return redirect('servicecategory');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return response()->json(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $customNames = [
            'servicecategoryname' => 'Service Category Name',
            'description' => 'Description',
        ];
        $customMessages = [
                'servicecategoryname.regex' => 'You cannot input special characters into :attribute field. Sorry. :(',
                'servicecategoryname.unique' => 'The :attribute you entered is already taken.',
            ];
        $validation = Validator::make($request->all(), [
            'servicecategoryname' => ['bail','required','max:100', 'regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            'description' => ['nullable','max:255']
        ], $customMessages);
        
        $validation->setAttributeNames($customNames);
        if ($validation->fails()) {
            return redirect('servicecategory')
                ->withErrors($validation)
                ->withInput();
        }
        else{
            try{
                DB::table('service_category')
                    ->where('servicecategoryid', $request->servicecategoryid)
                    ->update(['servicecategoryname' => ($request->servicecategoryname), 'description' => ($request->description)]);
            }
            catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errors = $e->getMessage();
                return redirect('servicecategory')
                    ->withErrors($errors);
            }
            $request->session()->flash('success', 'Record successfully updated.');  
            return redirect('servicecategory');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try{
            ServiceCategory::findOrFail($id);
            ServiceCategory::destroy($id);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('servicecategory')
                    ->withErrors($err);
        }
        return redirect('servicecategory');
    }

    public function delete($id)
    {
        try{
            ServiceCategory::findOrFail($id);
            ServiceCategory::destroy($id);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('servicecategory')
                    ->withErrors($err);
        }
        return redirect('servicecategory');
    }

}
