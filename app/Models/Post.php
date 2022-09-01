<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Post extends Model {
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function getPosts() {
        return DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('comments', 'posts.id', '=', 'comments.post_id')
            ->select(DB::raw('count(comments.id) as numberOfComments, posts.*, users.username'))
            ->groupBy('posts.id')
            ->get();
    }
}
