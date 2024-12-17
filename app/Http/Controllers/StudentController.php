<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view('components.students', ['students' => $students]);
    }

    public function create()
    {
        return view('components.create');
    }
    public function store(Request $req)
    {
        $data = $req->validate([
            'name' => 'required',
            'phone' => 'required',
            'class' => 'required',
            'dob' => 'required',
        ]);
        Student::create($data);
        return redirect('students')->with('success', 'Student has been created successfully');
    }
}
