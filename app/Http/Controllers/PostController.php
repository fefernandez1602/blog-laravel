<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->get();
        return view('post.index', compact('posts'));
    }

    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        $post = new Post();

        $post->title = $request->title;
        $post->categoria = $request->categoria;
        $post->content = $request->content;

        $post->save();

        return redirect('/posts');
    }

    public function show($post){

        $post = Post::find($post);
        return view('post.show', compact('post'));
    }

    public function edit($post){

        $post = Post::find($post);
        return view('post.edit',compact('post'));
    }

    public function update(Request $request, $post){
        $post = Post::find($post);

        $post->title = $request->title;
        $post->categoria = $request->categoria;
        $post->content = $request->content;

        $post->save();

        return redirect("/posts/{$post->id}");
    }

    public function delete($post){
        $post = Post::find($post);

        $post->delete();

        return redirect("/posts");
    }
}
