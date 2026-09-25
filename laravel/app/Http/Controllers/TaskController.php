<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        Task::create([
            'task_name' => $request->task_name,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date,
        ]);

        return redirect('https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->task_name = $request->task_name;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->due_date = $request->due_date;

        $task->save();

        return redirect('https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('https://fictional-memory-77p4p4jx6qvrc45-8000.app.github.dev/');
    }
}