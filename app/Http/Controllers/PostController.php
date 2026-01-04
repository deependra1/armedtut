<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }
    public function edit(Post $post){
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'categories', 'tags'));
    }

    public function store(PostRequest $request){
//        $data = $request->validated();
        $post = Post::create($request->only('title', 'body', 'category_id'));
        $post->tags()->attach($request->tags);
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    public function update(Request $request, Post $post){
        $post->update($request->only('title', 'body', 'category_id'));
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
