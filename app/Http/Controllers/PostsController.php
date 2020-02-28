<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function show($slug)
    {
     	$posts = Post::where ('slug', $slug)->firstorFail();
     	//dd($posts);
     	//$posts = [
    	//	'first-post' => 'my first post',
    	//	'second-post' => 'Ill keep on'
    	//];

    	//if (! $posts){
    	//abort(404, 'Post does not exist');
    	//}
    	return view('/post', [
    		'post'=> $posts
    	]);
    } 
}
