<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data =student::get();
        return view('student-list', compact('data'));

    }
    public function addStudent()
    {
        return view('add-student');
    }
    public function saveStudent(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $name =$request->name;
        $email =$request->email;
        $phone =$request->phone;
        $address =$request->address;


        $stu = new Student();
        $stu->name = $request->name;
        $stu->email = $request->email;
        $stu->phone = $request->phone;
        $stu->address = $request->address;
        $stu->save();
        return redirect()->back()->with('success', 'Student Added Successfully');
    }
}

