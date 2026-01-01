<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
    public function create(){
        return view('posts.create');
    }
    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function store(Request $request){
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    public function update(Request $request, Post $post){
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
