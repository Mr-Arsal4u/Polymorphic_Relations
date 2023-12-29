<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagValidation;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Http\Request;

class Many_to_ManyController extends Controller
{
    public function tagPost(TagValidation $request, $id)
    {
        $post = Post::find($id);
        $upcoming_tags = $request->tag_names;
        foreach ($upcoming_tags as $tag) {
            $tag = Tag::create(
                [
                    'name' => $tag,
                    'taggable_type' => $post->getMorphClass(),
                    'taggable_id' => $post->id,
                ]
            );
            $post->tags()->attach($tag);
        }

        return back()->with('status', 'success')->with('message', 'Tags created Successfully');
    }


    public function tagImage(TagValidation $request, $id)
    {
        $image = Image::find($id);
        $upcoming_tags = $request->tag_names;
        foreach ($upcoming_tags as $tag) {
            $createtag = Tag::create(
                [
                    'name' => $tag,
                    'taggable_type' => $image->getMorphClass(),
                    'taggable_id' => $image->id,
                ]
            );
            $image->tags()->attach($createtag);
        }

        return back()->with('status', 'success')->with('message', 'Tags created Successfully');
    }
    public function allposts()
    {
        $posts = Post::all();
        return view('many-many.posts', compact('posts'));
    }
    public function allimage()
    {
        $images = Image::all();
        return view('many-many.images', compact('images'));
    }
}