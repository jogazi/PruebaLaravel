<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$taskList = task::where("state","=","A")->paginate(4);
        $taskList = Task::orderByDesc('priority','expirationDate')->paginate(4);

        return view('task.index', compact('taskList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $task = Task::get();
        return view('task.create', compact('task'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Task::create($request->all());

        $tasks = Task::paginate(4);
        return redirect()->route('tasks', $tasks)
            ->with('status', 'Task Create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($task)
    {
        $taskData = Task::find($task);
        return view('task.edit', compact('taskData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task->update($request->all());

        return redirect()->route('editTask', $task->idTask)
            ->with('status', 'Task Saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return back();
    }
}
