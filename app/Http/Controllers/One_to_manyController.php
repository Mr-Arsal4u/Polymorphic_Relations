<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\CommentValidation;

class One_to_manyController extends Controller
{
    // public function indexPost()
    // {
    //     $postId=1;

    //     $commentText = 'A comment on the post.';

    //     $post = Post::find($postId);


    //     $comment = $post->comments()->create(['comment' => $commentText]);


    //     return response()->json(['message' => 'Comment created successfully', 'comment' => $comment]);

    // } By using this method we can fetch post without and do comment without view

    public function indexPost()
    {
        $posts = Post::all();
        return view('one-many.Allposts', compact('posts'));
    }
    public function indexImage()
    {
        $images = Image::all();
        return view('one-many.Allimages', compact('images'));
    }
    public function postComment(CommentValidation $request, $id)
    {
        $post = Post::find($id);
        $post->comments()->create([
            'comment' => $request->comment,
        ]);
        return back()->with('status', 'success')->with('message', 'Commented on post Successfully');
    }
    public function imgComment(CommentValidation $request, $id)
    {
        $image = Image::find($id);
        $image->comments()->create([
            'comment' => $request->comment,
        ]);
        return back()->with('status', 'success')->with('message', 'Commented on image Successfully');
    }
}
