<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function showCreateForm()
    {
        return view('create-post');
    }

    public function storeNewPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        $newPosts = Posts::create($incomingFields);

        return redirect("/post/{$newPosts->id}")->with('success', 'New post successfully created');
    }

    public function viewSinglePost(Posts $post)
    {
        return view('single-page', ['post' => $post]);
    }
}