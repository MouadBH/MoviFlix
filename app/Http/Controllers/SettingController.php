<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\News;
use App\User;
use App\Report;
use App\Setting;
use DB;
use Charts;



class SettingController extends Controller
{
    public function index(){
        $countm = Movie::count();
        $countn = News::count();
        $countu = User::count();
        $countr = Report::where('solved', 0)->count();

        if (Setting::hasChecked()) {
        	$isChecked = "checked";
        }else{
        	$isChecked = "";
        }   

        $getVesiters = DB::table('visitortracker_visits')->where(DB::raw("(DATE_FORMAT(created_at,'%m'))"),date('m'))->get();

        $chart = Charts::database($getVesiters, 'line', 'Highcharts')
                  ->title("Visiters of ".date('M'))
                  ->elementLabel("Total Day Visiters")
                  ->responsive(true)
                  ->lastByDay(date('m'));

        $getLastUsers = User::orderBy('id', 'desc')->take(8)->get();

        $getSettings = Setting::find(1)->first();

        return view('admin.index', [
        	'countm' => $countm,
        	'countn' => $countn,
        	'countu' => $countu,
        	'countr' => $countr,
        	'isChecked' => $isChecked,
            'chart' => $chart,
            'LastUsers' => $getLastUsers,
            'info' => $getSettings
        ]);
    }
    public function changeMode(Request $request)
    {
    	$set = Setting::find(1);
    	if ($request->is_off == 1) { // checked to off mode
    		$set->is_live = 0;
    	}else{
    		$set->is_live = 1;
    	}
    	$set->save();
    }
    public function update(Request $request)
    {
        $setting = Setting::find(1)->first();

        $setting->title = $request->input('title');
        $setting->description = $request->input('desc');
        $setting->keyword = $request->input('keyword');
        $setting->author = $request->input('author');

        $setting->save();

        session()->flash('success', 'Your website settings has been updated successfully.');

        return redirect('admin/dashboard');
    }
    public function setInView()
    {
        $sett = Setting::find(1)->first();
        View::share('info', $sett);
    }
}
