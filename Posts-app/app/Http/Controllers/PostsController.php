<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){

        $posts = Post::latest()->with('user','likes')->paginate(15);
        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    public function store(Request $request){
       $this->validate($request, [
           'body' => 'required'
       ]);

       $request->user()->posts()->create([
            'body' => $request->body
            ]);

    return redirect()->back();
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()->back();
    }
}
