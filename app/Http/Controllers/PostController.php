<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('post.index', compact('posts'));
    }

    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        $post = new Post();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->categoria = $request->categoria;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('posts.index');
    }

    public function show(Post $post){

        /* post = Post::find($post); */
        return view('post.show', compact('post'));
    }

    public function edit(Post $post){

        /* $post = Post::find($post); */
        return view('post.edit',compact('post'));
    }

    public function update(Request $request, Post $post){
        /* $post = Post::find($post); */

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->categoria = $request->categoria;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post){
        /* $post = Post::find($post); */

        $post->delete();

        return redirect()->route('posts.index');
    }
}
