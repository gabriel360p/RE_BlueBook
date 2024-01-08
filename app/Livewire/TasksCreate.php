<?php

namespace App\Livewire;

use App\Models\Categorie;
use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class TasksCreate extends Component
{
    public $task;
    
    public function render()
    {
        return view('livewire.tasks-create', ['categories' => Categorie::where('user_id', Auth::user()->id)->orderBy('name', 'asc')->get()]);
    }
}
