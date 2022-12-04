<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }
    public function create(){

        $female_cnt = Patient::where('gender','female')->count();
        $male_cnt = Patient::where('gender','male')->count();
        return view('patients.create',compact('female_cnt','male_cnt'));
    }

    public function store(Request $request){



        Patient::create([

            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'contactnumber' => $request->contactnumber,
            'birthdate' => $request->birthdate,
            'birthplace' => $request->birthplace,
            'civilstatus' => $request->civilstatus,
            'religion' => $request->religion,
            'province' => $request->province,
            'municipality' => $request->municipality,
            'brgy' => $request->brgy,
            'cases' => $request->cases

            

        ]);

        return redirect()->back()->with('create','Patient Added Successfully');

    }
    public function show($id){

        $patient = Patient::findorfail($id);
        return view('patients.show', compact('patient'));

    }
}
