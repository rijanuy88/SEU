<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Carbon\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        return view('Enrollment.undergrad-forms');
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
        // dd($request);

        // calc age
        $dob = Carbon::parse($request->studBirthDate);
        $age= $dob->age;

        //save student infos
        Student::create([
            'applicantID' => $request->applicantID,
            'studLastName' => $request->studLastName,
            'studFirstName' => $request->studFirstName,
            'studMiddleName' => $request->studMiddleName,
            'studSuffix' => $request->studSuffix,
            'studLandline' => $request->studLandline,
            'studMobileNumber' => $request->studMobileNumber,
            'studAddress' => $request->studAddress,
            'studBirthDate' => $request->studBirthDate,
            'studAge'=> $age,
            'studSHS'=> $request->studSHS,
            'studYearGrad'=> $request->studYearGrad,
            'studCourse1'=> $request->studCourse1,
            'studCourse2'=> $request->studCourse2,
            'studCourse3'=> $request->studCourse3,
        ]);
        return view('Enrollment.undergrad-forms');
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
