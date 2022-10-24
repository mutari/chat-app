<?php

namespace App\Http\Controllers;

use App\Models\Post;
use FiveamCode\LaravelNotionApi\Notion;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller {

    public function index() {
        $user = Auth::user();
        
        $data = \Notion::database('f09d487bdb94409f8b35028594dc9802')->limit(5)->query()->asCollection();

        $out = [];
        
        foreach ($data as $page) {
            
            
            //$out[] = $page->getPropertyKeys();
            
            $out[] = $page->getProperty('Link')->getRawContent();
            
            //$out[] = $page->getProperties();
            
            
            /*$out[$page->id] = [
                'link' => $page->rawProperties->Link->url
            ];*/
            
        }
        
        return view('chat.chat', ['name' => $user->username, 'data' => json_encode($out)]);
    }

}
