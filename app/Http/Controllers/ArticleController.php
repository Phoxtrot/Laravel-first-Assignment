<?php

namespace App\Http\Controllers;

use App\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
    	$article = article::find($id);
    	return view ('article.show', ['article'=>$article]);
    }
    public function index()
    {
    	$article = article::latest()->get();
    	return view ('article.index', [
    		'articles' => $article
    	]);
    }
    public function create()
    {
    	return view ('article.create');
    }
    public function store()
    {
    	//dd(request()->all());
    	$article = new article();
    	$article->title = request('title');
    	$article->excerpt = request('excerpt');
    	$article->body = request('body');
    	$article->save();
    	return redirect('articles');
    }
    public function edit($id)
    {
    	$article = article::find($id);

    	return view('article.edit',[
    		'article'=>$article
    	]);
    }
    public function update($id)
    {
    	$article = article::find($id);
    	$article->title = request('title');
    	$article->excerpt = request('excerpt');
    	$article->body = request('body');
    	$article->save();
    	return redirect('articles/'.$article->id);
    }
    
}
