<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;
use App\News;
use App\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('mode');
    }
    
    public function InIndex(){
        $listmovies = Movie::orderBy('id', 'DESC')->get();
        
        $listart = News::orderBy('id', 'DESC')->get();

            $items = DB::table('views')
                ->leftJoin('movies','views.viewable_id','movies.id')
                ->select('movies.id','title','poster','release','rank','trailer','slug', DB::raw('count(*) as total'))
                ->groupBy('movies.id','title','poster','release','rank', 'trailer','slug')
                ->orderby('total','DESC')
                ->take(6)
                ->get();

        return view('index', ['media' => $listmovies, 'news' => $listart, 'MostViewedWeek' => $items]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
}
