<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassName;
// use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function showForm($classId)
    {
        return view('student.form', compact('classId'));
    }
    public function create($classId)
{
    return view('student.form', compact('classId'));
}


    public function index()
    {
        $students = Student::all(); // Get all students
        return view('student.index', compact('students')); // Pass students data to the view
    }
 
    public function store(Request $request)
    {
        $student = new Student;
        $student->class_id = $request->class_id;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->save();
    
        return redirect()->route('student.create');
    }
    
    


    public function edit($id)
{
    $student = Student::with('class')->find($id);
    $classes = ClassName::all(); // Get all classes for dropdown
    return view('student.edit', compact('student', 'classes'));
}

public function update(Request $request, $id)
{
    // Find student by ID
    $student = Student::find($id);

   
    // Update student data
    $student->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,  // Optionally hash password: Hash::make($request->password)
        'class_id' => $request->class_id
    ]);

    // Redirect with success message
    return redirect()->route('students.index')->with('success', 'Student updated successfully!');
}

public function destroy($id)
{
    $student = Student::find($id);
    $student->delete();
    
    return redirect()->route('student.index')->with('success', 'Student deleted successfully!');
}

}

