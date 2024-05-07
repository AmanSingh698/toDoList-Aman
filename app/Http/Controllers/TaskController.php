<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view("home",compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = new Task;
        $task->tasks = $request->taskname;
        // $task->completed = $request->reward;

        $task->save();

        return redirect()->route('task.index')->with('status','Task Created Successfully.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $task = Task::where('id',$id)->update([
            "status" => "Completed", 
        ]);

        
        return redirect()->route('task.index')
                ->with('status','Task Details updated Succesfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tasks = Task::find($id);

        $tasks->delete();

        return redirect()->route('task.index')
                        ->with('status','Task Details deleted Successfully.');
    }
}
