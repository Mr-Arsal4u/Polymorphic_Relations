<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostValidation;
use App\Http\Requests\UserValidation;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class One_to_OneController extends Controller
{
    public function user(UserValidation $request)
    {
        // dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $imageFile = $request->file('image');
        $imageName = time() . '_' . $imageFile->getClientOriginalName();
        $imageFile->storeAs('public/one-one', $imageName);
        $user->image()->create([
            'image' => $imageName,
        ]);
        return back()->with('status', 'success')->with('message', 'User Created Successfully');
    }

    public function postIndex()
    {
        return view('one-one.posts');
    }

    public function post(PostValidation $request)
    {
        $Post = Post::create([
            'title' => $request->title,
            'content' => $request->content,

        ]);
        $imageFile = $request->file('image');
        $imageName = time() . '_' . $imageFile->getClientOriginalName();
        $imageFile->storeAs('public/one-one', $imageName);

        $Post->image()->create([
            'image' =>  $imageName,
        ]);
        return back()->with('status', 'success')->with('message', 'Post Created Successfully');
    }
}