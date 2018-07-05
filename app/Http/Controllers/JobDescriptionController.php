<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobDescription;
use App\JobDescription;
use DB;
use Validator;
use Redirect;
use Session;


class JobDescriptionController extends Controller
{	
    public function jobdescription()
    {
    	return view('personnel.jobdescription');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobdesc = DB::table('job_description')->get();

        return view('personnel/jobdescription', ['jobdesc' => $jobdesc]);
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
        $rules = [
            'name' => ['required','max:50','unique:JobDescription','regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
        ];

        $messages = [
            'unique' => ':attribute already exists.',
            'required' => 'The :attribute field is required.',
            'max' => 'The :attribute field must be no longer than :max characters.',
            'regex' => 'The :attribute must not contain special characters.'                
        ];

        $niceNames = [
            'name' => 'Job Description'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->setAttributeNames($niceNames);

        if ($validator->fails()) {
            return redirect('jobdescription')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            try{
                DB::beginTransaction();
                JobDescription::create([
                    'jobdescription' => trim($request->jobdescription)
                ]);
                DB::commit();
            }
            catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errMess = $e->getMessage();
                return Redirect::back()->withErrors($errMess);
            }
            $request->session()->flash('success', 'Successfully added.');  
            return Redirect('jobdescription');
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
        //
    }

 
}