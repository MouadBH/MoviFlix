<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illiminate\Http\UploadedFile;
use App\Movie;
use App\Genre;
use App\Watch;
use App\Favorite;
use Auth;


use App\Http\Requests\movieRequest;

class MovieController extends Controller
{
    

    public function __construct(){        
       // return $this->middleware('auth');
    }
    
    public function index(){
        $listmovies = Movie::all();
        
        return view('admin.movie', ['media' => $listmovies]);
    }
    
    public function inIndex(){
        $listmovies = Movie::orderBy('id', 'DESC')->get();
        $v = Movie::all();
        
        return view('index', ['media' => $listmovies ,'v' => $v]);
    }

    
    public function show($slug){
        $MovieInfo = Movie::where('slug', $slug)->first();

        //$MovieInfo->addView();
        
        if(!Auth::check()){
            return view('media',['media' => $MovieInfo]);
        }else{
        
        // $movie =  Watch::where('movie_id', $MovieInfo->id)->first(); 
        // $userId =  Watch::where('user_id', Auth::user()->id)->first(); 
        // $isFav =  Favorite::where('movie_id', $MovieInfo->id)->first(); 

        $isWatchmovie =  Watch::where([
            ['movie_id', $MovieInfo->id],
            ['user_id', Auth::user()->id]
        ])->first(); 
        $isFav =  Favorite::where('movie_id', $MovieInfo->id)->first(); 
        //dd($userId);


        return view('media', [
            'media' => $MovieInfo,
            'movielater' => $isWatchmovie,
            'isFav' => $isFav
        ]);
        
        }
    }
    public function search($value='')
    {
        if (!isset($_GET['search-keyword'])) {
            return view('errors.404');
        }
        $search = $_GET['search-keyword'];

        $items = Movie::where('title', 'like', '%' . $search . '%')->orderBy('id', 'DESC')->paginate(20);
        if (count($items)) {
            return view('movies', ['media' => $items]);
        }else{
            return view ('movies')->withMessage('No Details found. Try to search again !');
        }
        

    }
    
    public function inMovies(){
        $listmovies = Movie::orderBy('id', 'DESC')->paginate(20);
        
        return view('movies', ['media' => $listmovies]);
    }
    
    public function create(){
        $listgenres = Genre::all();
        
        return view('admin.createmovie', ['genres' => $listgenres]);   
    }
    
    public function store(movieRequest $request){
        $movie = new Movie(); 
        
        $movie->title = $request->input('title');
        $movie->story = $request->input('story');
        $movie->poster = $request->input('poster');
        $movie->cover = $request->input('cover');
        $movie->trailer = $request->input('trailer');
        $movie->type = $request->input('typem');
        $movie->genre = implode(', ', $request->input('genre'));
        //$movie->genre = $request->input('genre');
        $movie->release = $request->input('release');
        $movie->rank = $request->input('rank');
        $movie->time = $request->input('time');
        $movie->director = $request->input('director');
        $movie->language = $request->input('lang');

            $json = file_get_contents($request->input('sl'));
            $data = json_decode($json,true);
            $movie->stremlink = $data['files'][0];

        if($request->hasFile('sub')){
            $movie->subtitle = $request->sub->store('subtitle');
        }
        
        $movie->save();
        
        session()->flash('success', 'Movie has been added successfully.');
        
        return redirect('admin/movie');
    }
    
    public function edit($id){
        $movie = Movie::find($id);
        
        $listgenres = Genre::all();
        
        return view('admin.editmovie', ['movie' => $movie, 'genres' => $listgenres]);
    }
    
    public function update(movieRequest $request, $id){
        $movie = Movie::find($id);
        
        $movie->title = $request->input('title');
        $movie->story = $request->input('story');
        $movie->poster = $request->input('poster');
        $movie->cover = $request->input('cover');
        $movie->trailer = $request->input('trailer');
        $movie->type = $request->input('typem');
        $movie->genre = implode(', ', $request->input('genre'));
        //$movie->genre = $request->input('genre');
        $movie->release = $request->input('release');
        $movie->rank = $request->input('rank');
        $movie->time = $request->input('time');
        $movie->director = $request->input('director');
        $movie->language = $request->input('lang');

            $json = file_get_contents($request->input('sl'));
            $data = json_decode($json,true);
            $movie->stremlink = $data['files'][0];

        if($request->hasFile('sub')){
            $movie->subtitle = $request->sub->store('subtitle');
        }
        
        $movie->save();

        session()->flash('success', 'Movie has been updated successfully.');
        
        return redirect('admin/movie');
    }
    
    public function destroy(Request $request, $id){
        $movie = Movie::find($id);
        
        $movie->delete();
        
        session()->flash('delete', 'Movie has been deleted successfully.');
        
        return redirect('admin/movie');
    }
}








