<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
// use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function showForm()
    {
        return view('student.form');
    }

    public function saveStudent(Request $request)
    {
       

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password; // Secure password
        $student->save();

        return "Student registered successfully!";
    }
}
