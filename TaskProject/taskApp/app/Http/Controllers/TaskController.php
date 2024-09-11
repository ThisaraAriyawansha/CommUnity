<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'task' => 'required|max:100|min:5',
        ]);

        // Save the task
        $task = new Task();
        $task->task = $request->task;
        $task->save();

        $data=Task::all();
        dd($data);
        // Redirect back with success message
       //return view('tasks')->with('tasks',$data);
    }
}
