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

        $cmClass = new CmClass;
        $cmClass->class_letter = $request->class_letter;
        $cmClass->class_number = $request->class_number;
        $cmClass->school_id = $request->school_id;
        $cmClass->cm_lead_teacher_id = 999;//TODO
        $cmClass->school_year = $request->school_year;
        //TODO ensure the random string is unique
        $cmClass->class_code = str_random(8);

        $cmClass->save();

        return redirect('/classes');
    }

    public function delete_data(CmClass $class){
        $class->delete();
        //return redirect('/classes');
    }
}
