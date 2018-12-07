<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Report;
use App\Movie;
use App\User;

class reportController extends Controller
{
    public function index(){
        $reportlist = Report::all();
        
        
        return view('admin.report', ['reportlist' => $reportlist]);
    }
    
    public function store(Request $request){
        
        $movie = Movie::find($request->input('movie_id'));
        
        if(Auth::check()){
            $report = new Report(); 
        
            $report->reason = $request->input('reason');
            $report->movie_id = $request->input('movie_id');
            $report->user_id = Auth::user()->id;

            $report->save();

            session()->flash('success', 'Your issue was successfully sent.');

            return redirect('movie/'.$movie->slug);    
        }else{
            session()->flash('info', 'you need to login or create your accout for reporting.');

            return redirect('movie/'.$movie->slug); 
        }
    }
    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        
        $report->solved = '1';
        
        $report->save();
         
        session()->flash('success', 'Report has been solbed successfully.');     
        
        return redirect('admin/reports');
    }
}
