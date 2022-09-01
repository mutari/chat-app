<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $posts = (new Post())->getPosts();

        return view('post.get.all', ['posts' => $posts]);

    }

    public function newComment(Request $request): \Illuminate\Http\Response
    {
        $comment = new Comment();

        $comment->text = $request->get('text');
        $comment->post_id = $request->get('post_id');
        $comment->user_id = Auth::id();

        $comment->save();

        $comment->username = Auth::user()->username;

        return response()->view('post.comment.get.comment', ['comment' => $comment]);
    }

    public function getComments($post_id) {

        $comments = (new Comment())->getByPostId($post_id);

        return view('post.comment.get.all', ['comments' => $comments]);
    }

}
