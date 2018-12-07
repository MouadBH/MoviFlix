<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Watch;
use App\User;
use App\Movie;

use Auth;

class watchController extends Controller
{
    function __construct()
    {
        $this->middleware("auth");
    }
    public function addToWatchLater(Request $request){
        $movie = new Watch(); 
        
        $movie->movie_id = $request->movie_id;
        $movie->user_id = Auth::user()->id;
        
        $movie->save();
                
    }
    
    public function show(){
        
        $UserMovie = User::find(Auth::user()->id)->movies()->paginate(8); 
        
        return view('account', ['wlmedia' => $UserMovie]);
    }
    
    public function destroy(Request $request){
        $movie = Watch::where([
            ['movie_id','=', $request->movie_id],
            ['user_id','=', Auth::user()->id]
        ]);
        
        $movie->delete();
                
    }
    
}
