<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\post;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    //
    public function store(Request $request, $postId)
    {
        $request->validate([
            'body' => 'required'
        ]);

        Comment::create([
            'post_id' => $postId,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.show', $postId)->with('success', 'Comment added.');
    }

  // public function edit($id)
  //  {
  //  $post = Post::findOrFail($id);
  // return view('posts.edit', compact('post'));
   // }

}
