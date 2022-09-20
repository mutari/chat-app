<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class DrinkingGame extends Controller {

    public function index() {
        return view('drinking.index');
    }

    public function feeemMenu() {
        return view('drinking.feeem.new-game');
    }

    public function createGame(Request $request) {

        $lobbyName = $request->get('lobbyName');

        return response()->json(['data' => $lobbyName, 'status' => 'created']);
    }

}
