<?php

namespace App\Http\Controllers\Api;
use  App\Http\Resources\PostResource;
use App\Models\Post;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::all()) ;

    }

    public function show($id)
    {
        return new PostResource(Post::find($id));
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

        return response()->json('Post Added');

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
        return response()->json('Post Updated!');

    }

    public function delete($id)
    {
        Post::find($id)->delete();
        return response()->json('Post Deleted!');
    }
}
