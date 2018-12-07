<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;

class GenreController extends Controller
{
    public function index(){
        $listgenres = Genre::all();
        
        return view('admin.genres', ['genres' => $listgenres]);
    }
    
    public function store(Request $request){
        $genre = new Genre(); 
        
        $genre->name = $request->input('name');
        
        $genre->save();
        
        session()->flash('success', 'Genre has been added successfully.');
        
        return redirect('admin/genres');
    }
    
     public function update(Request $request, $id){
        $genre = Genre::find($id);
        
        $genre->name = $request->input('name');
        
        $genre->save();
         
        session()->flash('success', 'Genre has been updated successfully.');     
        
        return redirect('admin/genres');
    }
    
     public function destroy(Request $request, $id){
        $genre = Genre::find($id);
        
        $genre->delete();
        
        session()->flash('delete', 'Genre has been deleted successfully.');
        
        return redirect('admin/genres');
    }
}

