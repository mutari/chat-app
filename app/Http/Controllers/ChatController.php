<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller {

    public function index() {
        $user = Auth::user();
        
        return view('chat.chat', ['name' => $user->username]);
    }
    
    public function getUsers() {
        $allUsers = (new User())->getUsers(true);
    
        return response()
            ->json([
                'html' => view('chat.user.all', ['users' => $allUsers])->render()
            ])
            ->setStatusCode(200);
    }

}
