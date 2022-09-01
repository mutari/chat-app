<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    use HasFactory;

    public function getByPostId($post_id) {
        return DB::table('comments')
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->select('comments.*', 'users.username')
            ->where('post_id', $post_id)
            ->orderBy('comments.id', 'desc')
            ->get();
    }

}
