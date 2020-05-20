<?php

namespace App\Http\Controllers;

//Ambil dari Student.php
//Menggunakan data tabel yang sama dari tabel students
use App\Student;
use App\Mapel;

use Illuminate\Http\Request;

class ScoreStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $mapel = Mapel::all();
        return view('scorestudents.index', compact('students','mapel'));
    }


    public function show(Student $student)
    {
        //
        // dd($student->mapel[0]->pivot->mapel_id);
        return view('scorestudents.show', compact('student'));
    }

     public function edit($student_id, $id)
    {
        //
        $student = \App\Student::find($student_id);
        $nilai = \App\ScoreStudent::find($id);
        $mapel = \App\Mapel::find($nilai->mapel_id);
        // dd($mapel);
        return view('scorestudents.edit', ['nilai'=> $nilai, 'student'=>$student, 'mapel'=>$mapel]);
        // return view('scorestudents.edit', compact('students','nilai','mapel'));
    }

    public function create($student_id)
    {
        $student = \App\Student::find($student_id);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
       
    }

}
