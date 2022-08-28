<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller {

    public function index() {
        $user = Auth::user();

        return view('chat.chat', ['name' => $user->username]);
    }

}
