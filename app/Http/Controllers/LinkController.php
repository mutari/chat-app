<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{

    public function index() {
        $databaseToken = 'f09d487bdb94409f8b35028594dc9802';

        $response = \Notion::database($databaseToken)->query();

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

            $nextResponse = \Notion::database($databaseToken)
                ->offset($response->nextCursor())
                ->query();

            $response = $nextResponse;
        }

        return view('link.index', ['notion' => $out, 'data' => json_encode($out)]);
    }

}
