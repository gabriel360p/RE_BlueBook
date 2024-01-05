<?php

namespace App\Livewire;

use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    public $query;

    public function render()
    {
        if ($this->query) {
            return view('livewire.categories', ['categories' => Categorie::where('name', 'like', '%' . $this->query . '%')->simplePaginate(5)]);
        } else {
            return view('livewire.categories', ['categories' => Categorie::simplePaginate(5)]);
        }
    }
}
