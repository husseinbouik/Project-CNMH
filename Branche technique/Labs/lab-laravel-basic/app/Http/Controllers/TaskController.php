<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormTaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index()
    {
        // Retrieve all tasks from the database
        $tasks = Task::all();

        // Return a view with the tasks
        return view('blog.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        // Return a view to create a new task
        return view('blog.create');
    }

    public function store(FormTaskRequest $request, Task $task)
    {
  
     // 1. Validation
     $validatedData = $request->validated();

     // 2. Create the Task
     $task->create($validatedData);
 
     // 3. Redirect with Success Message
     return redirect()->route('tasks.index')->with('success', 'Task created successfully');
    }


    public function show(Task $task)
    {
        // Show details of a specific task
        // Return a view with the task details
    }

    public function edit(Task $task)
    {
        // Return a view to edit the specified task
        return view('blog.edit', ['task' => $task]);
    }

    public function update(FormTaskRequest $request, Task $task)
    {

     // 1. Validation
     $validatedData = $request->validated();

     // 2. Update the Task
     $task->update($validatedData);
 
     // 3. Redirect with Success Message
     return redirect()->route('tasks.index')->with('success', 'Task updated successfully');}

    public function destroy(Task $task)
    {
        $task->delete();
 
        // 3. Redirect with Success Message
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}
