<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

 public function store(Request $request)
{
    $request->validate([
        'task' => 'required'
    ]);

    \App\Models\Todo::create([
        'task' => $request->task
    ]);

    return redirect()->back();
}

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['task' => 'required']);
        $todo = Todo::findOrFail($id);
        $todo->task = $request->task;
        $todo->is_completed = $request->has('is_completed');
        $todo->save();

        return redirect()->route('todos.index');
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
