<?php

namespace App\Livewire;

use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoriesCreate extends Component
{
    public $name = null;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
        ]);

        Categorie::create([
            'name' => $validated['name'],
            'user_id' => Auth::user()->id,
        ]);

        $this->name = null;
    }

    public function render()
    {
        return view('livewire.categories-create');
    }
}
