<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller {

    public function index() {

        $user = Auth::user();

        $schema = [];

        if($user) {
            $schema = [
                [
                    'title' => 'apps',
                    'col' => 3,
                    'row' => 3,
                    'url' => '/index/apps'
                ],
                [
                    'title' => 'test',
                    'col' => 1,
                    'row' => 1,
                    'url' => '/index/test'
                ]
            ];
        }

        return view('index', ['schema' => $schema]);
    }

    public function apps() {
        return response()->json([
            'html' => view('index.apps')->render()
        ]);
    }

    public function test() {
        return response()->json(['html' => 'hello world']);
    }

}
