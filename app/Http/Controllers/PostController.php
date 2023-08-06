<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
   
    public function index()
    {
        return view('posts.posts' , ['posts'=> Post::all()]);

    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required'
        ]);
        
        Post::create([
            'title' => $request->title,
            'description' => $request->desc,
            'user_id' => 1
        ]);

        return redirect('/posts');

    }

    public function show($id)
    {
        return view('posts.show', ['post' => Post::find($id)]);
    }

    public function edit($id)
    {

        return view('posts.edit', ['post' => Post::find($id)]);
        
    }
    public function update(Request $request , $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required'
        ]);
        
        Post::where('id' , $id)->update([
            'title' => $request->title,
            'description' => $request->desc
        ]);

        return redirect('/posts');
    }
    public function delete($id)
    {
        Post::find($id)->delete();
        return redirect('/posts');
    }
}
