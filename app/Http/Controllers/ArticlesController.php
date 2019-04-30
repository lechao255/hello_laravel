<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    //
    public function index(){
    	$articles = Article::orderBy('created_at', 'asc')->get();

    	return view('articles.index', compact('articles'));
    }

    //
    public function create(){
    	return view('articles.create');
    }

    //
    public function store(Request $request){
    	$this->validate($request, [
    		'title' => 'required|max:50'
    	]);

    	$article = Article::create([
    		'title' => $request->title,
    		'content' => $request->content
    	]);

    	return redirect()->route('articles.index');
    }

    //
    public function edit($id){
    	$article = Article::find($id);
    	return view('articles.edit', compact('article'));
    }

    //
    public function update(Request $request, $id){
    	$this->validate($request, [
    		'title' => 'required|max:50'
    	]);

    	$article = Article::find($id);
    	$article->update([
    		'title' => $request->title,
    		'content' => $request->content
    	]);

    	return back();
    }

    //
    public function destroy($id){
    	Article::destroy($id);
    	return back();
    }
}
