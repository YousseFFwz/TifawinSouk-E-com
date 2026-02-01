<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories ;
use Illuminate\Support\Str;

class CategorieController extends Controller
{
    public function index(){
        $categories = categories::all();
        return view('categories.index' ,compact('categories'));
    }

    public function create(){
        return view('categories.create') ;
    }

    public function store(request $request){
        $validated = $request->validate([
            'nom' => 'required|max:255',
            'description' => 'nullable'
            ]);

       categories::create([
            'nom' => $request->nom,
            'slug' => Str::slug($request->nom), 
            'description' => $request->description,
        ]);

            return view('categories.index');
    }


    public function edit($id){
        $Categories = Categories::findOrFail($id);
        return view('categories.edit', compact('Categories'));
    }
}
