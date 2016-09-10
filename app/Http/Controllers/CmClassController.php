<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CmClass;
use App\ClClassLetter;
use App\ClClassNumber;
use App\ClSchool;
use App\ClSchoolYear;
use App\Http\Controllers\Controller;
use Auth;

class CmClassController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show_form()
    {
        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }

        $classes = CmClass::where('created_by', $user_id)->orderBy('created_at', 'asc')->get();


        $all_classes = CmClass::with(array('clSchool', 'cm_lead_teacher_id'))->get();
        $all_cl_class_letters = ClClassLetter::all();
        $all_cl_class_numbers = ClClassNumber::all();
        $all_cl_schools = ClSchool::all();
        $all_cl_school_years = ClSchoolYear::all();

        return view('classes.classes_list',
            [
                'all_classes'=> $all_classes
                ,'all_cl_class_letters' => $all_cl_class_letters
                ,'all_cl_class_numbers' => $all_cl_class_numbers
                ,'all_cl_schools' => $all_cl_schools
                ,'all_cl_school_years' => $all_cl_school_years
                ,'classes' => $classes
            ]);
    }

    public function submit_form(Request $request)
    {
        $this->validate($request, [
            'class_letter' => 'required'
            ,'class_number' => 'required'
            ,'school_id' => 'required'
            ,'school_year' => 'required'
        ]);

        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }

        $cmClass = new CmClass;
        $cmClass->class_letter = $request->class_letter;
        $cmClass->class_number = $request->class_number;
        $cmClass->school_id = $request->school_id;
        $cmClass->cm_lead_teacher_id = 999;//TODO
        $cmClass->school_year = $request->school_year;
        $cmClass->created_by = $user_id;
        //TODO ensure the random string is unique
        $cmClass->class_code = str_random(8);

        $cmClass->save();

        return redirect('/classes');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'class_letter' => 'required'
            ,'class_number' => 'required'
            ,'school_id' => 'required'
            ,'school_year' => 'required'
        ]);
    }

    public function edit($id)
    {
        $all_classes = CmClass::with(array('clSchool', 'cm_lead_teacher_id'))->get();
        $all_cl_class_letters = ClClassLetter::all();
        $all_cl_class_numbers = ClClassNumber::all();
        $all_cl_schools = ClSchool::all();
        $all_cl_school_years = ClSchoolYear::all();

        $class = CmClass::find($id);
        return view('classes.edit', [
            'all_classes'=> $all_classes
            ,'all_cl_class_letters' => $all_cl_class_letters
            ,'all_cl_class_numbers' => $all_cl_class_numbers
            ,'all_cl_schools' => $all_cl_schools
            ,'all_cl_school_years' => $all_cl_school_years
            ,'class' => $class
        ]);
    }

    public function update(Request $request, CmLevel $level, $id) {

        $this->validate($request, [
            'class_letter' => 'required'
            ,'class_number' => 'required'
            ,'school_id' => 'required'
            ,'school_year' => 'required'
        ]);

        if (Auth::check())
        {
            $user_id = Auth::user()->id;    
        }else{
            $user_id = 0;
        }

        $cmClass= CmClass::find($id);

        $cmClass = new CmClass;
        $cmClass->class_letter = $request->Input('class_letter');
        $cmClass->class_number = $request->Input('class_number');
        $cmClass->school_id = $request->Input('school_id');
        $cmClass->cm_lead_teacher_id = 999;//TODO
        $cmClass->school_year = $request->Input('school_year');
        $cmClass->created_by = $user_id;
        $cmClass->updated_by = $user_id;
        //TODO ensure the random string is unique
        $cmClass->class_code = str_random(8);

        $cmClass->save();

        return redirect('/classes');
    }

    public function delete_data(CmClass $class){
        $class->delete();
        return redirect('/classes');
    }
}
