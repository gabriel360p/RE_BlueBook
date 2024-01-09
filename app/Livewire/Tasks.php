<?php

namespace App\Livewire;

use App\Models\Categorie;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Tasks extends Component
{
    public $filter_categorie = null;

    public function check (Task $task){
        dd($task);
    }

    public function render()
    {
        // $subtasks = Task::first()->with(['subtasks','categorie'])->get();
        // dd($subtasks);

        return view('livewire.tasks', [
            'categories' => Categorie::where('user_id', Auth::user()->id)->get(),
            'tasks' => Task::where('user_id', Auth::user()->id)->with(['subtasks','categorie'])->get(),
        ]);
    }
}
