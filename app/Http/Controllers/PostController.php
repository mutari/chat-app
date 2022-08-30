<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index() {
        $user = Auth::user();

        return view('post.index', ['name' => $user->username]);
    }

    public function createPostForm() {
        return view('post.create.post');
    }

    public function createPost(Request $request): JsonResponse
    {
        $post = new Post();

        $post->title = $request->get('title');
        $post->text = $request->get('text');
        $post->user_id = Auth::id();

        $post->save();

        return response()->json($request->all());
    }

    public function getAllPosts() {

        $posts = Post::all();
        foreach ($posts as $post) {
            $post->user = $post->user;
        }

        return view('post.get.all', ['posts' => $posts]);

    }

}
