<?php

namespace App\Livewire;

use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Tasks extends Component
{
    public $filter_categorie = null;

    public function render()
    {
        return view('livewire.tasks', ['categories' => Categorie::where('user_id', Auth::user()->id,)->get()]);
    }
}
