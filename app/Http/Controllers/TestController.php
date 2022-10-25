<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller {
    
    public function index() {
        $response = \Notion::database('f09d487bdb94409f8b35028594dc9802')->query();
    
        $out = [];
        while (true) {
            $data = $response->asCollection();
            
            foreach ($data as $page) {
                $out[] = [
                    'title' => $page->getProperty('Title')->getRawContent()[0]['plain_text'],
                    'url' => $page->getProperty('Link')?->getRawContent(),
                    'tags' => $page->getProperty('Tags')->getRawContent()
                ];
            }
    
            if(!$response->nextCursor()) break;
    
            $nextResponse = \Notion::database('f09d487bdb94409f8b35028594dc9802')
                ->offset($response->nextCursor())
                ->query();
            
            $response = $nextResponse;
        }
    
        return view('test.index', ['notion' => $out, 'data' => json_encode($out)]);
    }
    
}
