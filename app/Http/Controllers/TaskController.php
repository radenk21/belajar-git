<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'task' => new Task,
            'submit' => 'Create',
            'tasks' => Task::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(TaskRequest $request)
    {
        // $request->validate([
        //     'list' => ['required', 'min:3', 'string'],
        // ]);
        Task::create($request->all());
        return back();
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task, 
            'submit' => 'Edit',
        ]);
    }

    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update(['list' => $request->list]);
        return redirect('tasks');
    }

    public function destroy($id)
    {
        $task = Task::find($id)->delete();
        return back();
    }
}
