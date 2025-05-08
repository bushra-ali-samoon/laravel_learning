<?php

namespace App\Http\Controllers;
use App\Models\School;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function create()
    {
        return view('schools.form');
    }

    public function store(Request $request)
    {
        $school = new School;
        $school->school = $request->school;
        $school->address = $request->address;
        $school->save();

        return "School saved successfully!";
    }
    // this will fetch all data from database 
   // public function show()
// {
//     $schools = School::all();
//     return response()->json($schools);
// }
public function show()
{
    $schools = School::all(); // Fetch all data
    return view('schools.index', ['schools' => $schools]);
}


public function edit($id)
{
    $school = School::find($id);
    return view('schools.edit', compact('school'));

}

public function update(Request $request, $id)
{
    $school = School::find($id);
    $school->school = $request->input('school');   // avoid null error
    $school->address = $request->input('address'); // avoid null error
    $school->save();

    return redirect('schools');


}
// Redirect to the school list or another page

//  public function edit($id)
//  {
//     $school = School::find($id);
//     return view('edit');
//  }

public function destroy($id)
{
    $school = School::find($id);
    $school->delete();
    return 'success School deleted successfully!';
}

}
