<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => request('title'),
            'slug' => Str::slug(request('title'), '-'),
            'content' => request('content'),
            'category_id' => request('category_id')    
        ]);

        return redirect()->route('post.index')->with('success', 'Post berhasil ditambahkan!');
    }

    public function edit(Post $post)
    {
        // $post = post::find($id);
        $categories = Category::all();

        return view('post.edit', compact('post', 'categories'));
    }

    public function update(Post $post)
    {
        // $post = post::find($id);

        $post->update([
            'title' => request('title'),
            // 'slug' => Str::slug(request('title'), '-'),
            'content' => request('content'),
            'category_id' => request('category_id')
        ]);


        return redirect()->route('post.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index')->with('success', 'Post berhasil dihapus!');

    } 

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
}
