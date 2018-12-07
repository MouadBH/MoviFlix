<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index(){
    	$pages = Page::all();

    	return view('admin/pages', ['pages' => $pages]);
    }

    public function show($slug)
    {
    	$page = Page::where('slug', $slug)->first();

    	return view('page', ['page' => $page]);
    }

    public function store(Request $request){
    	$page = new Page();

    	$page->title = $request->input('title');
    	$page->body = $request->input('body');

    	if ($page->save()) {
    		session()->flash('success', 'Page has been added successfully.');
    		return redirect('admin/pages');
    	}else{
    		session()->flash('delete', 'we running in some issue here :/.');
    		return redirect('admin/pages');
    	}
    }

    public function update(Request $request,$id)
    {
    	$page = Page::find($id)->first();

    	$page->title = $request->input('title');
    	$page->body = $request->input('body');

    	if ($page->save()) {
    		session()->flash('success', 'Page has been updated successfully.');
    		return redirect('admin/pages');
    	}else{
    		session()->flash('delete', 'we running in some issue here :/.');
    		return redirect('admin/pages');
    	}
    }

    public function destroy($id)
    {
    	$page = Page::find($id)->first();

    	if ($page->delete()) {
    		session()->flash('success', 'Page has been deleted successfully.');
    		return redirect('admin/pages');
    	}else{
    		session()->flash('delete', 'we running in some issue here :/.');
    		return redirect('admin/pages');
    	}
    }
}
