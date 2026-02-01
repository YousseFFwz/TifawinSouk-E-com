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


    public function update(request $request , $id){

        $Categories = Categories::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'required',
            'slug' => 'required|unique:categories,slug,'.$id, 
            'description' => 'nullable'
        ]);

        
        $Categories->update($validated);
        return redirect('/categories');
    }


    public function destroy($id){
         $Categories = Categories::findOrFail($id);

         $Categories->delete();
         return redirect('/categories');
    }
}
