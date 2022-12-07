<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller {

    public function index() {

        $user = Auth::user();

        $schema = [];

        if($user)
            $schema = [
                [
                    'title' => 'apps',
                    'col' => 3,
                    'row' => 3,
                    'start-col' => 5,
                    'start-row' => 2,
                    'url' => '/index/apps'
                ]
            ];
        else
            $schema = [
                [
                    'title' => 'apps',
                    'col' => 3,
                    'row' => 3,
                    'start-col' => 5,
                    'start-row' => 2,
                    'url' => '/index/apps'
                ]
            ];

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
