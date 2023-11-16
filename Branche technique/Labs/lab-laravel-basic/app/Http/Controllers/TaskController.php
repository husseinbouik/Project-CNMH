<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        // Validate and store the new task in the database
        // Redirect to the index page with a success message
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

    public function update(Request $request, Task $task)
    {
        // Validate and update the task in the database
        // Redirect to the index page with a success message
    }

    public function destroy(Task $task)
    {
        // Delete the specified task from the database
        // Redirect to the index page with a success message
    }}
