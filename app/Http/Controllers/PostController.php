<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
class PostController extends Controller
{
    //
    public function post(){
        return view('post');
    }
    public function first(Request $request){

        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
        $post= new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->users_id= Auth::id();
        $post->save();
        
    }
}
?>