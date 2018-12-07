<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Favorite;
use App\User;
use Auth;

class favoriteController extends Controller
{
    function __construct()
    {
        $this->middleware("auth");
    }
    public function addToFavorite(Request $request){
        $favmovie = new Favorite(); 
        
        $favmovie->movie_id = $request->movie_id;
        $favmovie->user_id = Auth::user()->id;
        
        $favmovie->save();
                
    }
    
    public function show(){
                
        $thisUser = Auth::user()->id;
        
        //$favMovie DB::select("SELECT * FROM movies,favorites WHERE movies.id = favorites.movie_id AND favorites.user_id = ".$thisUser."");
        
        $favMovie = DB::table('movies')
            ->join('favorites', 'movies.id', '=', 'favorites.movie_id')
            ->where('favorites.user_id', '=', $thisUser)
            ->select('movies.*')
            ->paginate(8);
        
        return view('account', ['favMovies' => $favMovie]);
    }
    
    public function destroy(Request $request){
        $deleteThisFav = Favorite::where([
            ['movie_id','=', $request->movie_id],
            ['user_id','=', Auth::user()->id]
        ]);
        
        $deleteThisFav->delete();
                
    }
}
