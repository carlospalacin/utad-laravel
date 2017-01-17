<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = Comment::create($request->all());

        flash('Comentario creado con ID' . $comment->id);

        return redirect()->route('postsShow', ['id' => $request->input('post_id')]);
    }

    public function delete($id)
    {
        $post = Comment::find($id)->post;

        Comment::destroy($id);

        flash('Comentario borrado con ID' . id);

        return redirect()->route('postsShow', ['id' => $post->id]);
    }
}
