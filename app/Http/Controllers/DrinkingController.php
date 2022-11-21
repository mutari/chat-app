<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinkingController extends Controller {

    public function index() {
        return view('drinking.index');
    }

    public function cards() {
        return view('drinking.cards.index');
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

    public function shotsHour() {
        return view('drinking.shotsHour.index');
    }


    public function feeemMenu() {
        return view('drinking.feeem.new-game');
    }

    public function createGame(Request $request) {

        $lobbyName = $request->get('lobbyName');

        return response()->json(['data' => $lobbyName, 'status' => 'created']);
    }

}
