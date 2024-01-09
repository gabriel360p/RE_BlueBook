<?php

namespace App\Http\Controllers;

use App\Models\Subtask;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = Task::create([
            'task' => $request->input('task'),
            'date' => $request->input('date'),
            'categorie_id' => $request->input('categorie'),
            'user_id' => Auth::user()->id,
        ]);

        try {
            $subtasks = $request->subtask;
            if (sizeof($subtasks) != 0) {
                for ($i = 0; $i < sizeof($subtasks); $i++) {
                    Subtask::create([
                        'subtask' => $subtasks[$i],
                        'task_id' => $task->id,
                        'user_id' => Auth::user()->id,
                    ]);
                }
            }
            return back();
        } catch (\Throwable $th) {
            return back();
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update([
            'task' => $request->input('task'),
            'date' => $request->input('date'),
            'categorie_id' => $request->input('categorie'),
        ]);
        return back();
    }

    public function update_subtask(Request $request, Subtask $subtask)
    {
        $subtask->update([
            'subtask' => $request->input('subtask'),
        ]);
        return back();
    }

    public function store_subtask(Request $request, Task $task)
    {
        Subtask::create([
            'subtask' => $request->input('subtask'),
            'task_id' => $task->id,
            'user_id' => Auth::user()->id
        ]);
        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
