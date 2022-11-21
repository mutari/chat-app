<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller {

    public function index() {

        return view('test.pub');

    }

    public function notion() {

        $user = Auth::user();

        $userIntegrationModel = new UserIntegration($user->id);

        // notion is null
        if(is_null($userIntegrationModel->notion) || is_null($userIntegrationModel->notion_db))
            return view('test.notion', ['notion' => '']);

        $notion = new Notion($userIntegrationModel->notion);

        $response = $notion->database($userIntegrationModel->notion_db)->query();

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

            $nextResponse = $notion->database($userIntegrationModel->notion_db)
                ->offset($response->nextCursor())
                ->query();

            $response = $nextResponse;
        }

        return view('test.notion', ['notion' => $out]);
    }

}
