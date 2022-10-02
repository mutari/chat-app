<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class DrinkingGame extends Controller {

    public function index() {
        return view('drinking.index');
    }

    public function recipes() {

        $path = storage_path() . "/json/drinks.json";

        $drinks = json_decode(file_get_contents($path), true);

        return view('drinking.recipe.recipes', ['drinks' => $drinks]);
    }

    public function recipe($id) {

        $path = storage_path() . "/json/drinks.json";

        $drinks = json_decode(file_get_contents($path), true);

        $drinkData = [];
        foreach ($drinks as $drink) {
            if($drink['id'] == $id) {
                $drinkData = $drink;
                break;
            }
        }

        return view('drinking.recipe.recipe', ['drink' => $drinkData]);
    }


    public function feeemMenu() {
        return view('drinking.feeem.new-game');
    }

    public function createGame(Request $request) {

        $lobbyName = $request->get('lobbyName');

        return response()->json(['data' => $lobbyName, 'status' => 'created']);
    }

}
