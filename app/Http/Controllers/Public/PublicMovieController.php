<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Movie;

class PublicMovieController extends Controller
{
    public function index(){
        $listmovies = Movie::all();
        
        return view('index', ['media' => $listmovies]);
    }
}
