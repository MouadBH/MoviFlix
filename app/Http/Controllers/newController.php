<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illiminate\Http\UploadedFile;

use Auth;

use App\News;

class newController extends Controller
{
    public function index(){
        $listNews = News::all();
        
        return view('admin.news', ['news' => $listNews]);
    }
    
    public function inBlog(){
        $listart = News::orderBy('id', 'DESC')->paginate(2);
        
        return view('blog', ['news' => $listart]);
    }
    
    public function show($slug){
        $BlogInfo = News::where('slug', $slug)->first();;
        
        return view('art', ['art' => $BlogInfo]);
    }
    
    public function create(){        
        return view('admin.createnews');   
    }
    public function store(Request $request){
        $news = new News(); 
        
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->author = Auth::user()->name;
        
        if($request->hasFile('art_img')){
            $news->image = $request->art_img->store('blog');
        }
        
        $news->save();
        
        session()->flash('success', 'Article has been added successfully.');
        
        return redirect('admin/blog');
    }
    
    public function edit($id){
        $art = News::find($id);
                
        return view('admin.editnews', ['news' => $art]);
    }
    
    public function update(Request $request, $id){
        $news = News::find($id);
        
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->author = Auth::user()->name;
        
        if($request->hasFile('art_img')){
            $news->image = $request->art_img->store('blog');
        }
        
        $news->save();
        
        session()->flash('success', 'Article has been updated successfully.');
        
        return redirect('admin/blog');
    }
    
    public function destroy(Request $request, $id){
        $news = News::find($id);
        
        $news->delete();
        
        session()->flash('delete', 'Article has been deleted successfully.');
        
        return redirect('admin/blog');
    }
}
