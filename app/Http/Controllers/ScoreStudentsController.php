<?php

namespace App\Http\Controllers;

//Ambil dari Student.php
//Menggunakan data tabel yang sama dari tabel students
use App\Http\Resources\ScoreStudent as ScoreResource;
use App\ScoreStudent;

class ScoreStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $students = Student::all();
    //     return view('scorestudents.index', compact('students'));
    // }

    public function index()
    {
        $scores = ScoreStudent::get();
        return ScoreResource::collection($scores);
    }

    // public function show(Student $student)
    // {
    //     //
    //     return view('scorestudents.show', compact('student'));
    // }

}
