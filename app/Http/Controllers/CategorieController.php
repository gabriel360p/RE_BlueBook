<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\CategorieRequest;

class CategorieController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function create()
    {
        return view('categories.create');
    }

    public function update(CategorieRequest $request, Categorie $categorie)
    {
        $categorie->update(['name' => $request->name]);
        return back();
    }

    public function destroy(Categorie $categorie)
    {
        try {
            $categorie->delete();
            return back();
        } catch (\Throwable $th) {
            return back()->withErrors($th);
        }
    }
}
