<?php

namespace App\Http\Controllers;
use App\Models\ClassName;

use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    // Show form to add a class
    public function index()
    {
        $classes = ClassName::all();
        return view('class.index', compact('classes'));
    }
    
    public function create()
    {
        return view('class.classForm');
    }
    
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        ClassName::create(['name' => $request->name]);
        return redirect()->route('class.index');
    }
    
    public function edit($id)
    {
        $class = ClassName::find($id);
        return view('class.edit', compact('class'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required']);
        $class = ClassName::find($id);
        $class->update(['name' => $request->name]);
        return redirect('class');
    }
    
    public function destroy($id)
    {
        ClassName::destroy($id);
        return redirect()->route('class.index');
    }
}
 
