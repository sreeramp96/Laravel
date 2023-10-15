<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
        $post['body'] = Str::markdown($post->body);
        return view('single-page', ['post' => $post]);
    }
}