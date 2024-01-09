<?php

namespace App\Livewire;

use App\Models\Categorie;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class TasksCreate extends Component
{
    public $task;
    public $categorie_name=null;


    public function save()
    {

        Categorie::create([
            'name' => $this->categorie_name,
            'user_id' => Auth::user()->id,
        ]);

        $this->categorie_name=null;
    }

    public function render()
    {
        return view('livewire.tasks-create', ['categories' => Categorie::where('user_id', Auth::user()->id)->orderBy('name', 'asc')->get()]);
    }
}
