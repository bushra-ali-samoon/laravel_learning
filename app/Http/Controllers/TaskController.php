<?php

namespace App\Http\Controllers;
use App\Models\Task; 
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function showTaskForm(){

    return view('task.taskform');
}

public function saveTask(Request $request)
{
    // print_r($request->all());
    $task = new Task;
    $task->task = $request->task;
    $task->created_at = now();
    $task->updated_at = now();
    $task->save();

    return 'Task saved successfully!';


}
}
