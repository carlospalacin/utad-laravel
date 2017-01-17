<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $posts = Post::where('title', 'like', '%' . $request->input('search') . '%')->get();
        }
        else
        {
            $posts = Post::all();
        }

        return view('blog.posts', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('blog.post_create');
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        flash('Post creado con ID' . $post->id);

        return redirect()->route('posts');
    }

    public function show($id)
    {
        $post       = Post::find($id);


        Comment::where('post_id', $post->id)->get();


        $comments   = $post->comments;

        return view('blog.post_view', [
            'post'      => $post,
            'comments'  => $comments
        ]);
    }

    public function delete($id)
    {
        Post::destroy($id);

        return redirect()->route('posts');
    }
}
